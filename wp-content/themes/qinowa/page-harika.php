<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        '姉妹店 ご紹介 銀座 はり香 ～Harika～' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/salon/harika/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/salon/harika/page-title-pc.jpg',
        'alt' => '姉妹店 ご紹介 銀座 はり香 ～Harika～',
    );
});
get_header("harika"); ?>

<div class="salon-lead harika-lead">
	<div class="l-layout">
		<div class="salon-lead_inner">
			<div class="salon-lead_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/keyvisual.jpg" class="fitimg" alt="はり香 HARIKA">
			</div>
			<p class="salon-lead_txt harika-lead_txt"><span class="k-50">『はり⾹ Harika』は、</span><br><span class="kl-50">「きもちよい」</span>という感覚を<br> ⼤切にする治療<span class="kr-50">サロンです。</span></p>
		</div>
		<p class="harika-lead_more">銀座や京橋から好アクセスな、完全個室のリラクサロン。<br class="rwd-hidden-sp">『はり⾹ Harika』に⼀歩⾜を踏み⼊れると、フワリと⼼地よい⾹りが漂います。<br class="rwd-hidden-sp">清潔で静かな⾳楽の中、⽇常の慌ただしさを忘れて、じっくりと鍼やオイルマッサージの治療をお受けいただきます。<br class="rwd-hidden-sp">働く女性はもちろん、妊婦さんや男性にもオススメです、</p>
	</div>
</div>

<section class="harika-intro">
	<div class="l-layout">
		<h2 class="harika-intro_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/intro-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/intro-head.jpg" alt="はり香オリジナルのオーガニックアロマで心と体の癒しを"></h2>
		<div class="harika-intro_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/intro-img.jpg" class="fitimg" alt=""></div>
		<p class="harika-intro_txt">その⽇の体調や気分に合う芳⾹浴のための特別な⾹りは、⽇本を代表するオーガニック認証取得アロマブランド「ARTQ」監修<br class="rwd-hidden-sp">アロマ界の第一人者のアネルズあづささんと共同開発したはり⾹オリジナルブレンド。<br class="rwd-hidden-sp">奥深い⾹りは、時間と共に変化しながら、⾝体がほぐれるに従い幾層にも変化するその瞬間をお楽しみいただけます。</p>
	</div>
</section>

<section class="salon-interior">
	<div class="l-layout">
		<h2 class="salon-interior_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/interior-head.png" class="fitimg-h" alt="サロン内の様子"></h2>
	</div>
	<div class="salon-interior_inner">
		<ul class="salon-interior_list">
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/interior01.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">白と木目を基調とした店内は、洗練されたなかに<br class="rwd-hidden-pc">温かみも感じる落ち着いた空間。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/interior02.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">施術のお部屋はすべて個室にて<br class="rwd-hidden-pc">ご用意しております。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/interior03.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">カウンセリングにてオリジナルアロマを<br class="rwd-hidden-pc">お選びいただきます。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/interior04.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">お化粧直しをしていただく<br class="rwd-hidden-pc">化粧台もございます。</p>
			</li>
		</ul>
	</div>
</section>

<section class="harika-menu">
	<div class="l-layout">
		<div class="harika-menu_inner">
			<h2 class="harika-menu_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/menu-head.png" class="fitimg-h" alt="はり香～Harika～のメニュー"></h2>
			<div class="harika-menu_body">
				
				<div class="harika-menu_item">
					<div class="harika-menu_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/menu03-pc.jpg" alt=""></div>
					<div class="harika-menu_itemBody">
						<div class="menu-item">
							<div class="harika-menu_media-sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/menu03-sp.jpg" class="fitimg" alt=""></div>
							<header class="menu-item_head">
								<h2 class="menu-item_name">[初回限定]オーガニックアロマオイルマッサージ＋鍼治療</h2>
							</header>
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
									<span class="button-sb is-block"><a href="https://www.harika.care/menus" target="_blank">詳細を見る</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="harika-menu_item">
					<div class="harika-menu_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/menu02-pc.jpg" alt=""></div>
					<div class="harika-menu_itemBody">
						<div class="menu-item">
							<div class="harika-menu_media-sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/menu02-sp.jpg" class="fitimg" alt=""></div>
							<header class="menu-item_head">
								<h2 class="menu-item_name">[初回限定]マタニティアロマトリートメント+鍼灸治療</h2>
							</header>
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
									<span class="button-sb is-block"><a href="https://www.harika.care/menus" target="_blank">詳細を見る</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>
</section>

<section class="harika-reserve">
	<div class="l-layout">
		<h2 class="harika-reserve_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/reserve-head.png" class="fitimg-h" alt="はり香～Harika～のご予約はこちらから"></h2>
		<div class="harika-reserve_body">
			<div class="harika-reserve_txts">
				<p>予約サイトまたはLINE予約をご利用ください。<br class="rwd-hidden-sp">どのコースにするかお悩みの方は、LINEよりご相談ください。</p>

				<ul class="first_btnsList">
					<li><span class="button-line is-block"><a href="https://line.me/R/ti/p/%40bfk2704j" target="_blank">LINE 予約</a></span></li>
					<li><span class="button-sb is-block"><a href="https://s6rq5m.b-merit.jp/m5kyvw/web/login" target="_blank">WEB 予約</a></span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="salon-info harika-info">
	<div class="l-layout">
		<h2 class="salon-info_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/harika/info-head.png" class="fitimg-h" alt="はり香～Harika～の詳細情報"></h2>
		<div class="salon-info_body">
			<table class="table-std">
				<tbody>
					<tr>
						<th>ベッド数</th>
						<td>4台</td>
					</tr>
					<tr>
						<th>スタッフ数</th>
						<td>5人</td>
					</tr>
					<tr>
						<th>クレジットカード</th>
						<td>Visa/Mastercard/Amex/JCB/Diners Club/Discover</td>
					</tr>
					<tr>
						<th>QRコード決済</th>
						<td>PayPay / d払い/auPay/Rpay/メルpay/LINE Pay</td>
					</tr>
					<tr>
						<th>電子マネー</th>
						<td>iD/QUICPay/Apple Pay/交通系IC</td>
					</tr>
					<tr>
						<th>アメニティ</th>
						<td>
							<ul class="salon-info_amenities">
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity01.png" alt=""></span><span class="amenities_name">紙ショーツ</span></li>
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity02.png" alt=""></span><span class="amenities_name">ドライヤー</span></li>
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity03.png" alt=""></span><span class="amenities_name">ヘアブラシ</span></li>
								<li><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity04.png" alt=""></span><span class="amenities_name">化粧水</span></li>
								<li><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity05.png" alt=""></span><span class="amenities_name">ベース<br class="rwd-hidden-sp">メイク用品</span></li>
								<li><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity06.png" alt=""></span><span class="amenities_name">ポイント<br class="rwd-hidden-sp">メイク用品</span></li>
								<li><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity07.png" alt=""></span><span class="amenities_name">施術着</span></li>
								<li><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity08.png" alt=""></span><span class="amenities_name">コンタクト<br class="rwd-hidden-sp">ケース</span></li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>キャンセルについて</th>
						<td>
							<ul class="kome salon-info_list">
								<li>予約日時・プランの変更およびキャンセルは、前日までにご連絡ください。</li>
								<li>当日のキャンセルは、プラン料金の30％キャンセル料を頂戴します。またお客様の都合による大幅な遅刻により施術ができない場合も、プラン料金の30％を頂戴します。</li>
								<li>すべてのお客様にスムーズにご利用いただくために、本施設で複数回のキャンセルやご連絡のないキャンセルがあった場合、以降の予約をお断りする場合があります。</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>注意事項</th>
						<td>
							<ul class="kome salon-info_list">
								<li>妊娠中の方は、16週～安定期で医師または助産師の同意を得た方のみお受けします。</li>
								<li>通院歴や当日の体調により施術をお断りする場合があります。<br class="rwd-hidden-sp">不安な方は、事前にサロンへご相談ください。</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section class="salon-detail harika-detail">
	<div class="l-layout">
		<h2 class="salon-detail_head"><span>銀座 はり香 ～Harika～</span></h2>
		<div class="salon-detail_body">
			<div class="salon-detail_data">
				<p class="salon-detail_address"><span class="nowrap">〒104-0031 </span><wbr><span class="nowrap">東京都中央区京橋3-6-21 京橋伸和ビル 3F</span></p>
				<p class="salon-detail_tel">TEL：03-6263-0949</p>
				<p class="salon-detail_hours">HOURS：平日 11:30～22:00 土日祝 10:00～21:00</p>
			</div>
			<div class="salon-detail_sns">
				<ul class="salon-sns">
					<li class="salon-sns_twitter"><a href="https://www.harika.care/" target="_blank"><span class="salon-sns_icon"><i class="fa fa-twitter" aria-hidden="true">&#8203;</i></span>はり香HP</a></li>
					<li class="salon-sns_facebook"><a href="https://www.facebook.com/ginzaharika" target="_blank"><span class="salon-sns_icon"><i class="fa fa-facebook" aria-hidden="true">&#8203;</i></span>Facebook</a></li>
					<li class="salon-sns_instagram"><a href="https://www.instagram.com/ginzaharika/?hl=ja" target="_blank"><span class="salon-sns_icon"><i class="fa fa-camera" aria-hidden="true">&#8203;</i></span>Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.062875550444!2d139.76740221525876!3d35.675453780195625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b03365eaf2b%3A0x6acdc7a875e0812e!2z6YqA5bqn6Y2854G45rK755mC5a6kIOOBr-OCiummmSB8IOmNvOeBuOODu-OCouODreODnuODu-aVtOS9kw!5e0!3m2!1sja!2sjp!4v1559269947274!5m2!1sja!2sjp" width="800" frameborder="0" class="salon-detail_map" allowfullscreen></iframe>
</section>


<?php get_footer();
