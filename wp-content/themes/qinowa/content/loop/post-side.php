<li>
	<a href="<?php the_permalink(); ?>" class="column column-archive">
		<div class="column-archive_media">
			<div class="aspect-vista">
				<?php get_template_part('content/module/meta-column', 'image'); ?>
			</div>
		</div>
		<div class="column-archive_body">
			<div class="column_info">
				<p class="column_date"><span><?php the_time('Y年m月d日'); ?></span></p>
				<?php get_template_part('content/module/meta-column', 'power'); ?>
			</div>
			<ul class="column-archive_categories">
				<?php
                $terms = get_the_terms(get_the_ID(), 'category');
                foreach ($terms as $term) {
                    echo '<li><span class="column-archive_category">'.esc_html($term->name).'</span></li> ';
                }
                ?>
			</ul>
			<p class="column-archive_title"><?php the_title(); ?>
			</p>
		</div>
	</a>
</li>