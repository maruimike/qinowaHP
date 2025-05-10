<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        '404' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/column/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/column/page-title-pc.jpg',
        'alt' => 'ページが見つかりませんでした│鍼灸マッサージサロン Qiroom×Qinowa',
    );
});
get_header(); ?>

	<div class="l-layout">
		<div>
			<h3 class="">お探しのページを表示できません。</h3>
			<p>アクセスしようとしたページは表示できません。<br>お探しのページは移動、削除、ご指定のURLが間違っている可能性がございます。</p>
			<p><a href="/" class="btn01 pink">トップページへ</a></p>
		</div>
	</div>

<?php get_footer();
