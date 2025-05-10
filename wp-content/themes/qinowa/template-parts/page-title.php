<?php
global $post;

oc_breadcrumb_title();


$breadcrumbs = array(
    '施術家のご紹介' => '',
);
$pagetitle = array(
    'sp' => get_stylesheet_directory_uri().'/images/staff/page-title-sp.jpg',
    'pc' => get_stylesheet_directory_uri().'/images/staff/page-title-pc.jpg',
    'alt' => '施術家のご紹介',
);

$breadcrumbs = apply_filters('theme_breadcrumbs', $breadcrumbs);
$pagetitle = apply_filters('theme_pagetitle', $pagetitle);

?>
<div class="breadcrumb">
	<div class="l-layout">
		<ul class="breadcrumb_list">
			<li><a href="/">TOP</a></li>
			<?php
            foreach ($breadcrumbs as $name => $url) :
                if ($url) {
                    echo "<li><a href='{$url}'>{$name}</a></li>";
                } else {
                    echo "<li>{$name}</li>";
                }
            endforeach; ?>
		</ul>
	</div>
</div>

<div class="pagetitle">
	<div class="l-layout">
		<div class="pagetitle_inner">

			<h2 class="pagetitle_main"><img src="<?php echo $pagetitle['sp']; ?>" data-pc-src="<?php echo $pagetitle['pc']; ?>" alt="<?php echo $pagetitle['alt']; ?>"></h2>

		</div>
	</div>
</div>