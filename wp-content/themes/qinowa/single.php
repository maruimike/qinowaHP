<?php
get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>


<article class="single">
	<div class="l-layout">
		<div class="single_inner">
			<!-- ▼ポストタイトル -->
			<h2 class="single_head"><?php
            if (
                'voice' == get_post_type()
                || 'staff' == get_post_type()
            ) {
                echo get_field('p_title');
            } else {
                the_title();
            }
            ?>
			</h2>
			<div class="single_body">
				<div class="single_aside">
					<?php get_template_part('content/module/gallery'); ?>

					<div class="single_info">
						<?php get_template_part('content/meta/'.get_post_type()); ?>
					</div>
				</div>
				<div class="single_main">
					<div class="wysiwyg">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

<!-- coco-review口コミのデザイン　ここから  -->
			<?php if (is_singular('staff')) :?>
			<?php
				switch(basename($_SERVER['REQUEST_URI'])){
					case "matsuhara":
						$dataShopId = "65";
						$dataUserId = "9272";
						break;
					case "asahi":
						$dataShopId = "65";
						$dataUserId = "9270";
						break;
					case "nanba":
						$dataShopId = "65";
						$dataUserId = "13656";
						break;
					case "tsuji":
						$dataShopId = "65";
						$dataUserId = "9273";
						break;
					case "hatamoto":
						$dataShopId = "751";
						$dataUserId = "11438";
						break;
					case "ryokai":
						$dataShopId = "751";
						$dataUserId = "11292";
						break;
					case "harada":
						$dataShopId = "751";
						$dataUserId = "11291";
						break;
						
						
					default:
						$dataShopId = "65";
						$dataUserId = null;
				}
			?>			
			<!-- ▼施術家のご紹介の場合 -->
			<style>#coco-review-widget3 .coco-review-widget3_sumCount {display:none!important;}</style>
			<div class="single_cocoreview">
				<div data-cocoreview-widget data-shop-id="<?php echo $dataShopId; ?>" data-user-id="<?php echo $dataUserId; ?>"></div>
				<script src="https://cocoreview.com/js/widget.js" async></script>
			</div>
			<!-- ▲施術家のご紹介の場合 -->

			<?php endif; ?>
<!-- coco-review口コミのデザイン　ここまで  -->

		</div>
	</div>
</article>

<div class="pagination">
	<div class="l-layout">
		<ul class="pagination_list">
			<li class="pagination_prev"><?php echo get_previous_post_link('%link', 'PREV'); ?>
			</li>
			<li class="pagination_next"><?php echo get_next_post_link('%link', 'NEXT'); ?>
			</li>
			<?php 
			$link = get_post_type_archive_link(get_post_type());
			if(is_singular("menu")) {
				$link = "/menu/";
			} 
			?>
			<li class="pagination_back"><a href="<?php echo $link; ?>">BACK</a></li>
		</ul>
	</div>
</div>

<!-- <section>
			<div class="l-layout">
				<div class="underconstruction"></div>
			</div>
		</section> -->

<!-- ▲ポスト内容ここまで -->
<?php
endwhile;
endif;
?>
<?php get_footer();
