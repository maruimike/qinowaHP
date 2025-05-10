<?php if (!function_exists('get_option' ) ) die; ?>
<?php
	// パラメータ準備
	$slug = basename(dirname(__FILE__));
	$wp_upload_dir = wp_upload_dir();
	$upload_dir_path = $wp_upload_dir['basedir'].'/'.$slug.'/';

	// ディレクトリの削除（画像キャッシュ、スタイルシート）
	$result = remove_directory($upload_dir_path);

	// 設定の削除
	delete_option('Pz_LinkCard_options');

	// DBの削除
	global	$wpdb;
	$sql	=	"DROP TABLE ".$wpdb->prefix.'pz_linkcard';
	$wpdb->query($sql);

	// ディレクトリの削除
	function remove_directory($dir) {
		$files = array_diff(scandir($dir), array('.','..'));
		foreach ($files as $file) {
			if (is_dir($dir.'/'.$file)) {
				remove_directory($dir.'/'.$file);
			} else {
				unlink($dir.'/'.$file);
				echo 'delete "'.$dir.'/'.$file.'"<br>';
			}
		}
		echo 'rmdir "'.$dir.'"<br>';
		return rmdir($dir);
	}
