<?php
$posts = get_field("p_relation");
if(empty($posts)) {
	return;
}
?>
<section class="column-archives">
	<h2 class="column-archives_head">関連記事</h2>
	<div class="column-archives_body">
		<ul class="column-archives_list">
			<?php 
			global $post;
			foreach($posts as $item) {
				if(!isset($item["item"]) || !$item["item"] ) {
					continue;
				}
				$post = $item["item"];
				setup_postdata($post);
				get_template_part('content/loop/'.'post-side');
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>