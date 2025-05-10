<?php defined('ABSPATH' ) || wp_die; ?>
<?php
	// ログのディレクトリの用意
	if	(!$this->options['debug-dir'] ) {
		$dir			=	$this->upload_dir_path.'debug/';
		$dir_url		=	$this->upload_dir_url .'debug/';
		if	(!is_dir($dir ) ) {
			if	(!wp_mkdir_p($dir ) ) {
				$dir	=	null;
				$url	=	null;
			}
		}
		if	($dir ) {
			$dir_url						=	preg_replace('/.*(\/\/.*)/', '$1', $dir_url );	// スキームを外す
			$this->options['debug-dir']		=	$dir;
			$this->options['debug-url']		=	$dir_url;
		}
	}

	// スタイルシートのパスを用意
	if	(!$this->options['css-path'] ) {
		$dir			=	$this->upload_dir_path;
		$dir_url		=	$this->upload_dir_url ;
		if	(!is_dir($dir ) ) {
			if	(!wp_mkdir_p($dir ) ) {
				$dir	=	null;
				$url	=	null;
			}
		}
		if	($dir ) {
			$dir_url						=	preg_replace('/.*(\/\/.*)/', '$1', $dir_url );	// スキームを外す
			$this->options['css-path']		=	$dir    .'style.css';
			$this->options['css-url']		=	$dir_url.'style.css';
		}
	}
	$this->options['css-templete']	=	$this->plugin_dir_path.'templete/pz-linkcard-templete.css';		// 元となるテンプレート

	// サムネイルのキャッシュディレクトリの用意
	if	(!$this->options['thumbnail-dir'] ) {
		$dir			=	$this->upload_dir_path.'cache/';
		$dir_url		=	$this->upload_dir_url .'cache/';
		if	(!is_dir($dir ) ) {
			if	(!wp_mkdir_p($dir ) ) {
				$dir	=	null;
				$url	=	null;
			}
		}
		if	($dir ) {
			$dir_url						=	preg_replace('/.*(\/\/.*)/', '$1', $dir_url );	// スキームを外す
			$this->options['thumbnail-dir']	=	$dir;
			$this->options['thumbnail-url']	=	$dir_url;
		}
	}

	// 開発環境のチェック
	if	(mb_substr($this->home_url, 0, 29 ) == 'http://application.secret.jp/' ) {
		$this->options['develop-mode']	=	true;
	} else {
		$this->options['develop-mode']	=	false;
	}

	// ユーザーエージェントの設定
	$crawler	=	'Pz-LinkCard-Crawler/';
	if	(!$this->options['user-agent'] || mb_substr($this->options['user-agent'], 0, mb_strlen($crawler ) ) == $crawler ) {
		$this->options['user-agent']	=	$crawler.$this->options['plugin-version'];
	}

	// 管理者モード解除
	if ($this->options['admin-mode'] && !$this->options['debug-mode'] ) {
		$this->options['admin-mode']	=	false;
	}
