<?php defined('ABSPATH' ) || wp_die; ?>
<?php
			// エラー
			$flg_error = false;
			
			// Webフォームから入力されたクォート文字を除去する
			$check_item					=	array('ex-image', 'in-image', 'th-image', 'ex-info', 'in-info', 'th-info' );
			foreach($check_item as $key ) {
				$this->options[$key]	=	stripslashes($this->options[$key] );
			}

			
			// サイトアイコン画像取得URL
			$key	=	'favicon-api';
			$url	=	isset($this->options[$key] ) ? $this->options[$key] : null ;
			$url	=	$this->pz_EncodeURL($url );
			$url	=	preg_replace( array('/%DOMAIN%/i', '/%DOMAIN_URL%/i', '/%URL%/i' ), array('%DOMAIN%', '%DOMAIN_URL%', '%URL%'), $url );	// パラメータ文字を大文字にする
			$this->options[$key]	=	$url;

			// サムネイル画像取得URL
			$key	=	'thumbnail-api';
			$url	=	isset($this->options[$key] ) ? $this->options[$key] : null ;
			$url	=	$this->pz_EncodeURL($url );
			$url	=	preg_replace( array('/%DOMAIN%/i', '/%DOMAIN_URL%/i', '/%URL%/i' ), array('%DOMAIN%', '%DOMAIN_URL%', '%URL%'), $url );	// パラメータ文字を大文字にする
			$this->options[$key]	=	$url;

			// 追加CSS用URL
			$key	=	'css-add-url';
			$url	=	isset($this->options[$key] ) ? $this->options[$key] : null ;
			$url	=	$this->pz_EncodeURL($url );
			$this->options[$key]	=	$url;

			// カード幅
			$width			=	$this->options['width'];
			if ($width) {
				if (substr($width, -1 ) == '%') {
					$width		=	pz_TrimNum($width, 0);
					if ($width	<	1	||	$width	>	100) {
						$this->options['width']		=	$this->defaults['width'];
					} else {
						$this->options['width']		=	$width.'%';
					}
				} else {
					$this->options['width'] = pz_TrimNum($width, $this->defaults['width']).'px';
				}
			}
			
			// 記事の高さ
			if	($this->options['content-height']) {
				$this->options['content-height']	=	pz_TrimNum($this->options['content-height'],	$this->defaults['content-height'] ).'px';
			}
			
			// 数値項目の不正文字をチェック（数字以外が入っていたら修正）
			$this->options['trim-title']		=	pz_TrimNum($this->options['trim-title'],		$this->defaults['trim-title']);
			$this->options['trim-url']			=	pz_TrimNum($this->options['trim-url'],			$this->defaults['trim-url']);
			$this->options['trim-excerpt']		=	pz_TrimNum($this->options['trim-excerpt'],		$this->defaults['trim-excerpt']);
			$this->options['trim-info']			=	pz_TrimNum($this->options['trim-info'],			$this->defaults['trim-info']);
			$this->options['size-title']		=	pz_TrimNum($this->options['size-title'],		$this->defaults['size-title']).'px';
			$this->options['size-url']			=	pz_TrimNum($this->options['size-url'],			$this->defaults['size-url']).'px';
			$this->options['size-excerpt']		=	pz_TrimNum($this->options['size-excerpt'],		$this->defaults['size-excerpt']).'px';
			$this->options['size-more']			=	pz_TrimNum($this->options['size-more'],			$this->defaults['size-more']).'px';
			$this->options['size-info']			=	pz_TrimNum($this->options['size-info'],			$this->defaults['size-info']).'px';
			$this->options['size-added']		=	pz_TrimNum($this->options['size-added'],		$this->defaults['size-added']).'px';
			$this->options['height-title']		=	pz_TrimNum($this->options['height-title'],		$this->defaults['height-title']).'px';
			$this->options['height-url']		=	pz_TrimNum($this->options['height-url'],		$this->defaults['height-url']).'px';
			$this->options['height-excerpt']	=	pz_TrimNum($this->options['height-excerpt'],	$this->defaults['height-excerpt']).'px';
			$this->options['height-more']		=	pz_TrimNum($this->options['height-more'],		$this->defaults['height-more']).'px';
			$this->options['height-info']		=	pz_TrimNum($this->options['height-info'],		$this->defaults['height-info']).'px';
			$this->options['height-added']		=	pz_TrimNum($this->options['height-added'],		$this->defaults['height-added']).'px';
			$this->options['thumbnail-width']	=	pz_TrimNum($this->options['thumbnail-width'],	$this->defaults['thumbnail-width']).'px';
			$this->options['thumbnail-height']	=	pz_TrimNum($this->options['thumbnail-height'],	$this->defaults['thumbnail-height']).'px';
			$this->options['border-width']		=	pz_TrimNum($this->options['border-width'],		$this->defaults['border-width']).'px';

			// カラーコードの不正文字をチェック
			$check_item			=	array('color-title', 'color-url', 'color-excerpt', 'color-more', 'color-info', 'color-added', 'color-title', 'color-url', 'color-excerpt', 'color-more', 'color-info', 'color-added', 'ex-border-color', 'in-border-color', 'th-border-color', 'ex-bgcolor', 'in-bgcolor', 'th-bgcolor' );
			foreach($check_item as $key ) {
				if	($this->options[$key] == '') {
					$this->options[$key]	=	$this->defaults[$key];
				}
			}
			// echo '<div class="notice notice-warning is-dismissible"><p><strong>'.__('Color code does not conform to HTML color code.', $this->text_domain).'</strong></p></div>';
