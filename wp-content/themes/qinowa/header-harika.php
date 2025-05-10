<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
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
</head>
<body id="pagetop" class="<?php oc_body_class("page-harika");?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSFLRC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
get_template_part("template-parts/sp-menu"); 
?>

<div id="wrap" class="l-wrap">
	<div id="contents" class="l-contents">
		<?php 
		get_template_part("template-parts/head","harika"); 
		get_template_part("template-parts/page-title");
		?>