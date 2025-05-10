<?php
global $post;
$myposts = get_field('p_pickup', 'option');
if (empty($posts)) {
    return;
}
?>
<section class="column-archives">
	<h2 class="column-archives_head">ピックアップ記事</h2>
	<div class="column-archives_body">
		<ul class="column-archives_list">
			<?php
            foreach ($myposts as $item) {
                if (!isset($item['item']) || !$item['item']) {
                    continue;
                }
                $post_id = $item['item'];
                $post = get_post($post_id);
                
                setup_postdata($post);
                get_template_part('content/loop/'.'post-side');
            }
            wp_reset_postdata();
            ?>
		</ul>
	</div>
</section>