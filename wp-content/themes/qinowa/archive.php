<?php
get_header(); ?>


<div class="archives-column column-layout">
	<div class="l-layout">

		<?php
		get_sidebar("head");
			?>
		<div class="column-layout_main">
			<section class="column-archives">
				<h2 class="column-archives_head">
					<?php
                    if (is_home()) {
                        echo '新着記事';
                    } elseif (is_search()) {
                        echo '検索結果';
                    } else {
                        echo get_the_archive_title();
                    } ?>
				</h2>
				<div class="column-archives_body">
					<ul class="column-archives_list">
						<?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                get_template_part('content/loop/'.'post');
                            endwhile;
                        endif;
                        ?>
					</ul>
				</div>
			</section>

			<div class="pagination">
				<ul class="pagination_list">
					<li class="pagination_prev"><?php echo get_previous_posts_link('PREV'); ?>
					</li>
					<li class="pagination_next"><?php echo get_next_posts_link('NEXT'); ?>
					</li>
					<li class="pagination_pager">
						<ol class="pagination_pagerList">
							<?php  oc_paginate_links(); ?>
						</ol>
					</li>
				</ul>
			</div>
		</div>


		<?php
		get_sidebar("foot");
            ?>
	</div>
</div>
<?php
get_footer();
