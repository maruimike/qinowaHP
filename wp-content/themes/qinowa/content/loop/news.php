

<div class="archive-news">
	<article class="news">
		<div class="news_inner">
			<header class="news_head">
				<!-- ▼ポスト投稿日 -->
				<p class="news_date"><span><?php the_time('Y年m月d日'); ?></span></p>
				<!-- ▼ポストタイトル -->
				<h2 class="news_title"><?php the_title(); ?>
				</h2>
			</header>
			<div class="news_body">

				<?php if (has_post_thumbnail()) :
					$image = oc_get_image_src(get_post_thumbnail_id());
					?>
				<!-- ▼ポストにアイキャッチがある場合ここから -->
				<div class="news_aside">
					<img src="<?php echo $image; ?>" class="fitimg" alt="">
				</div>
				<!-- ▲ポストにアイキャッチがある場合ここまで -->
				<?php endif; ?>
				<div class="news_main">
					<div class="wysiwyg">
						<!-- ▼ポスト内容本文ここから -->
						<p><?php the_excerpt(); ?>
						</p>
						<!-- ▲ポスト内容本文ここまで -->
					</div>
					<div class="news_more"><span class="button is-block"><a href="<?php the_permalink(); ?>">詳細を見る</a></span></div>
				</div>
			</div>
		</div>
	</article>
</div>