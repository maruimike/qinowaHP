<?php

function oc_head_title() {
    $title = get_the_title();
    if (is_post_type_archive('news')) {
        $title = 'キャンペーン＆お知らせ';
    } elseif (is_post_type_archive('menu')) {
        $title = 'メニュー＆料金';
    } elseif (is_post_type_archive('staff')) {
        $title = '施術家のご紹介';
    } elseif (is_post_type_archive('voice')) {
        $title = 'お客様の声';
    } elseif (is_archive() || is_search() || is_home() || is_category() || is_tag() || is_date() || is_year() || is_month() || is_day()) {
        $title = 'Qinowaコラム';
    } elseif (is_singular('staff') || is_singular('voice')) {
        $title = get_field('p_title');
    }
    $title = $title . "│鍼灸・オイルマッサージサロン 表参道Qinowa";

    $title = apply_filters('theme_head_title', $title);

    echo $title;
}

function oc_breadcrumb_title()
{
    add_filter('theme_breadcrumbs', function ($breadcrumbs) {
        if (is_post_type_archive('news')) {
            $breadcrumbs = array(
                'キャンペーンお知らせ' => '',
            );
        } elseif (is_singular('news')) {
            $breadcrumbs = array(
                'キャンペーンお知らせ' => get_post_type_archive_link('news'),
                get_the_title() => '',
            );
        } elseif (is_post_type_archive('menu')) {
            $breadcrumbs = array(
                'メニュー＆料金' => '',
            );
        } elseif (is_singular('menu')) {
            $breadcrumbs = array(
                'メニュー＆料金' => '/menu/',
                get_the_title() => '',
            );
        } elseif (is_post_type_archive('staff')) {
            $breadcrumbs = array(
                '施術家のご紹介' => '',
            );
        } elseif (is_singular('staff')) {
            $breadcrumbs = array(
                '施術家のご紹介' => get_post_type_archive_link('staff'),
                get_the_title() => '',
            );
        } elseif (is_post_type_archive('voice')) {
            $breadcrumbs = array(
                'お客様の声' => '',
            );
        } elseif (is_singular('voice')) {
            $breadcrumbs = array(
                'お客様の声' => get_post_type_archive_link('voice'),
                get_the_title() => '',
            );
        } elseif (is_archive() || is_search() || is_home() || is_category() || is_tag() || is_date() || is_year() || is_month() || is_day()) {
            $breadcrumbs = array(
                'Qinowaコラム' => '',
            );
        } elseif (is_singular('post')) {
            $breadcrumbs = array(
                'Qinowaコラム' => get_post_type_archive_link('post'),
                get_the_title() => '',
            );
        }

        return $breadcrumbs;
    });
    add_filter('theme_pagetitle', function ($pagetitle) {
        if (is_post_type_archive('news') || is_singular('news')) {
            $pagetitle = array(
                'sp' => get_stylesheet_directory_uri().'/images/news/page-title-sp.jpg',
                'pc' => get_stylesheet_directory_uri().'/images/news/page-title-pc.jpg',
                'alt' => 'キャンペーンお知らせ',
            );
        } elseif (is_post_type_archive('menu') || is_singular('menu')) {
            $pagetitle = array(
                'sp' => get_stylesheet_directory_uri().'/images/menu/page-title-sp.jpg',
                'pc' => get_stylesheet_directory_uri().'/images/menu/page-title-pc.jpg',
                'alt' => 'メニュー＆料金',
            );
        } elseif (is_post_type_archive('staff') || is_singular('staff')) {
            $pagetitle = array(
                'sp' => get_stylesheet_directory_uri().'/images/staff/page-title-sp.jpg',
                'pc' => get_stylesheet_directory_uri().'/images/staff/page-title-pc.jpg',
                'alt' => '施術家のご紹介',
            );
        } elseif (is_post_type_archive('voice') || is_singular('voice')) {
            $pagetitle = array(
                'sp' => get_stylesheet_directory_uri().'/images/voice/page-title-sp.jpg',
                'pc' => get_stylesheet_directory_uri().'/images/voice/page-title-pc.jpg',
                'alt' => 'お客様の声',
            );
        } elseif (is_post_type_archive('post') || is_singular('post') || is_archive()  || is_search() || is_home() || is_category() || is_tag() || is_date() || is_year() || is_month() || is_day()) {
            $pagetitle = array(
                'sp' => get_stylesheet_directory_uri().'/images/column/page-title-sp.jpg',
                'pc' => get_stylesheet_directory_uri().'/images/column/page-title-pc.jpg',
                'alt' => 'Qinowaコラム',
            );
        } 

        return $pagetitle;
    });
}

/**
 * SEO - KEYWORDS.
 */
function oc_get_seo_keywords()
{
    global $post;
    $title = trim(wp_title('', false));
    if (is_singular()) {
        $title = get_the_title($post);
    }
    $keywords = $title;

    // カスタムフィールドに保存されていればそちらを優先的に使用
    if (is_singular()) {
        $seo_keywords = get_post_meta($post->ID, 'seokeywords', true);
        if ($seo_keywords) {
            $keywords = esc_attr($seo_keywords);

            return $keywords;
        }
    }

    return $keywords;
}

/**
 * コラムを取得.
 */
function oc_get_posts($count = 5,$post_type = "post")
{
    $args = array(
        'posts_per_page' => $count,
        'post_type' => $post_type,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    return  get_posts($args);
}

/**
 * 記事の画像を取得.
 */
function oc_get_post_image_url($post_id, $size = 'medium')
{
    $image_id = oc_find_image_id($post_id);
    $image = array();

    if ($image_id) {
        return wp_get_attachment_url($image_id);
    } else {
        // return get_stylesheet_directory_uri() . "/images/column_default.jpg";
        return '';
    }
}

/**
 * 画像SRC取得.
 */
function oc_get_image_src($attachment_id, $size = 'medium')
{
    $image = wp_get_attachment_image_src($attachment_id, $size);
    if ($image) {
        return $image[0];
    }

    return false;
}
/**
 * 画像ID取得.
 */
function oc_find_image_id($post_id)
{
    $img_id = get_post_thumbnail_id($post_id);
    if (!$img_id) {
        $attachments = get_children(array(
            'post_parent' => $post_id,
            'post_type' => 'attachment',
            'numberposts' => 1,
            'post_mime_type' => 'image',
        ));
        if (is_array($attachments)) {
            foreach ($attachments as $a) {
                $img_id = $a->ID;
                break;
            }
        }
    }
    if ($img_id) {
        return $img_id;
    } else {
        return false;
    }
}
/**
 * 記事数を取得する.
 */
function oc_found_posts()
{
    $count = 0;

    if (is_tax(array('category', 'post_tag'))) {
        $term = get_queried_object();
        $count = $term->count;
    } else {
        global $wp_query;
        $count = $wp_query->found_posts;
    }

    return $count;
}

/**
 * ページリンクを表示.
 */
function oc_paginate_links()
{
	global $wp_query;

	$big = 999999999;
	
	$paginate = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text' => '<img src="' . get_stylesheet_directory_uri() . '/common_img/btn_prev.png" alt="PREV">',
		'next_text' => '<img src="' . get_stylesheet_directory_uri() . '/common_img/btn_next.png" alt="NEXT">',
		'type' => 'array',
		'show_all' => true
	) );
	
	if( !empty($paginate) ) {
		
		$pagination = "";
		foreach($paginate as $link) {
			$class = "";
			if( strpos($link,'class="next page-numbers"') !== false ) {
                $class = ' class="next"';
                continue;
			} elseif( strpos($link,'class="prev page-numbers"') !== false ) {
                $class = ' class="prev"';
                continue;
			}
			
			$pagination .= "<li{$class}>{$link}</li>" . PHP_EOL;
		}
		//$pagination = '<ul class="page_list">' . PHP_EOL . $pagination . PHP_EOL . '</ul>';
		
		echo $pagination;
	}
	
}

/**
 * カテゴリーのリストを取得.
 */
function oc_get_categories()
{
    $return_categories = array();

    $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => 0,
        'hierarchical' => 1,
        'taxonomy' => 'category',
    );

    $categories = get_categories($args);
    foreach ($categories as $category) {
        $return_categories[$category->name] = get_category_link($category->term_id);
    }

    return $return_categories;
}

/**
 * 長過ぎるタイトルを省略表示.
 */
function oc_title_substr($str, $lenght = 24)
{
    $title = mb_substr($str, 0, $lenght);
    if ($title != $str) {
        $title .= '…';
    }

    return $title;
}

/**
 * 人気記事を表示.
 */
function oc_custom_popular_posts_html_list($mostpopular, $instance)
{
    $output = '';
    foreach ($mostpopular as $popular) {
        $image_url = oc_get_post_image_url($popular->id);
        $output .= '<li>'.PHP_EOL;
        $output .= '	<a href="'.get_the_permalink($popular->id).'" class="clearfix">'.PHP_EOL;
        if (!empty($image_url)) {
            $output .= '		<p class="img img_frame"><img src="'.$image_url.'" alt=""></p>'.PHP_EOL;
        }

        $title = oc_title_substr($popular->title);

        $output .= '		<h3 class="title">'.esc_html($title).'</h3>'.PHP_EOL;
        $output .= '	</a>'.PHP_EOL;
        $output .= '</li>'.PHP_EOL;
    }

    return $output;
}
add_filter('wpp_custom_html', 'oc_custom_popular_posts_html_list', 10, 2);
