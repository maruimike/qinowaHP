<section class="column-archives">
	<h2 class="column-archives_head">新着記事</h2>
	<div class="column-archives_body">
		<ul class="column-archives_list">
			<?php
            global $post;
            $news = oc_get_posts(5);
            if ($news) {
                foreach ($news as $post) {
                    setup_postdata($post);
                    get_template_part('content/loop/'.'post-side');
                }
				wp_reset_postdata();
            }
            wp_reset_postdata();
            ?>
		</ul>
	</div>
</section>