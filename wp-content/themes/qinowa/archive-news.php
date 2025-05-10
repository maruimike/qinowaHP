<?php
get_header();

$class = 'archives';
if(is_post_type_archive("news")) {
	$class = "archives-news";
}
?>
<div class="<?php echo $class; ?>">
	<div class="l-layout">
		<div class="archives_inner">
			<?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content/loop/'.get_post_type());
                    endwhile;
                endif;
                ?>
		</div>
	</div>
</div>

<div class="pagination">
	<div class="l-layout">
		<ul class="pagination_list">
			<li class="pagination_prev"><?php echo get_previous_posts_link('PREV'); ?>
			</li>
			<li class="pagination_next"><?php echo get_next_posts_link('NEXT'); ?>
			</li>
		</ul>
	</div>
</div>
<?php get_footer();
