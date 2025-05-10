<?php 
get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>


<div class="single-news">
	<div class="l-layout">
		<article class="news">
			<div class="news_inner">
				<header class="news_head">
					<!-- ▼ポスト投稿日 -->
					<p class="news_date"><span><?php the_time('Y年m月d日');?></span></p>
					<!-- ▼ポストタイトル -->
					<h2 class="news_title"><?php the_title();?></h2>
				</header>
				<div class="news_body">
					<?php if(has_post_thumbnail()) : 
						$image = oc_get_image_src( get_post_thumbnail_id() );
						?>
						<!-- ▼ポストにアイキャッチがある場合ここから -->
						<div class="news_aside">
							<img src="<?php echo $image;?>" class="fitimg" alt="">
						</div>
						<!-- ▲ポストにアイキャッチがある場合ここまで -->
					<?php endif; ?>
					<div class="news_main">
						<div class="wysiwyg">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>

<div class="pagination">
	<div class="l-layout">
		<ul class="pagination_list">
			<li class="pagination_prev"><?php echo get_previous_post_link("%link","PREV");?></li>
			<li class="pagination_next"><?php echo get_next_post_link("%link","NEXT");?></li>
			<li class="pagination_back"><a href="/news/">BACK</a></li>
		</ul>
	</div>
</div>
<!-- ▲ポスト内容ここまで -->
<?php
endwhile;
endif;
?>
<?php get_footer();
