<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
	<meta name="facebook-domain-verification" content="qpqmhikk05gbwam19p43hbd6e1s4w0" />
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?ver=20190704">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSFLRC');</script>
<!-- End Google Tag Manager -->
<?php get_template_part("template-parts/seo"); ?>
<?php wp_head(); ?>
	<script src="https://www.googleoptimize.com/optimize.js?id=GTM-PPHKTKB"></script>
</head>
<body id="pagetop" class="<?php oc_body_class();?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSFLRC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
get_template_part("template-parts/sp-menu"); 
?>

<nav id="gnav" class="l-gnav">
	<ul class="l-gnav_list">
	<li class="l-gnav_first"><a href="/first/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-first.png" alt="はじめての方へ first time"></a></li>
	<li class="l-gnav_menu"><a href="/menu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-menu.png" alt="メニュー＆料金 menu"></a></li>
	<li class="l-gnav_news"><a href="/news/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-news.png" alt="キャンペーンお知らせ"></a></li>
	<li class="l-gnav_staff"><a href="/staff/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-staff.png" alt="施術家のご紹介 staff"></a></li>
	<li class="l-gnav_voice"><a href="/voice/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-voice.png" alt="お客様の声 voice"></a></li>
		<li class="l-gnav_salon">
		<a href="javascript:void(0)" id="gnavToggle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/gnav-salon.png" alt="店舗情報 salon info"><i>&#8203;</i></a>
			<ul id="gnavSub" class="l-gnav_sublist">
				<li class="l-gnav_qinowa"><a href="/qinowa/">表参道Qinowa</a></li>
				<li class="l-gnav_qiroom"><a href="/roppongi/">六本木Qinowa</a></li>
			</ul>
			
		</li>
	</ul>
</nav>
<div id="wrap" class="l-wrap">
	<?php 
	if( is_front_page() ) {
		get_template_part("template-parts/hero-front"); 
	} else {
		get_template_part("template-parts/head"); 
	} ?>
	<div id="contents" class="l-contents">
		<?php 
		if( is_front_page() ) {
			
		} else {
			get_template_part("template-parts/page-title"); 
		} ?>