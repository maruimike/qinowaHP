<?php get_header(); ?>
<section class="index-minds">
	<div class="l-layout">
		<h2 class="index-minds_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/minds-head.png" class="fitimg" alt="私たちの想い our mind"></h2>
		<div class="index-minds_body">
			<section class="index-mind index-mind-01">
				<h2 class="index-mind_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind01-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind01-head-pc.png" class="fitimg" alt="あなたの「体に元気を取り戻す」お手伝いをします。"></h2>
				<div class="index-mind_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind01-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind01-img-pc.jpg" class="fitimg" alt="「気分がいい」「ご飯がおいしい」「ホッとする」「どこも痛くない」"></div>
				<div class="index-mind_body">
					<p class="index-mind_txt">Qinowaキノワは そんな何気ない生活を皆様に送っていただくため、体の不調を整え、本来あなたが持っている力を高めるお手伝いをします。仕事に育児に頑張っている女性を総合的にサポートし、寄り添える存在でありたいと思っています。</p>
				</div>
			</section>
			<section class="index-mind index-mind-02">
				<h2 class="index-mind_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind02-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind02-head-pc.png" class="fitimg" alt="鍼灸とオイルマッサージで治療の幅を広げる"></h2>
				<div class="index-mind_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind02-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind02-img-pc.jpg" class="fitimg" alt="マッサージの様子"></div>
				<div class="index-mind_body">
					<p class="index-mind_txt">Qinowaキノワでは、東洋医学である鍼灸と西洋医学のオイルマッサージを合わせて取り入れています。「鍼灸」と「オイルマッサージ」を組み合わせることで、幅広く施術を行うことができ、より多くの患者様の体調に合わせた施術を行うことができます。例えば、美肌のための根本治療。<br>
						また、「オイルマッサージ」は「鍼灸」と同様、直接お客様の体に触れることで、掌でお客様の調子を感じることができるのもとても相性が良いです。</p>
				</div>
			</section>
			<section class="index-mind index-mind-03">
				<h2 class="index-mind_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind03-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind03-head-pc.png" class="fitimg" alt="気持ち良く治すということ"></h2>
				<div class="index-mind_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind03-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind03-img-pc.jpg" class="fitimg" alt="鍼治療の様子"></div>
				<div class="index-mind_body">
					<p class="index-mind_txt">よく効く治療は痛いとか苦しいというイメージがありますが、当サロンの鍼灸やオイルマッサージは痛みを伴わない、気持ちの良い治療を目指しています。<br>
						気持ちの良い治療であることが、継続して治療を行えることにもつながり、お客様の力を回復させることにつながります。</p>
				</div>
			</section>
			<section class="index-mind index-mind-04">
				<h2 class="index-mind_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind04-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind04-head-pc.png" class="fitimg" alt="施術家の技術力に自信を持っています"></h2>
				<div class="index-mind_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind04-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/mind04-img-pc.jpg" class="fitimg" alt="Qinowaキノワの施術家"></div>
				<div class="index-mind_body">
					<p class="index-mind_txt">Qinowaキノワの施術家は、全員が国家資格を保有し5年以上の臨床経験を持っています。さらに、数多くの臨床経験をサロン全体で共有し、知識を高めあうことでより多くの患者様へのご対応ができるよう、日々努力しております。施術家全員が、精一杯患者様と向き合う気持ちを持ち、自信を持ってお客様に接することができる施術家ばかりです。</p>
				</div>
			</section>
		</div>
	</div>
</section>
<div class="index-info">
	<div class="l-layout">
		<div class="index-info_bnrs">
			<div class="index-info_bnr">
				<a href="/report/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/bnr-report.png" class="fitimg" alt="Qinowaにご来店いただきました サロン体験レポート"></a>
			</div>
			<div class="index-info_bnr">
				<a href="/column/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/bnr-column.png" class="fitimg" alt="Qinowa コラム column 体のちょっといいお話"></a>
			</div>
		</div>
		<div class="index-info_news">
			<section class="index-news">
				<h2 class="index-news_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/news-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/news-head-pc.png" class="fitimg" alt="キャンペーンお知らせ"></h2>
				<div class="index-news_body">
					<ul class="index-news_list">
						<?php
                        $news = oc_get_posts(5, 'news');
                        if ($news) {
                            foreach ($news as $item) {
                                ?>
						<li>
							<dl class="index-news_post">
								<dt>
									<?php echo get_the_time('Y年m月d日', $item); ?>
								</dt>
								<dd><a href="<?php echo get_permalink($item); ?>"><?php echo get_the_title($item); ?></a></dd>
							</dl>
						</li>

						<?php
                            }
                        }
                        ?>

					</ul>
				</div>
				<footer class="index-news_foot">
					<span class="index-news_more"><a href="/news/">もっと見る</a></span>
				</footer>
			</section>
		</div>
	</div>
</div>
<div class="index-salon">
	<div class="l-layout">
		<section class="index-salon_sec">
			<div class="index-salon_media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/qinowa-photo-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/qinowa-photo-pc.jpg" class="fitimg" alt="Qinowa エントランス">
			</div>
			<div class="index-salon_body">
				<h2 class="index-salon_head">青山 Qinowa</h2>
				<p class="index-salon_address"><span class="nowrap">〒107-0062 </span><wbr><span class="nowrap">東京都港区南青山3丁目14番8号</span></p>
				<p class="index-salon_tel">TEL：03-5771-1277</p>
				<p class="index-salon_hours">HOURS：平日 11:00～22:00 土日祝 10:00～21:00<span class="index-salon_note">平日は10時オープンの営業日がございます</span></p>
				<div class="index-salon_foot">
					<div class="index-salon_sns">
						<ul class="index-sns">
							<li class="index-sns_facebook"><a href="https://www.facebook.com/Qinowa/" target="_blank"><i class="fa fa-facebook" aria-hidden="true">&#8203;</i></a></li>
							<li class="index-sns_instagram"><a href="https://www.instagram.com/qinowa2007/" target="_blank"><i class="fa fa-camera" aria-hidden="true">&#8203;</i></a></li>
						</ul>
					</div>
					<div class="index-salon_more">
						<span class="button is-block"><a href="/qinowa/" class="index-salon_more"><span class="rwd-hidden-sp">店舗情報 </span>詳細はこちら</a></span>
					</div>
				</div>
			</div>
		</section>
			<!-- ▼店舗紹介六本木用 -->
		<section class="index-salon_sec">
			<div class="index-salon_media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/qinowa-r-photo-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/qinowa-r-photo-pc.jpg" class="fitimg" alt="Qinowa エントランス">
			</div>
			<div class="index-salon_body">
				<h2 class="index-salon_head">六本木 Qinowa</h2>
				<p class="index-salon_address"><span class="nowrap">〒106-0032 </span><wbr><span class="nowrap">東京都港区六本木7丁目11番24号</span></p>
				<p class="index-salon_tel">アクセス：六本木駅5分　乃木坂駅6分</p>
				<p class="index-salon_hours">HOURS：平日 11:00～22:00 土日祝 10:00～21:00<span class="index-salon_note">※火曜定休</span></p>
				<div class="index-salon_foot">
					<div class="index-salon_sns">
						<ul class="index-sns">
							<li class="index-sns_facebook"><a href="https://www.facebook.com/Qinowa/" target="_blank"><i class="fa fa-facebook" aria-hidden="true">&#8203;</i></a></li>
							<li class="index-sns_instagram"><a href="https://www.instagram.com/qinowa2007/" target="_blank"><i class="fa fa-camera" aria-hidden="true">&#8203;</i></a></li>
						</ul>
					</div>
					<div class="index-salon_more">
						<span class="button is-block"><a href="/roppongi/" class="index-salon_more"><span class="rwd-hidden-sp">店舗情報 </span>詳細はこちら</a></span>
					</div>
				</div>
			</div>
		</section>
			<!-- ▲店舗紹介六本木 -->
	</div>
		<div class="l-layout">

	<!-- ▼施術家のご紹介の場合 -->
			<style>#coco-review-widget3 .coco-review-widget3_sumCount {display:none!important;}</style>
			<div class="single_cocoreview">
				<div data-cocoreview-widget data-shop-id="65" data-user-id=""></div>
				<script src="https://cocoreview.com/js/widget.js" async></script>
			</div>
			<!-- ▲施術家のご紹介の場合 -->

			<!-- coco-review口コミのデザイン　ここまで  -->
	</div>
	
</div>
<?php get_footer();
