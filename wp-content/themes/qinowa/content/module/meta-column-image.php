<?php
if (has_post_thumbnail()) :
$image = oc_get_image_src(get_post_thumbnail_id());
?>
<div class="aspect_inner" data-imgLiquid-fill="true"><img src="<?php echo $image; ?>" alt=""></div>
<?php else : ?>
<div class="aspect_inner" data-imgLiquid-fill="true"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/column/dummy.png" alt=""></div>
<?php endif;
