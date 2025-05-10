<?php
global $post;
get_header();
?>
<!-- ▼ポスト内容ここから -->
<div class="single-column column-layout">
	<div class="l-layout">

		<?php get_sidebar('single-head'); ?>

		<?php
		wp_reset_postdata();
		if (have_posts()) :
			while (have_posts()) : the_post();
				?>

			<div class="column-layout_main">
				<article class="column column-single">
					<div class="column_inner">
						<div class="column_media">
							<div class="aspect-vista">
								<?php get_template_part('content/module/meta-column', 'image'); ?>
							</div>
						</div>
						<header class="column_head">
							<div class="column_info">
								<p class="column_date"><span><?php the_time('Y年m月d日'); ?></span></p>
								<?php get_template_part('content/module/meta-column', 'power'); ?>
							</div>
							<ul class="column_categories">
								<?php
								$terms = get_the_terms(get_the_ID(), 'category');
                                if ($terms) {
                                    foreach ($terms as $term) {
                                        echo '<li><a class="column_category" href="'.get_term_link($term, 'category').'">'.esc_html($term->name).'</a></li> ';
                                    }
                                }
								?>
							</ul>
							<h2 class="column_title"><?php the_title(); ?>
							</h2>
						</header>
						<div class="column_body">
							<div class="column_main">
								<div class="wysiwyg">
									<div style="background:#ccc;">
										<?php 
                                        if (function_exists('wp_social_bookmarking_light_output_e')) {
                                            wp_social_bookmarking_light_output_e(null, get_permalink(), the_title('', '', false));
                                        }
										?>
									</div>
									<!-- ▼ポスト内容本文ここから -->
									<?php the_content(); ?>
									<!-- ▲ポスト内容本文ここまで -->
<!-- 初回コースここから -->
		<div class="menu-cource_inner">									
			<div class="menu-cource_body">
				<div class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">初回限定鍼灸とアロマコース</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="https://www.qinowa.jp/wp-content/themes/qinowa/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="https://www.qinowa.jp/wp-content/themes/qinowa/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">お悩み症状をお伺いし、鍼灸治療に関するご質問、ご不安などについてきめ細かくお伺いしながら、痛みの少ない「気持ちの良い」治療を目指して施術を開始します。</p>
						<dl class="menu-item_criterion">
							<dt><img src="https://www.qinowa.jp/wp-content/themes/qinowa/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></dd>
										</dl>
									</li>
								</ul>
							</dd>
						</dl>
					</div>
					
					<div class="menu-item_foot">
						<div class="menu-item_detail">
							<div class="menu-item_times">
								<dl class="menu-item_totalTime">
									<dt>トータル所要時間</dt>
									<dd>120分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>100分</dd>
								</dl>
							</div>
							<p class="menu-item_price">10,450円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="https://s6rq5m.b-merit.jp/v73s46/web/option/?from_coupon=1&no_menu=1&coupon_id=520678&redirect=1">予約する</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
									
<!-- 初回コースここまで -->									
								</div>
							</div>
						</div>
					</div>
				</article>

				<div class="pagination">
					<ul class="pagination_list">
						<li class="pagination_prev"><?php echo get_previous_post_link('%link', 'PREV'); ?>
						</li>
						<li class="pagination_next"><?php echo get_next_post_link('%link', 'NEXT'); ?>
						</li>
						<li class="pagination_back"><a href="/column/">BACK</a></li>
					</ul>
				</div>

			<?php
				endwhile;
			endif;
			?>

			<?php get_sidebar('single-foot'); ?>

		</div>
	</div>
</div>
<!-- ▲ポスト内容ここまで -->

<?php get_footer();
