<?php

/**
 * WordPressデフォルトのjQueryを無効化する
 */
function oc_load_script(){
	if (!is_admin()){
        wp_deregister_script('jquery'); 
	}
}
add_action('init', 'oc_load_script');


/**
 * アイキャッチ画像を有効化.
 */
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/*
 * 画像サイズを指定
 */
if (function_exists('add_image_size')) {
    //add_image_size( 'column-photo'        , 800, 480, true );
}

/**
 * 抜粋の指定.
*/
function oc_excerpt_length($length)
{
    return 75;
}
add_filter('excerpt_length', 'oc_excerpt_length', 999);
function oc_excerpt_more($more)
{
    return '･･･';
}
add_filter('excerpt_more', 'oc_excerpt_more', 999);

function oc_pre_get_post($query)
{
    if (!is_admin() && $query->is_main_query()) {

        if ($query->is_search()) {
            $query->set('post_type', array('post'));
        }
    }
}
add_action('pre_get_posts', 'oc_pre_get_post');

function oc_change_post_object_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'Qinowaコラム';
    $submenu['edit.php'][5][0] = 'Qinowaコラム一覧';
    $submenu['edit.php'][10][0] = '新しいQinowaコラム';
}

function oc_change_post_menu_label()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Qinowaコラム';
    $labels->singular_name = 'Qinowaコラム';
    $labels->add_new = _x('追加', 'Qinowaコラム');
    $labels->add_new_item = 'Qinowaコラムの新規追加';
    $labels->edit_item = 'Qinowaコラムの編集';
    $labels->new_item = '新規Qinowaコラム';
    $labels->view_item = 'Qinowaコラムを表示';
    $labels->search_items = 'Qinowaコラムを検索';
    $labels->not_found = '記事が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
    $labels->items_list = 'Qinowaコラム一覧'; // 投稿リスト
    $labels->menu_name = 'Qinowaコラム'; // 投稿
    $labels->name_admin_bar = 'Qinowaコラム'; // 投稿
    return $labels;
}
add_action('init', 'oc_change_post_object_label');
add_action('admin_menu', 'oc_change_post_menu_label');

function oc_body_class($addition_class="")
{
    $classes = array();
    if(is_front_page()) {
        $classes[] = 'page-index';
    }
    if(!empty($addition_class) ) {
        $classes[] = $addition_class;
    }

    echo implode( " ", $classes );
}

/**
 * テンプレートで使用するタグを定義.
 */
require get_parent_theme_file_path('/inc/template-functions.php');
