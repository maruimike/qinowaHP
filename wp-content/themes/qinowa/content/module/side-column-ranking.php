<section class="column-archives">
	<h2 class="column-archives_head">アクセスランキング</h2>
	<div class="column-archives_body">
		<ul class="column-archives_list">
			<?php
            if (function_exists('get_tptn_pop_posts')) {
                $settings = array(
                        'daily' => true,
                        'daily_range' => 30,
                        'limit' => 5,
                        'strict_limit' => false,
                    );
				$topposts = get_tptn_pop_posts($settings); // Array of posts
				$topposts = wp_list_pluck( (array) $topposts, 'postnumber' );

                global $post;
                if (count($topposts) > 0) {
                    foreach ($topposts as $post) {
                        setup_postdata($post);
                        get_template_part('content/loop/'.'post-side');
                    }
                    wp_reset_postdata();
                }
            }
            ?>
		</ul>
	</div>
</section>