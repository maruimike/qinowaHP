<?php
$slides_url = array();
$slide_ids = array();
$slide_ids[] = get_field('p_image_1');
$slide_ids[] = get_field('p_image_2');
$slide_ids[] = get_field('p_image_3');
$slide_ids[] = get_field('p_image_4');
$slide_ids[] = get_field('p_image_5');
foreach ($slide_ids as $id) {
    if ($id) {
        $image_src = oc_get_image_src($id);
        if ($image_src) {
            $slides_url[] = $image_src;
        }
    }
}
if (empty($slides_url)) {
    return;
}
?>

<!-- ※▼ギャラリー欄（画像が存在する場合のみ出力） -->
<div id="gallery" class="single_gallery gallery">
	<!-- ※▼ギャラリーメイン表示部 -->
	<div class="gallery_main">
		<div class="gallery_slider is-unready">
			<?php foreach($slides_url as $url) :?>
			<div class="gallery_slide">
				<div class="aspect-square">
					<div class="aspect_inner" data-imgLiquid-fill="false">
						<img src="<?php echo $url; ?>" alt="">
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<!-- ※▲ギャラリーメイン表示部 -->
	<?php if( count($slides_url) > 1 ) : ?>
	<!-- ※▼ギャラリーサムネイル表示部（画像1枚の場合は出力しない） -->
	<ul class="gallery_thumbnails">
		<?php foreach($slides_url as $url) :?>
			<li>
				<div class="aspect-square">
					<div class="aspect_inner" data-imgLiquid-fill="false">
						<img src="<?php echo $url; ?>" alt="">
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
	<!-- ※▲ギャラリーサムネイル表示部（画像1枚の場合は出力しない） -->
	<?php endif; ?>
</div>
<!-- ※▲ギャラリー欄（画像が存在する場合のみ出力） -->