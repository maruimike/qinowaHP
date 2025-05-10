<?php
add_filter('theme_breadcrumbs', function ($breadcrumbs) {
    return array(
        'サロン体験レポート' => '',
    );
});
add_filter('theme_pagetitle', function ($pagetitle) {
    return array(
        'sp' => get_stylesheet_directory_uri().'/images/report/page-title-sp.jpg',
        'pc' => get_stylesheet_directory_uri().'/images/report/page-title-pc.jpg',
        'alt' => '体験レポート│鍼灸マッサージサロン Qiroom×Qinowa',
    );
});
get_header(); ?>

<div class="report-lead">
    <div class="l-layout">
        <div class="report-lead_inner">
            <div class="report-lead_body">
                <p class="report-lead_lead"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/lead-head-sp.png" data-pc-src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/lead-head-pc.png" class="fitimg" alt="はじめての方限定コースをサロンで体験"></p>
                <div class="report-lead_txts">
                    <p class="report-lead_txt">今回、Oさんにモニターとしてご来店<br class="rwd-hidden-sp">いただき、「初回限定鍼灸アロマコース」を体験していただきました。</p>
                    <p class="report-lead_txt">はじめて施術を受けられた体験レポートをご紹介いたします。</p>
                </div>
            </div>
            <div class="report-lead_media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/monitor-img.png" class="fitimg" alt="">
                <div class="report-lead_detail">
                    <dl>
                        <dt>年齢</dt>
                        <dd>40代</dd>
                    </dl>
                    <dl>
                        <dt>職業</dt>
                        <dd>会社員</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="report-details">
    <div class="l-layout">
        <div class="report-details_inner">
            <div class="report-details_body">
                <section class="report-detail">
                    <div class="report-detail_inner">
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img01.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <h2 class="report-detail_head">1. 店舗ご来店</h2>
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">お店に入るとスタッフさんが出迎えてくれました。緑がたくさんあってとてもキレイなサロンです。</p>
                                    <p class="report-detail_txt">はじめてのエステで緊張しましたが、女性の方が笑顔で出迎えてくれて安心しました。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="report-detail">
                    <div class="report-detail_inner">
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img02.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <h2 class="report-detail_head">2. カウンセリング</h2>
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">案内されたロビーでソファに座り、カウンセリングシートを記入しました。</p>
                                    <p class="report-detail_txt">スタッフさんは、現状で気になっていることなどを親身になって聞いてくださいました。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="report-detail">
                    <div class="report-detail_inner">
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img03.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <h2 class="report-detail_head">3. 専用のショーツに着替えます</h2>
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">施術のお部屋に通されると、スタッフさんがお部屋から出ている間に服を脱いで、用意されていたショーツに着替えます。<br class="rwd-hidden-sp">少し緊張しましたが、一人なので大丈夫でした。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="report-detail">
                    <div class="report-detail_inner">
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img04-1.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <h2 class="report-detail_head">4. いよいよ施術開始！</h2>
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">準備ができたらスタッフさんが来て、いよいよ施術スタートです。今回は「初回限定鍼灸アロマコース」なので、針とオイルトリートメントが一緒になったコースを体験しました。まずは鍼から施術してもらいます。</p>
                                    <p class="report-detail_txt">はじめての体験で緊張していましたが、スタッフさんの対応がよく、落ち着いて施術を受けることができました。</p>
                                </div>
                            </div>
                        </div>
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img04-2.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">鍼の次はオイルトリートメントです。<br class="rwd-hidden-sp">リラックスした雰囲気の中で施術してもらえるので、気持ちよくて眠ってしまいそうでした。</p>
                                </div>
                            </div>
                        </div>
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img04-3.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">うつ伏せの次は仰向けになって施術を受けます。<br class="rwd-hidden-sp">おなかに乗せたお灸は、思ったよりも熱くありませんでした。</p>
                                </div>
                            </div>
                        </div>
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img04-4.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">施術中は、いろいろなお話を聞きながら、相談することができました。</p>
                                </div>
                            </div>
                        </div>
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img04-5.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">体が冷えないように、タオルをかけて施術してもらえる気遣いがうれしかったです。<br class="rwd-hidden-sp">上半身は裸でしたが、「腕だけ」「足だけ」「お腹だけ」と部分的な露出で済んだので、そんなに気になりませんでした。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="report-detail">
                    <div class="report-detail_inner">
                        <div class="report-detail_layout">
                            <div class="report-detail_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/img05.jpg" class="fitimg" alt=""></div>
                            <div class="report-detail_body">
                                <h2 class="report-detail_head">5. 施術終了 メイク直し</h2>
                                <div class="report-detail_txts">
                                    <p class="report-detail_txt">施術後は着替えて、おいしいお茶をいただきながら、今日の感想などをお話しさせていただきました。</p>
                                    <p class="report-detail_txt">今回は、モニターということでカメラマンさんもいたので緊張しましたが、スタッフさんの親身な対応と上質な空間のおかげで、リラックスすることができました。</p>
                                    <p class="report-detail_txt">また、あらためてお邪魔したいです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<section class="report-comment">
    <div class="l-layout">
        <div class="report-comment_inner">
            <div class="report-comment_media"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/staff-img.png" class="fitimg" alt=""></div>
            <div class="report-comment_body">
                <header class="report-comment_head">
                    <h2 class="report-comment_headTxt"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/report/comment-head.png" class="fitimg-h" alt=""></h2>
                </header>
                <div class="report-comment_txts">
                    <p class="report-comment_txt">この度はモニターにご協力いただき、ありがとうございました。</p>
                    <p class="report-comment_txt">エステがはじめてということでしたので、緊張をやわらげるような対応を<br class="rwd-hidden-sp">心がけました。</p>
                    <p class="report-comment_txt">またのご来店お待ちしております。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
