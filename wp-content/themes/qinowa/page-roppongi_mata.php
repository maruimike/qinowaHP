<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        '店舗情報: 六本木Qinowa' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/salon/roppongi/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/salon/roppongi/page-title-pc.jpg',
        'alt' => '女性のための鍼灸マッサージサロンQinowa（キノワ）六本木店',
    );
});

add_filter('theme_head_title', function ($title) {
    return "女性のための鍼灸マッサージサロンQinowa（キノワ）六本木店";
});

get_header(); ?>


<div class="salon-lead">
	<div class="l-layout">
		<div class="salon-lead_inner">
			<div class="salon-lead_img">
				<img src=https://www.qinowa.jp/wp-content/uploads/2024/02/roppongi_keyvisual.png class="fitimg" alt="">
			</div>
			<p class="salon-lead_txt">地下鉄 六本木駅から5分<br class="rwd-hidden-sp">東京ミッドタウン側の閑静な住宅街に六本木Qinowa（キノワ）はあります。<br class="rwd-hidden-sp">住宅地に佇む一戸建ての隠れ家サロン。<br class="rwd-hidden-sp">お仕事で疲れた心と体を癒やします。</p>
		</div>
	</div>
</div>

<section class="salon-interior">
	<div class="l-layout">
		<h2 class="salon-interior_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/interior-head.png" class="fitimg-h" alt="サロン内の様子"></h2>
	</div>
	<div class="salon-interior_inner">
		<ul class="salon-interior_list">
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/roppongi/interior01.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">ご予約制ですから、お待たせすることなくお部屋にご案内いたします。<br class="rwd-hidden-pc"></p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/roppongi/interior02.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">玄関から階段を上がったお2階。<br class="rwd-hidden-pc">広々とした光が差し込む明るいリビングです。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/roppongi/interior03.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">カウンセリング・施術・お会計を<br class="rwd-hidden-pc">お部屋で完結します。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/roppongi/interior04.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">フットバスがございます。<br class="rwd-hidden-pc">＊３階の一部屋のみ</p>
			</li>
		</ul>
	</div>
</section>

<section class="salon-interior">
	<div class="l-layout">
		<h2 class="salon-interior_head"><img src="https://www.qinowa.jp/wp-content/uploads/2024/01/508b92f108ec7a867ee7cfe1bd4f1491.png" class="fitimg-h" alt="マタニティ施術の流れ"></h2>
	</div>
	<div class="salon-interior_inner">
		<ul class="salon-interior_list">
			<li>
				<div class="salon-interior_media"><img src="https://www.qinowa.jp/wp-content/uploads/2024/01/e012b2cafe99158f0d7119523d7ba70a.png" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">お一人おひとりのお身体の状態をお伺します。<br class="rwd-hidden-pc"></p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="https://www.qinowa.jp/wp-content/uploads/2024/01/29938c562e1aa9d846fbe1d6e4b35001.png" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">自分の楽な姿勢で受けられます。<br class="rwd-hidden-pc">マタニティ専用設計のマットを使用。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="https://www.qinowa.jp/wp-content/uploads/2024/01/0dbe17bc03db04d31b44c6c0a95c1d91.png" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">担当者は全員女性です。<br class="rwd-hidden-pc">国家資格保有ですので安心です</p>
			</li>
			
		</ul>
	</div>
</section>

<section class="menu-cource menu-first">
	<div class="l-layout">
		<div class="menu-cource_inner">
			<header class="menu-cource_head">
			  <h2 class="menu-cource_headTitle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/1.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/2023/first.png" alt="初回限定鍼灸アロマコース"></h2>
			  <p class="menu-cource_headTxt">
			    <span class="nowrap">六本木Qinowa ご来店が初めての方の限定コースです。</span>
			    <span class="nowrap">丁寧なカウンセリンングで安心して</span>
				   <span class="nowrap">施術をお受けいただけます</span>
				
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
							<span class="button is-block"><a href="/menu/">他メニューを見る</a></span>
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
							<span class="button is-block"><a href="/menu/">他メニューを見る</a></span>
						</div>
					</div>
				</div>
				<div>
				  <p class="menu-item_txt"><br><br>※両コースとも時間内にカルテのご記入とカウンセリングが含まれております（約20分）。 </p>
					<br>
									  <p class="menu-item_txt"><br><br>六本木店でもQinowaの全てのコースが受けられます。 </p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="salon-message qinowa-message">
	<div class="l-layout">
		<h2 class="salon-message_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/message-head.png" class="fitimg-h" alt="Qinowa（キノワ）の施術家からのメッセージ"></h2>
		<div class="salon-message_body">
			<div class="salon-message_media"><img src=https://www.qinowa.jp/wp-content/uploads/2024/02/ropponngi_message.png class="fitimg" alt=""></div>
			<div class="salon-message_txts">
           <p>
			   六本木Qinowa（キノワ）は、どんどん変化する六本木エリアにありお買い物や文化芸術施設へのご都合に合わせて立ち寄っていただきやすいサロンです。</p>
          <p>
              	戸建ての隠れ家的サロンQinowa（キノワ）は美容と健康の両面からみなさまを応援しています。
  			</p>
			</div>
		</div>
	</div>
</section>

<section class="salon-info">
	<div class="l-layout">
		<h2 class="salon-info_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/info-head.png" class="fitimg-h" alt="Qinowa（キノワ）の詳細情報"></h2>
		<div class="salon-info_body">
			<table class="table-std">
				<tbody>
					<tr>
						<th>ベッド数</th>
						<td>4台</td>
					</tr>
					<tr>
						<th>決済方法</th>
						<td>
								■クレジットカード<br>
Visa/Mastercard/Amex <br>
JCB/Diners Club/Discover<br><br>
■QRコード決済<br>
PayPay / d払い/auPay/Rpay/メルpay/LINE Pay <br><br>
■電子マネー<br>
iD/QUICPay/Apple Pay/交通系IC<br>
							※現金はお取り扱いしておりません。
						</td>
					</tr>
					<tr>
						<th>アメニティ</th>
						<td>
							<ul class="salon-info_amenities">
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity01.png" alt=""></span><span class="amenities_name">紙ショーツ</span></li>
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity02.png" alt=""></span><span class="amenities_name">ドライヤー</span></li>
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity03.png" alt=""></span><span class="amenities_name">ヘアブラシ</span></li>
								<li class="is-active"><span class="amenities_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/amenity04.png" alt=""></span><span class="amenities_name">化粧水</span></li>
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
								<li>当日のキャンセルは、プラン料金の30％キャンセル料を頂戴します。<br class="rwd-hidden-sp">またお客様の都合による大幅な遅刻により施術ができない場合も、プラン料金の30％を頂戴します。</li>
								<li>すべてのお客様にスムーズにご利用いただくために、本施設で複数回のキャンセルや<br class="rwd-hidden-sp">ご連絡のないキャンセルがあった場合、以降の予約をお断りする場合があります。</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>注意事項</th>
						<td>
							<p class="kome">完全予約制</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section class="salon-detail">
	<div class="l-layout">
		<h2 class="salon-detail_head"><span>鍼灸マッサージサロン 六本木Qinowa</span></h2>
		<div class="salon-detail_body">
			<div class="salon-detail_data">
				<p class="salon-detail_address"><span class="nowrap">〒106-0032 </span><wbr><span class="nowrap"> 東京都港区六本木７丁目１１−２４ CareBody内<br> 六本木駅7番出口、乃木坂駅3番出口よりお越しください。<br>東京ミッドタウン通り向かい、国立新美術館近くの、<br>静かな住宅街の一軒家です。<br>インターホンを押してくださいませ。 </span></p>
				<p class="salon-detail_tel">TEL：03-5771-1277</p>
				<p class="salon-detail_hours">HOURS：平日 11:00～22:00 土日祝 10:00～22:00<span class="salon-detail_note">平日は10時半オープンの営業日がございます</span></p>
			</div>
			
		</div>
		<div class="harika-reserve_body">
			<div class="harika-reserve_txts">
				<p>LINE予約をご利用ください。2023/6月new open<br class="rwd-hidden-sp">どのコースにするかお悩みの方は、LINEよりご相談ください。</p>

				<ul class="first_btnsList">
					<li><span class="button-line is-block"><a href="https://lin.ee/KNp0tOB" target="_blank">LINE 予約</a></span></li>
				</ul>
			</div>
		</div>
      <br><br>
	</div>
	<!-- coco-review口コミのデザイン　ここから  -->
		<div class="l-layout">

	<!-- ▼施術家のご紹介の場合 -->
			<style>#coco-review-widget3 .coco-review-widget3_sumCount {display:none!important;}</style>
			<div class="single_cocoreview">
				<div data-cocoreview-widget data-shop-id="65" data-user-id=""></div>
				<script src="https://cocoreview.com/js/widget.js" async></script>
			</div>
			<!-- ▲施術家のご紹介の場合 -->

			
	</div>
	<!-- coco-review口コミのデザイン　ここまで  -->
	<br><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12966.121955410881!2d139.7289183!3d35.6639377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b4ef526b943%3A0xc03cda3169139b6c!2zUWlub3dhIOOCreODjuODryDlha3mnKzmnKjlupc!5e0!3m2!1sja!2sjp!4v1681528598728!5m2!1sja!2sjp" frameborder="0" class="salon-detail_map"   allowfullscreen></iframe>

</section>
<!-- 
<section class="salon-path">
	<div class="l-layout">
		<h2 class="salon-path_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path-head.png" class="fitimg-h" alt="Qinowa（キノワ）までの道のり"></h2>
	</div>
	<div class="salon-path_inner">
		<ol class="salon-path_steps">
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path01.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">青山通り方面改札を出て左へ</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path02.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">A4出口にお進みください</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path03.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">エスカレーターにお進みください</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path04.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">階段にお進みください</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path05.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">A4出口出まして、左へまっすぐお進みください</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path06.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">とりよし、イッセイミヤケを通り過ぎます</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path07.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">MIUMIUの角を左に曲がります</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path08.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">突き当りを右へ</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path09.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">すぐ左へ</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path10.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">この道を突き当たりまでまっすぐ進みます</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path11.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">突き当りを左に曲がります</p>
			</li>
			<li>
				<div class="salon-path_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/path12.jpg" class="fitimg" alt=""></div>
				<p class="salon-path_caption">左手の二件目の建物です</p>
			</li>
		</ol>
	</div>
</section>
-->

<?php get_footer();
