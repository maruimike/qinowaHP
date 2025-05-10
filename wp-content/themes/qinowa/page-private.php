<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        '出張ページ' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return false;
});
get_header(); ?>

<section>
	<div class="l-layout">
		<div class="underconstruction"></div>
	</div>
</section>

<?php get_footer();
