<?php defined('ABSPATH' ) || wp_die; ?>
<?php
		// 出力を抑制
		$this->suppression		=	true;

		// WP-CRONの割り込みを停止
		if	(wp_next_scheduled('pz_linkcard_check' ) ) {
			wp_clear_scheduled_hook('pz_linkcard_check' );
		}
		if	(wp_next_scheduled('pz_linkcard_alive' ) ) {
			wp_clear_scheduled_hook('pz_linkcard_alive' );
		}

		// オプション取得
		$this->options	=	$this->pz_GetOption();

		// 開発環境用ログ
		if	($this->options['develop-mode'] ) {
			$result		=	$this->pz_OutputLOG('[Init] Start Plugin Activate Process' );
			$result		=	$this->pz_OutputLOG(print_r($this->options, true ) );
		}

		// 暫定措置
		if	(version_compare($this->options['plugin-version'], '2.1.1', '<' ) ) {
			$this->options['flg-edit-insert']		=	true;			// ビジュアル エディタに挿入ボタンを追加
			$this->options['flg-edit-qtag']			=	true;			// テキスト エディタにクイックタグを追加
		}
		if	(version_compare($this->options['plugin-version'], '2.1.7', '<' ) ) {
			$this->options['flg-anker']				=	true;			// 全体リンク（Anchorのスペルミス）
		}
		if	(version_compare($this->options['plugin-version'], '2.1.8', '<' ) ) {
			if	($this->options['sns-tw'] && $this->options['sns-fb'] && $this->options['sns-hb'] ) {
				$this->options['sns-po']			=	true;			// SNSカウントにPocketを追加したため
			}
		}
		if	(version_compare($this->options['plugin-version'], '2.2.7', '<' ) ) {
			$this->options['trim-url']				=	400;
			$this->options['nowrap-url']			=	true;
		}
		if	(version_compare($this->options['plugin-version'], '2.4.2', '<' ) ) {
			$this->options['flg-do-shortcode']		=	true;			// 設定漏れによる不具合が多発しているため、初期設定値を変更
		}
		if	(version_compare($this->options['plugin-version'], '2.4.2.4', '<' ) ) {
			$this->options['plugin-path']			=	$this->defaults['plugin-path'];
			$this->options['author-url']			=	$this->defaults['author-url'];
			$this->options['author-name']			=	$this->defaults['author-name'];
			$this->options['noopener']				=	$this->defaults['noopener'];
		}
		if	(version_compare($this->options['plugin-version'], '2.4.3', '<' ) ) {
			$this->options['plugin-abbreviation']	=	$this->defaults['plugin-abbreviation'];	// 略称
			$this->options['flg-compress']			=	$this->defaults['flg-compress'];		// CSS圧縮
			$this->options['in-thumbnail-size']		=	$this->defaults['in-thumbnail-size'];	// 内部サムネイルサイズ
			$this->options['ex-thumbnail-size']		=	$this->defaults['ex-thumbnail-size'];	// 外部サムネイルサイズ
			if	(isset($this->options['cache-image-size'] ) ) {
				$temp				=	$this->options['cache-image-size'];
				if			($temp	<=	240 ) {
					$size			=	'thumbnail';
				} elseif	($temp	<=	520 ) {
					$size			=	'medium';
				} elseif	($temp	<=	1240 ) {
					$size			=	'large';
				} else {
					$size			=	'full';
				}
				$this->options['ex-thumbnail-size']	=	$size;
			}
		}

		// 項目名称変更
		$rename_key	=	array(
			'old_key_name'		=>	'new_key_name',
			'opacity'			=>	'hover',				// パラメータ名変更のため
			'border-color'		=>	'ex-border-color',		// パラメータ細分化のため
			'border-color'		=>	'in-border-color',		// パラメータ細分化のため
			'border-color'		=>	'th-border-color',		// パラメータ細分化のため
			'flg-invalid'		=>	'error-mode',			// Ver.2.4.4 パラメータ名変更のため：エラー状態
			'invalid-url'		=>	'error-url',			// Ver.2.4.4 パラメータ名変更のため：エラーURL
			'invalid-time'		=>	'error-time',			// Ver.2.4.4 パラメータ名変更のため：エラー発生日時
		);
		foreach ($rename_key as $old => $new ) {
			if	(isset($this->options[$old] ) && !isset($this->options[$new] ) ) {
				$this->options[$new]	=	$this->options[$old];
			}
		}
		foreach ($rename_key as $old => $new ) {
			if	(isset($this->options[$old] ) ) {
				unset($this->options[$old] );
			}
		}

		// オプションの更新
		$overwrite					=	array('plugin-abbreviation', 'plugin-name', 'plugin-version', 'plugin-path', 'author-url', 'author-name', 'author-twitter' );
		foreach ($overwrite as $key ) {
			$this->options[$key]	=	$this->defaults[$key];
		}
		$result						=	$this->pz_UpdateOption();

		// スタイルシート生成
		$this->pz_SetStyle();

		// DB作成
		global	$wpdb;
		$wpdb->hide_errors();

		// CREATE TABLE
		$sql = "CREATE TABLE $this->db_name (
					id				BIGINT			UNSIGNED	NOT NULL	AUTO_INCREMENT,
					url				VARCHAR(4096)							DEFAULT NULL,
					url_key			VARBINARY(255)				NOT NULL,
					url_redir		VARCHAR(4096)							DEFAULT NULL,
					scheme			VARCHAR(16)								DEFAULT NULL,
					domain			VARCHAR(253)							DEFAULT NULL,
					site_name		VARCHAR(100)							DEFAULT NULL,
					title			VARCHAR(200)							DEFAULT NULL,
					excerpt			VARCHAR(500)							DEFAULT NULL,
					charset			VARCHAR(32)								DEFAULT NULL,
					thumbnail		VARCHAR(2048)							DEFAULT NULL,
					favicon			VARCHAR(2048)							DEFAULT NULL,
					no_failure		INT				UNSIGNED				DEFAULT 0,
					alive_result	INT										DEFAULT -1,
					alive_time		BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					alive_nexttime	BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					sns_twitter		INT										DEFAULT -1,
					sns_facebook	INT										DEFAULT -1,
					sns_hatena		INT										DEFAULT -1,
					sns_pocket		INT										DEFAULT -1,
					sns_time		BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					sns_nexttime	BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					use_post_id1	INT				UNSIGNED,
					use_post_id2	INT				UNSIGNED,
					use_post_id3	INT				UNSIGNED,
					use_post_id4	INT				UNSIGNED,
					use_post_id5	INT				UNSIGNED,
					use_post_id6	INT				UNSIGNED,
					regist_title	VARCHAR(200)							DEFAULT NULL,
					regist_excerpt	VARCHAR(500)							DEFAULT NULL,
					regist_charset	VARCHAR(32)								DEFAULT NULL,
					regist_result 	INT										DEFAULT 0,
					regist_time		BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					mod_title		INT				UNSIGNED	NOT NULL	DEFAULT 0,
					mod_excerpt		INT				UNSIGNED	NOT NULL	DEFAULT 0,
					update_result	INT										DEFAULT 0,
					update_time		BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
					PRIMARY KEY		(id),
					UNIQUE KEY		(url_key)
				) ".$wpdb->get_charset_collate()." ;";
		require_once(ABSPATH.'wp-admin/includes/upgrade.php' );
		dbDelta($sql );
		// フィールドを追加したらエクスポート項目も見直す

		// 未使用となったフィールド
		//			link_type		INT				UNSIGNED,
		//			location		VARCHAR(2048)							DEFAULT NULL,
		//			post_id			INT				UNSIGNED				DEFAULT 0,
		//			post_date		DATETIME					NOT NULL	DEFAULT '0000-00-00 00:00:00',
		//			address			VARCHAR(2048)							DEFAULT NULL,
		//			means			VARCHAR(32)								DEFAULT NULL,
		//			nexttime		BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,
		//			regist			DATETIME					NOT NULL	DEFAULT '0000-00-00 00:00:00',
		//			result_code		INT										DEFAULT -1,
		//			uptime			BIGINT			UNSIGNED	NOT NULL	DEFAULT 0,

		// バグデータのメンテナンス（重複URLの削除）
		$result_datas	=	(array) $wpdb->get_results("SELECT url,id FROM $this->db_name ORDER BY url,id" );
		$last_url		=	null;
		$last_id		=	null;
		if	(isset($result_datas ) && is_array($result_datas ) && count($result_datas ) > 0 ) {
			foreach($result_datas as $data ) {
				if ($data->url == $last_url && $data->id <> $last_id ) {
					$result		=	$wpdb->delete($this->db_name, array('id' => $data->id ), array('%d' ) );
					// echo '[DEBUG]重複URLを削除="'.print_r($result, true ).'"<br>';
				}
				$last_url		=	$data->url;
				$last_id		=	$data->id;
			}
		}

		// バグデータのメンテナンス（ハッシュURLの再生成）
		$result_datas	=	(array) $wpdb->get_results("SELECT id,url,url_key FROM $this->db_name ORDER BY id" );
		// echo '[DEBUG]Remake URL_Key: Select All Record="'.print_r($result, true ).'"<br>';
		if	(isset($result_datas ) && is_array($result_datas ) && count($result_datas ) > 0 ) {
			foreach($result_datas as $data ) {
				$new_url_key	=	hash('sha256', esc_url($data->url ), true );
				if ($data->url_key <> $new_url_key ) {
					$result		=	$wpdb->update($this->db_name, array('url_key' => $new_url_key ) , array('id' => $data->id ) );
					// echo '[DEBUG]- Remake URL Result="'.print_r($result, true ).'"<br>';
				}
			}
		}

		// バグデータのメンテナンス（ドメイン名が空欄のもの）
		$result_datas	=	(array) $wpdb->get_results("SELECT id,url,url_key,domain FROM $this->db_name WHERE domain = '' ORDER BY id" );
		// echo '[DEBUG]Null Domain: Select All Record="'.print_r($result, true ).'"<br>';
		if	(isset($result_datas ) && is_array($result_datas ) && count($result_datas ) > 0 ) {
			foreach($result_datas as $data ) {
				$domain		=	'(Unknown)';
				$result		=	$wpdb->update($this->db_name, array('domain' => $domain ) , array('id' => $data->id ) );
				echo '[DEBUG]- Set Domain Result="'.print_r($result, true ).'"<br>';
			}
		}

		// 古い項目から新しい項目へ転記（uptime → update_time）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET update_time = uptime WHERE update_time IS NULL OR update_time = 0" );
		// echo '[DEBUG]uptime -> update_time="'.print_r($result, true ).'"<br>';

		// 古い項目から新しい項目へ転記（result_code → update_result）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET update_result = result_code , result_code = 0 WHERE result_code > 0 AND ( update_result IS NULL OR update_result = 0 )" );
		// echo '[DEBUG]result_code -> update_result="'.print_r($result, true ).'"<br>';

		// 古い項目から新しい項目へ転記（post_id → use_post_id1）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET use_post_id1 = post_id , post_id = 0 WHERE (use_post_id1 IS NULL OR use_post_id1 = 0 ) AND post_id > 0" );
		// echo '[DEBUG]post_id -> use_post_id="'.print_r($result, true ).'"<br>';

		// 過去バージョンからのコンバート（生存確認用のデータ作成）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET update_result = 200 WHERE update_result IS NULL OR update_result = 0" );
		// echo '[DEBUG]update_resultがNULL="'.print_r($result, true ).'"<br>';
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET alive_result = update_result , alive_time = update_time WHERE alive_result IS NULL OR alive_result = 0 OR alive_time = 0" );
		// echo '[DEBUG]alive_resultがNULL="'.print_r($result, true ).'"<br>';
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET alive_nexttime = alive_time  WHERE alive_nexttime IS NULL OR alive_nexttime = 0" );
		// echo '[DEBUG]alive_nexttimeがNULL="'.print_r($result, true ).'"<br>';

		// 過去バージョンからのコンバート（取得時テキストの作成）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET regist_title = title , regist_excerpt = excerpt , regist_time = update_time , regist_result = update_result , regist_charset = charset WHERE (regist_title = NULL AND regist_excerpt = NULL ) AND (title <> NULL OR excerpt <> NULL )" );
		// echo '[DEBUG]regist_titlle , regist_excerpt がNULL="'.print_r($result, true ).'"<br>';

		// 過去バージョンからのコンバート（次回SNS取得日時）
		$result		=	$wpdb->get_results("UPDATE $this->db_name SET sns_time = update_time , sns_nexttime = nexttime WHERE sns_nexttime = 0" );
		// echo '[DEBUG]sns_nexttimeがNULL="'.print_r($result, true ).'"<br>';

		// 未使用になった列を削除する
		$drop_field	=	array('link_type' , 'location' , 'post_id' , 'post_date' , 'address' , 'means' , 'nexttime' , 'regist' , 'result_code' , 'uptime' );
		foreach($drop_field as $name ) {
			$result		=	$wpdb->query("ALTER TABLE $this->db_name DROP COLUMN ".$name );
			// echo '[DEBUG]列削除['.$name.']="'.print_r($result, true ).'"<br>';
		}
