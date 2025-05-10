<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        'メニュー＆料金' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/menu/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/menu/page-title-pc.jpg',
        'alt' => 'メニュー＆料金│鍼灸マッサージサロン Qiroom×Qinowa',
    );
});
get_header(); ?>

<section class="menu-cource menu-first">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
			  <h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/1.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/first.png" alt="初回限定鍼灸アロマコース"></h2>
			  <p class="menu-cource_headTxt">
			    <span class="nowrap">Qinowa ご来店が初めての方の限定コースです。</span>
			    <span class="nowrap">おすすめのコースをお得な価格でご提供いたします。</span>
			  <div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/first.jpg" class="fitimg" alt="背中や腕の鍼治療やマッサージを受ける女性"></div>
				
			</header>
			<div class="menu-cource_body">
				<div class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">鍼灸＋アロマオイルマッサージコース100分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">おつらい症状をきめ細かくお伺いしながら、オリジナルアロマを使い体質に合わせた「気持ちの良い」治療をご提供いたします。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">☆</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">☆</span><span>☆</span><span>☆</span><span>☆</span></dd>
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
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/firstharimassage/">詳細を見る</a></span>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">マタニティ鍼灸＋アロママッサージコース 100分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
					  <p class="menu-item_txt">腰痛・脚のむくみ等、お身体のお悩みに合わせて治療いたします。負担のかからない姿勢でリラックスして受けていただけます。おつらい症状をきめ細かくお伺いしながら、オリジナルアロマを使い体質に合わせた「気持ちの良い」治療をご提供いたします。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
							  <ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/firstmaternity/">詳細を見る</a></span>
						</div>
					</div>
				</div>
				<div>
				  <p class="menu-item_txt"><br><br>※両コースとも時間内にカルテのご記入とカウンセリングが含まれております（約20分）。 </p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  -->
<section class="menu-cource menu-treatment">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
			  <h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/treatment-head.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/kyu_aroma.png" alt="鍼灸＋アロマオイルマッサージコース"></h2>
				<p class="menu-cource_headTxt">
				  お身体の状態、目的に合わせて治療いたします。<br>深いリラクゼーションと治療効果を追求します。				  
				</p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/treatment-img.jpg" class="fitimg" alt="背中や腕の鍼治療やマッサージを受ける女性"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">コリ、痛み集中ケアコース60分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">コリ、痛みなどの集中治療コース。鍼灸とアロママッサージを組み合わせて、おつらい部分を集中的にケアします。</p>					  
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/harimassage60/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">全身コリ、痛み、体質改善、全身ケアコース90分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">

					  <p class="menu-item_txt">全身的なコリ、痛み、加齢に伴う症状、体質改善等、複合的なおつらい症状に全身的にアプローチします。</p>					  					  
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span></dd>
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
									<dd>110分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>90分</dd>
								</dl>
							</div>
							<p class="menu-item_price">18,590円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/harimassage90/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
					  <h2 class="menu-item_name">全身のつらい症状、緊張を緩めるケアコース 120分 </h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">複合的なおつらい症状と、頭からつま先までの緊張を緩める手技で瞑想感覚のリラクゼーションを。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
									<dd>140分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>120分</dd>
								</dl>
							</div>
							<p class="menu-item_price">24,530円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/harimassage120/">詳細を見る</a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<section class="menu-cource menu-acupuncture">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/2_biyoubari.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/biyoubari.png" alt="はり、きゅうコース"></h2>
				<p class="menu-cource_headTxt">引き締め、リフトアップ、美肌、小顔、全身ケアでさらに若返りが期待できるコース。</p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/acupuncture-img.jpg" class="fitimg" alt="足や腹部の鍼灸治療の様子"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">全身治療+基礎美容鍼コース</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
						  <li class="menu-item_tag-beauty"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-beauty.png">美容鍼</li>						  
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">鍼灸疼痛、コリ、体質改善など、お身体の状態に合わせて治療方針を立てながらお悩みにアプローチ。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">☆</span><span>☆</span><span>☆</span><span>☆</span></dd>
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/chiryoubiyouhari/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">全身治療＋小顔リフト再生美容鍼コース</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-beauty"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-beauty.png">美容鍼</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">美容鍼＋全身鍼で頭皮とお顔のツボを刺激し、肌のハリ、つや、引き締め、若返り、小顔に。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active"> ☆</span></dd>
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
									<dd>90分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>70分</dd>
								</dl>
							</div>
							<p class="menu-item_price">14,960円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/denkibiyouhari/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">小顔リフト再生美容鍼コース<br>（肩デコルテのマッサージ付き）</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-beauty"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-beauty.png">美容鍼</li>
						  <li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>							
							
						</ul>
					</header>
					<div class="menu-item_body">
					  <p class="menu-item_txt">
					    50本以上のお顔、頭の鍼＆低周波電流＆炭酸美容液でお肌の再生を促します。内側から外面から共に輝くハリのある小顔の美しさを。					    
					    
					  </p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
										  <dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></dd>										  

										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
										  <dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span></dd>										  
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/biyouhari/">詳細を見る</a></span>
						</div>
					</div>
				</section>
			  
				
			</div>
		</div>
	</div>
</section>

<section class="menu-cource menu-maternity">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/3_matanityaroma.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/matanity.png" alt="マタニティアロマコース"></h2>
				<p class="menu-cource_headTxt">
				  マタニティ専用アロマの香りに包まれて心と身体のバランスを整えるコースです。鍼灸ケアでお辛い症状にさらにアプローチ<br>
				  ※マタニティアロマのコースは妊娠1６週目に入り施術前にかかりつけの医師または助産師さんからのご同意をお願いしております。
				</p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/maternity-img.jpg" class="fitimg" alt="足や腹部の鍼灸治療の様子"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">マタニティ鍼灸＋アロマオイルトリートメントコース 60分</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>						  
						  <li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">マタニティケア専用の弊社オリジナル精油を用いた施術です。おつらい症状を丁寧にカウンセリングし、マタニティライフをより快適にお過ごしいただけるようにリラックスいただけるコースです。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span >★</span><span>☆</span><span>☆</span></dd>
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/maternity60/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">マタニティ鍼灸＋アロマオイルトリートメント コース90分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">マタニティケアをより快適に、深いリラクゼーションのアロマトリートメントに加えて鍼灸ケアでおつらい症状にさらにアプローチするコースです。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
									<dd>110分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>90分</dd>
								</dl>
							</div>
							<p class="menu-item_price">18,590円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/maternity90/">詳細を見る</a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!--- ------------------------------------------------ -->
<section class="menu-cource menu-maternity">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/4_sango.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/sango.png" alt="マタニティアロマコース"></h2>
				<p class="menu-cource_headTxt">
				  産後のスムーズな骨盤周りのバランス、回復ケアに。アロマケア付き。
				  ※産後バランスチェック初めての方は90 分コースをお受けください。<br>
				</p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/sango.jpg" class="fitimg" alt="足や腹部の鍼灸治療の様子"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">産後バランス調整＋アロマオイルトリートメントコース 60 分</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>						  
						  <li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">骨盤周り集中ケアのコースになります。最後に骨盤底筋のトレーニング付。※産後バランスチェック2回目以降の方のみこちらのコースをお受けいただけます。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span >★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span>★</span><span>☆</span><span>☆</span></dd>
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/sango60/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">産後バランス調整＋アロマオイルトリートメントコース 90 分</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">出産後の骨盤周りの筋肉の緊張を緩めて、骨盤のバランスを調整するコース。バランスチェックでお身体の状態を見ながらカウンセリングをします。最後に骨盤底筋のトレーニング付。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
									<dd>90分</dd>
								</dl>
							</div>
							<p class="menu-item_price">18,590円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/sango90/">詳細を見る</a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>


<section class="menu-cource menu-facial">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/5_facial.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/facial-head-pc.png" alt="フェイシャルコース"></h2>
				<p class="menu-cource_headTxt">
				  引き締め、リフトアップ、美肌、小顔、トータルでの若返りが期待できるコース。				  
				</p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/facial-img.jpg" class="fitimg" alt="フェイスマッサージを受ける女性"></div>
			</header>
			<div class="menu-cource_body">
				
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">若返りリフトアップ低周波付き　3Dリンパフェイシャルコース</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-facial"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-facial.png">フェイシャル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">微弱低周波でリンパドレナージュ、顔筋を低周波運動させた後に画期的リフトアップフェイシャルマッサージを施し、引き締まった立体的なアンチエイジング肌を呼び起こします。うつ伏せ肩マッサージ＋クレンジング＋ゴマージュ＋低周波リフト＋3Dリンパフェイシャル＋パック＋クリームお仕上げ</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>疲労回復</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">☆</span></dd>
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
									<dd>90分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>70分</dd>
								</dl>
							</div>
							<p class="menu-item_price">14,960円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/facial/">詳細を見る</a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<!--   ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------   -->

<section class="menu-cource menu-detox">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/6_detox.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/detox.png" alt="全身デトックスボディスリムコース"></h2>
				<p class="menu-cource_headTxt">むくみ、ボディラインの引き締めに<span class="kr-50">、</span><br>軽やかな動きとサイズダウンを目指す方に<span class="kr-50">。</span></p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/detox_cover.jpg" class="fitimg" alt="足やウエストのマッサージを受ける女性"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">●低周波運動付発汗デトックス＆スリムマッサージコース<br>（ご希望で断食鍼又はお顔の鍼付）130 分</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>						  
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
							<li class="menu-item_tag-slim"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-slim.png">スリム</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">発汗デトックス+低周波運動＋オールハンド立体ボディマッサージで毒素排出とサイズダウンを目指します。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
							<dd>
								<ul class="menu-item_charts">
									<li>
										<dl class="menu-item_chart">
											<dt>コリ・痛み</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span></dd>
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
									<dd>150分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>130分</dd>
								</dl>
							</div>
							<p class="menu-item_price">27,500円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/detoxslim/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">はり断食治療コース</h2>
						<ul class="menu-item_tags">
						  <li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
						  <li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>						  
							<li class="menu-item_tag-slim"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-slim.png">スリム</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">体重コントロールによるダイエットのサポートと、内臓疲労、アンチエイジングにつながる美容ケアと、様々な効果が期待できる断食。体質に合ったはり治療や手技療法を行うオススメの健康法。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
									<dd>80分</dd>
								</dl>
								<dl class="menu-item_time">
									<dt>施術時間</dt>
									<dd>約60分</dd>
								</dl>
							</div>
							<p class="menu-item_price">12,540円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/menu/haridanjiki/">詳細を見る</a></span>
						</div>
					</div>
				</section>
				
			</div>
		</div>
	</div>
</section>
<!-- shucchou -->
<!--

<section class="menu-cource menu-treatment">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle">出張 訪問はり & オイルマッサージコース</h2>
				<p class="menu-cource_headTxt">お身体の状態、目的に合わせて<wbr><span class="nowrap">治療いたします。</span><wbr><span class="nowrap">疲労感がスッキリ流れる気持ちよさと</span><wbr><span class="nowrap">治療効果を</span><wbr><span class="nowrap">追求したコースです。</span></p>
				<div class="menu-cource_headMedia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/shucchou.jpg" class="fitimg" alt="出張マッサージに行く女性"></div>
			</header>
			<div class="menu-cource_body">
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">鍼灸とアロマオイルトリートメント 90</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">全身的なコリ、痛み、加齢に伴う症状、体質改善等、複合的なおつらい症状に全身的にアプローチします。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span><span>☆</span></dd>
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
									<dt>施術時間</dt>
									<dd>90分</dd>
								</dl>
	
							</div>
							<p class="menu-item_price">20,０00円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/?p=2068">詳細を見る</a></span>
						</div>
					</div>
				</section>
				<section class="menu-item">
					<header class="menu-item_head">
						<h2 class="menu-item_name">鍼灸とアロマオイルトリートメント 120</h2>
						<ul class="menu-item_tags">
							<li class="menu-item_tag-acupuncture"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-acupuncture.png">鍼灸</li>
							<li class="menu-item_tag-oil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/ico-oil.png">オイル</li>
						</ul>
					</header>
					<div class="menu-item_body">
						<p class="menu-item_txt">複合的なおつらい症状と、頭からつま先までの緊張を緩める手技で瞑想感覚のリラクゼーションを。</p>
						<dl class="menu-item_criterion">
							<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/criterion-head.png" alt="効果の目安"></dt>
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
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span></dd>
										</dl>
									</li>
									<li>
										<dl class="menu-item_chart">
											<dt>キレイ・スッキリ</dt>
											<dd><span class="is-active">★</span><span class="is-active">★</span><span class="is-active">★</span><span>☆</span><span>☆</span></dd>
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
									<dt>施術時間</dt>
									<dd>120分</dd>
								</dl>
							</div>
							<p class="menu-item_price">25,000円<span class="price_tax kr-50">（税込）</span></p>
						</div>
						<div class="menu-item_more">
							<span class="button is-block"><a href="/?p=2070">詳細を見る</a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

-->

<section class="menu-cource menu-options">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
				<h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/7_optioon.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/option-head-pc.png" alt="オプション"></h2>
				<p class="menu-cource_headTxt">各コースと併せてご利用ください。</p>
			</header>
			<div class="menu-cource_body menu-options_body">
				<section class="menu-option">
					<h2 class="menu-option_head">マッサージ10分延長</h2>
					<p class="menu-option_price">1,980円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">目と頭の疲れ集中ほぐし</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約10分</dd>
					</dl>
					<p class="menu-option_price">1,980円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">スライドカッピング</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約10分</dd>
					</dl>
					<p class="menu-option_price">1,980円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">かっさデトックスボディ</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約10分</dd>
					</dl>
					<p class="menu-option_price">1,980円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">肩甲骨はがし</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約10分</dd>
					</dl>
					<p class="menu-option_price">1,980円<span class="kr-50">（税込）</span></p>
				</section>	

				<section class="menu-option">
				</section>

				<section class="menu-option">
					<h2 class="menu-option_head">基礎美容鍼ご希望で電気付き</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約30分</dd>
					</dl>
					<p class="menu-option_price">7,480円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">小顔リフト再生美容鍼</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約40分</dd>
					</dl>
					<p class="menu-option_price">9,460円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">かっさ小顔フェイシャル</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約30分</dd>
					</dl>
					<p class="menu-option_price">7,480円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">美肌炭酸フェイシャル</h2>
					<dl class="menu-option_time">
						<dt>施術時間</dt>
						<dd>約40分</dd>
					</dl>
					<p class="menu-option_price">8,250円<span class="kr-50">（税込）</span></p>
				</section>				
				<section class="menu-option">
					<h2 class="menu-option_head">マグネシウムオイルに変更</h2>
					<p class="menu-option_price">1,540円<span class="kr-50">（税込）</span></p>
				</section>
				<section class="menu-option">
					<h2 class="menu-option_head">指名料</h2>
					<p class="menu-option_price">550円から<span class="kr-50">（税込）</span></p>
				</section>				
				
			</div>
		</div>
	</div>
</section>

<?php get_footer();
