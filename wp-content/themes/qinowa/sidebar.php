<aside class="column-layout_aside">
	<section class="column-archives">
		<h2 class="column-archives_head">ピックアップ記事</h2>
		<div class="column-archives_body">
			<ul class="column-archives_list">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						get_template_part("content/loop/". "post-side"); 
					endwhile;
				endif;
				?>
			</ul>
		</div>
	</section>

	<section class="column-archives">
		<h2 class="column-archives_head">アクセスランキング</h2>
		<div class="column-archives_body">
			<ul class="column-archives_list">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						get_template_part("content/loop/". "post-side"); 
					endwhile;
				endif;
				?>
			</ul>
		</div>
	</section>
</aside>