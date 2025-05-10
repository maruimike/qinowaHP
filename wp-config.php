<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'qinowa2_wt1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'qinowa2_wt1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '7xhizjyvkd' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[X(ISF}]Ea]ap),Kq|4rjG? B592gM%s7sM+cQXpQf$i(GMqBaI?ukOOQdEI|>k8' );
define( 'SECURE_AUTH_KEY',   'Smo38L~mlvCMJ479E-AL7:j,te.tVTne{2hVesL,usf@zsjsCcKa>r@_{N~6.oBy' );
define( 'LOGGED_IN_KEY',     'nVzcEg_47#O4%G[(<9As8xDk[&R<jUJK:ca bbf~>-h2c=J#@yd-{#BL*!{1rF[.' );
define( 'NONCE_KEY',         '/*_5)Wkh 86D#3JbGxH?|:/~!!Y[qNr*>4M;Xv//^rRsK+WNFX)%Kxn[h15<mYE+' );
define( 'AUTH_SALT',         '5)8y(*<zy`S9Fd)c&P:x>DGgW.M`C#_*0|$) lXdC&2?^KH3kIIz%E*~@hh5w-Q~' );
define( 'SECURE_AUTH_SALT',  'VR#72Z?DUuGM8s+ 1+2$$f !ul&E@GTVC{fcJ;zN81U3#VtXHD?AJB|Ip}esgfeQ' );
define( 'LOGGED_IN_SALT',    'NfYe7tv/j>GJ+2^J9S{Z1-v<O&;G(18).3,rP@c$6g6_<ln(]G!q5[MmC/o0K9G7' );
define( 'NONCE_SALT',        'u?Th|?Ln+ba[)5GaojJXv| 6Cvbi&h0/7q FHL*a2nw=o_wS8w1[O{#g?{$oAk}2' );
define( 'WP_CACHE_KEY_SALT', 'B@&_I(eYepWr7l9p;o8;}iEaV,?AW1t*kd6TL&W#Lo}I:Nz~|ji9SHoTl0F Zk0d' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
