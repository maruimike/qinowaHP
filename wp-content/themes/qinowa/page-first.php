<?php
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        'はじめての方へ' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/first/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/first/page-title-pc.jpg',
        'alt' => 'メニュー＆料金│鍼灸マッサージサロン Qiroom×Qinowa',
    );
});
get_header(); ?>

<section class="first-lead">
	<div class="l-layout">
		<header>
			<p class="first-lead_lead"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/lead-txt-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/lead-txt-pc.png" class="fitimg" alt="全ての女性に、『誠実で適切な施術』『あたたかみのある接客』『元気のサポート』をお約束します"></p>
			<h2 class="first-lead_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/lead-logo.png" class="fitimg" alt="Qinowaキノワ"></h2>
		</header>
		<div class="first-lead_body">
			<p>Qinowaキノワでは、東洋の「鍼灸」と西洋の「オイルトリートメント」をミックスした施術を取り入れております。<br class="rwd-hidden-sp">鍼灸とオイルトリートメントは、どちらもお客様の体に直接触れる施術のため、とても相性のよい組み合わせです。<br class="rwd-hidden-sp">鍼灸でツボと経路をメインに、オイルトリートメントで筋膜・筋肉・骨格の構造の観点から施術することで、幅広いケアが可能です。</p>
			<p>施術者は全員女性なので、女性ならではのお悩みがある方も安心してご利用いただけます。毎日忙しい方や体からアラートが<br class="rwd-hidden-sp">出ている方など、お客様一人ひとりに合わせた方法でアプローチいたします。</p>
			<p>その日の気分によって心地よく感じるアロマや、施術室の適切な温度・湿度、調光やくつろげる音楽、<br class="rwd-hidden-sp">施術後のからだに優しいハーブティーなど、五感からの心地よさを感じられるような環境を整えた完全個室空間で、<br class="rwd-hidden-sp">あなただけの贅沢な時間をお過ごしください。</p>
		</div>
	</div>
</section>

<section class="first-message">
	<div class="l-layout">
		<h2 class="first-message_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/message-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/message-head-pc.png" class="fitimg" alt="自然体であることと「元気」と「キレイ」を一緒に作り上げたい"></h2>
		<div class="first-message_body">
			<div class="first-message_main">
				<div class="first-message_media">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/message-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/message-img-pc.jpg" class="fitimg" alt="">
				</div>
				<div class="first-message_txts">
					<p>Qinowaキノワでは、「手を添えて伴走していける施術」を目指してつらさの原因は何なのか、そのために心要な施術は何なのかなど、お客様に合わせた施術をご提案させていただきます。そのため、一つの技術でだけでなく、その時々で様々な手技や道具を用いてバリエーションのある手法を取っております。</p>
					<p class="txts_name">代表 星野 ひろ子</p>
				</div>
			</div>
			<section class="first-profile">
				<h2 class="first-profile_head">代表者プロフィール</h2>
				<div class="first-profile_body">
					<p>東京医療専門学校卒業後、日産玉川病院（東洋医療研究所）をはじめ、都内の整形外科やオイルマッサージ専門店で経験を積む。その後、東洋療法学校協会指定・外部臨地実習認定指導者となる。保有資格に、英国フレグラントアース認定『スラヴィックマッサージ』など。2002年の春に、鍼灸とオイルトリートメントを組み合わせた施術を行う「Qiroom」を恵比寿にオープン。2007年の夏には表参道に「Qinowa」を、2019年の春に「鍼灸治療室 銀座はり香 HARIKA」を開く。お客様の多様な価値観を尊重し、自然体であることを大切にしながら、小児から高齢者まで男女問わず施術サービスを提供。現在は、働く女性の“疲労”に着目して施術を行う。</p>
				</div>
			</section>
		</div>
	</div>
</section>

<section class="first-supplies">
	<div class="l-layout">
		<div class="first-supplies_inner">
			<h2 class="first-supplies_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/supplies-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/supplies-head-pc.png" class="fitimg" alt="お客様に信頼をお約束する、キノワQinowaでの使用道具"></h2>
			<div class="first-supplies_media">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/supplies-img-sp.jpg" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/supplies-img-pc.jpg" class="fitimg" alt="">
			</div>
			<div class="first-supplies_body">
				<div class="first-supplies_txts">
					<dl class="first-supplies_definition">
						<dt>鍼とお灸</dt>
						<dd>
							<p>鍼とシャーレは全てディスポーザブル。不要な刺激を避け、痛みの少ない施術を目指して、国内メーカーの数十種類の製品をお客様の状態によって使い分けております。過敏な体質の方には「刺さない鍼」「撫でる鍼」なども使用します。お灸は、低温火傷のリスクが低い家庭用せんねん灸や温灸などをメインに使用し、体が喜ぶ心地よい施術を目指しております。</p>
						</dd>
					</dl>
					<dl class="first-supplies_definition">
						<dt>マッサージに使用するキャリアオイル</dt>
						<dd>
							<p>細かな成分表を用いて安定した品質のオイルを厳選。季節や施術部位によって、天然植物由来のキャリアオイルを数種類ブレンドして使用しております。石油由来のオイルは一切使用しておりません。</p>
						</dd>
					</dl>
					<dl class="first-supplies_definition">
						<dt>マッサージに使用するアロマオイル</dt>
						<dd>
							<p>英国発フレグラントアース社のオーガニック認定オイルを使用<br>スイス発ナリン社のオーガニック認定オイルを使用<br>
								国内ブランドであるアロマティークオーガニクスのCOSMOS ORGANIC 認証オイルを使用</p>
						</dd>
					</dl>
					<dl class="first-supplies_definition">
						<dt>フェイシャル用化粧品など</dt>
						<dd>
							<p>ニュージーランド発オーガニックコスメとして世界中で販売されている「トリロジー」とフランスエステ「ギノー」をコース仕立てで、クレンジングからお仕上げクリームまでの全工程で使用しております。</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="first-flow">
	<div class="l-layout">
		<h2 class="first-flow_head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/flow-head.png" class="fitimg-h" alt="ご利用の流れ"></h2>
		<div class="first-flow_body">
			<ul class="first-flow_list">
				<li>
					<dl class="first-flow_step first-flow_step-01">
						<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/step01-head.png" class="fitimg" alt="ご予約お申込み"></dt>
						<dd>
							<p class="step_txt">希望されるサロンの予約サイトまたはLINE予約をご利用ください。<br class="rwd-hidden-sp">どのコースにするかお悩みの方は、LINEよりご相談ください。</p>
							<div class="first_btnsSet">
								<dl class="first_btns is-line">
									<dt><span>LINE予約</span></dt>
									<dd>
										<ul class="first_btnsList">
											<li><span class="button-line is-block"><a href="https://line.me/R/ti/p/%40qinowa" target="_blank">青山Qinowa</a></span></li>
											<li><span class="button-line is-block"><a href="https://lin.ee/KNp0tOB" target="_blank">六本木Qinowa</a></span></li>
										</ul>
									</dd>
								</dl>
								<dl class="first_btns is-web">
									<dt><span>WEB予約</span></dt>
									<dd>
										<ul class="first_btnsList">
											<li><span class="button is-block"><a href="https://s6rq5m.b-merit.jp/v73s46/web/login" target="_blank">青山Qinowa</a></span></li>
											<li><span class="button is-block"><a href="https://yui.kanzashi.com/l/3npf7225hYg/kirei" target="_blank">六本木Qinowa</a></span></li>
										</ul>
									</dd>
								</dl>
							</div>
						</dd>
					</dl>
				</li>
				<li>
					<dl class="first-flow_step first-flow_step-02">
						<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/step02-head.png" class="fitimg" alt="ご来店"></dt>
						<dd>
							<p class="step_txt">お申込みいただいたサロンに直接ご来店ください。<br class="rwd-hidden-sp">表参道Qinowaと銀座Harikaの2店舗ございますので、ご予約、ご来店の際はお間違いのないようご注意ください。</p>
						</dd>
					</dl>
				</li>
				<li>
					<dl class="first-flow_step first-flow_step-03">
						<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/step03-head.png" class="fitimg" alt="カウンセリング（約10分）"></dt>
						<dd>
							<p class="step_txt">まず、お客様のお悩みや気になることなどをお聞かせください。<br class="rwd-hidden-sp">お客様の状態を確認させていただき、どのような施術を行うべきかご提案いたします。</p>
						</dd>
					</dl>
				</li>
				<li>
					<dl class="first-flow_step first-flow_step-04">
						<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/step04-head.png" class="fitimg" alt="施術"></dt>
						<dd>
							<p class="step_txt">お客様の状態に合わせて施術を行います。施術のお時間については、メニューによって異なりますので、<a href="/menu/">メニューページ</a>をご覧ください。施術中でもお気軽にご相談ください。</p>
						</dd>
					</dl>
				</li>
				<li>
					<dl class="first-flow_step first-flow_step-05">
						<dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/step05-head.png" class="fitimg" alt="アフターカウンセリング（約10分）"></dt>
						<dd>
							<p class="step_txt">ハーブティーをご用意してます。<br class="rwd-hidden-sp">施術の結果を確認しながら、セルフケアや今後の施術方針のアドバイスなどをさせていただきます。</p>
						</dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="first-recommend">
	<div class="l-layout">
		<div class="first-recommend_body">
			<header class="first-recommend_head">
				<h2 class="head_main"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/recommend-head.png" class="fitimg-h" alt="はじめての方にオススメ"></h2>
				<p class="head_sub"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/recommend-cource-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/recommend-cource-pc.png" alt="初回限定鍼灸アロマコース"></p>
			</header>
			<div class="first-recommend_info">
				<dl class="info_time">
					<dt>トータル所要時間</dt>
					<dd>110分</dd>
					<dt>施術時間</dt>
					<dd>60～80分</dd>
				</dl>
				<dl class="info_price">
					<dt>技術料金</dt>
					<dd><strong>12,540円</strong><span class="kr-50">（税込）</span></dd>
				</dl>
			</div>
			<div class="first-recommend_media">
				<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/recommend-img01.jpg" class="fitimg" alt=""></div>
				<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/recommend-img02.jpg" class="fitimg" alt=""></div>
			</div>
			<div class="first-recommend_txts">
				<p class="first-recommend_txt">はじめての方のためにカウンセリングの時間を通常よりも多めに取り、つらさにアプローチする初回ステップとしての鍼灸・オイルマッサージを組み合わせたコースです。お悩みや鍼灸に関するご質問、ご不安などを詳しくお伺いし、痛みの少ない「気持ちのよい」施術を目指しております。</p>
				<p class="first-recommend_note kome">鍼灸施術を初めてめてお受けになられる方でも安心してお受けいただけるように、<br class="rwd-hidden-sp">刺さない針やお顔に刺すような細い針で施術を行うこともできます。お気軽にご相談ください。</p>
				<div class="first-recommend_foot">
					<div class="first_btnsSet">
						<dl class="first_btns is-line">
							<dt><span>LINE予約</span></dt>
							<dd>
								<ul class="first_btnsList">
									<li><span class="button-line is-block"><a href="https://line.me/R/ti/p/%40qinowa" target="_blank">青山Qinowa</a></span></li>
									<li><span class="button-line is-block"><a href="https://lin.ee/KNp0tOB" target="_blank">六本木Qinowa</a></span></li>

								</ul>
							</dd>
						</dl>
						<dl class="first_btns is-web">
							<dt><span>WEB予約</span></dt>
							<dd>
								<ul class="first_btnsList">
									<li><span class="button is-block"><a href="https://s6rq5m.b-merit.jp/v73s46/web/login" target="_blank">青山Qinowa</a></span></li>
									<li><span class="button is-block"><a href="https://yui.kanzashi.com/l/3npf7225hYg/kirei" target="_blank">六本木Qinowa</a></span></li>
									
								</ul>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="first-safety">
	<div class="l-layout">
		<div class="first-safety_inner">
			<h2 class="first-safety_head"><i class="fa fa-smile-o" aria-hidden="true">&#8203;</i><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/first/safety-head.png" class="fitimg-h" alt="スマイル保証"></span></h2>
			<div class="first-safety_body">
				<p class="first-safety_txt">施術の内容に自信を持っております。<br class="rwd-hidden-sp">施術内容にご満足いただけない場合は、施術のやり直し、<br class="rwd-hidden-sp">または施術代金を全額お返ししいたします。</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
