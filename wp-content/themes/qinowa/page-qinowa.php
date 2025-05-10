<?php 
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        '店舗情報: 表参道Qinowa' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/salon/qinowa/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/salon/qinowa/page-title-pc.jpg',
        'alt' => '女性のための鍼灸マッサージサロンQinowa（キノワ）表参道店',
    );
});

add_filter('theme_head_title', function ($title) {
    return "女性のための鍼灸マッサージサロンQinowa（キノワ）表参道店";
});

get_header(); ?>


<div class="salon-lead">
	<div class="l-layout">
		<div class="salon-lead_inner">
			<div class="salon-lead_img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/keyvisual.jpg" class="fitimg" alt="">
			</div>
			<p class="salon-lead_txt">地下鉄 表参道から5分<br class="rwd-hidden-sp">表参道の大通りから1本入った閑静な住宅街にQinowa（キノワ）はあります。<br class="rwd-hidden-sp">住宅地に佇む一戸建ての隠れ家サロン。<br class="rwd-hidden-sp">お仕事で疲れた女性の心と体を癒やします。</p>
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
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/interior01.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">玄関から階段を上がったお2階が<br class="rwd-hidden-pc">リビングと施術のお部屋になります。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/interior02.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">カウンセリングをさせていただくソファ。<br class="rwd-hidden-pc">広々とした光が差し込む明るいリビングです。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/interior03.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">Qinowa（キノワ）では、施術のお部屋は<br class="rwd-hidden-pc">すべて個室にて5部屋ご用意しております。</p>
			</li>
			<li>
				<div class="salon-interior_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/interior04.jpg" class="fitimg" alt=""></div>
				<p class="salon-interior_caption">お化粧お直しをしていただく<br class="rwd-hidden-pc">化粧台もございます。</p>
			</li>
		</ul>
	</div>
</section>

<section class="salon-message qinowa-message">
	<div class="l-layout">
		<h2 class="salon-message_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/message-head.png" class="fitimg-h" alt="Qinowa（キノワ）の施術家からのメッセージ"></h2>
		<div class="salon-message_body">
			<div class="salon-message_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/salon/qinowa/message-img.jpg" class="fitimg" alt=""></div>
			<div class="salon-message_txts">
				<p>鍼灸マッサージサロンQinowa（キノワ）は、ハイブランドが立ち並ぶ表参道エリアを１本中に入ったところにありお買い物のご都合に合わせて立ち寄っていただきやすいサロンです。</p>
				<p>戸建ての隠れ家的サロンQinowa（キノワ）は美容と健康の両面から働く女性を応援しています。</p>
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
						<td>5台</td>
					</tr>
					<tr>
						<th>スタッフ数</th>
						<td>6人</td>
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
								<li>当日のキャンセルは、プラン料金の100％キャンセル料を頂戴します。<br class="rwd-hidden-sp">またお客様の都合による大幅な遅刻により施術ができない場合も、プラン料金の100％を頂戴します。</li>
								<li>すべてのお客様にスムーズにご利用いただくために、本施設で複数回のキャンセルや<br class="rwd-hidden-sp">ご連絡のないキャンセルがあった場合、以降の予約をお断りする場合があります。</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>注意事項</th>
						<td>
							<p class="kome">女性限定</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<section class="salon-detail">
	<div class="l-layout">
		<h2 class="salon-detail_head"><span>鍼灸マッサージサロン Qinowa</span></h2>
		<div class="salon-detail_body">
			<div class="salon-detail_data">
				<p class="salon-detail_address"><span class="nowrap">〒107-0062 </span><wbr><span class="nowrap">東京都港区南青山3丁目14番8号</span></p>
				<p class="salon-detail_tel">TEL：03-5771-1277</p>
				<p class="salon-detail_hours">HOURS：平日 11:00～22:00 土日祝 10:00～22:00<span class="salon-detail_note">平日は10時半オープンの営業日がございます</span></p>
			</div>
			<div class="salon-detail_sns">
				<ul class="salon-sns">
					<li class="salon-sns_facebook"><a href="https://www.facebook.com/Qinowa/" target="_blank"><span class="salon-sns_icon"><i class="fa fa-facebook" aria-hidden="true">&#8203;</i></span>Facebook</a></li>
				</ul>
			</div>
		</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.4665603599374!2d139.7131132152583!3d35.66551228019799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b61de219ca3%3A0x8941bd00e4db8176!2z44CSMTA3LTAwNjIg5p2x5Lqs6YO95riv5Yy65Y2X6Z2S5bGx77yT5LiB55uu77yR77yU4oiS77yY!5e0!3m2!1sja!2sjp!4v1554126911044!5m2!1sja!2sjp" frameborder="0" class="salon-detail_map" allowfullscreen></iframe>
</section>

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

<?php get_footer();
