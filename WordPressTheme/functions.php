<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_style( 'NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap' );
    wp_enqueue_style( 'NotoSerifJP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap' );
    wp_enqueue_style( 'EB Garamond', '//fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap' );
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyD2k973PgMPSx2YatOfh-NjTi2Kph-b6pA';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// 管理画面の「投稿」の名称変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ニュース';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規'.$name.'を追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ニュース';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// お問い合わせの確認、完了画面のパンくずを削除する
function bcn_add($bcnObj) {
    if (is_page('confirm')) {
        // 確認画面のパンくずの中身を入れ替え
        $bcnObj->trail[0] = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[2];
        $bcnObj->trail[2] = null;
    } elseif (is_page('thanks')) {
        // 完了画面のパンくずの中身を入れ替え
        $bcnObj->trail[0] = clone $bcnObj->trail[2];
        $bcnObj->trail[1] = clone $bcnObj->trail[3];
        $bcnObj->trail[2] = null;
        $bcnObj->trail[3] = null;
    } else {
        return $bcnObj;
    }
}
add_action('bcn_after_fill', 'bcn_add');

// 実績紹介の表示件数を指定
function custom_posts_per_page_case_study($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('case-study')) {
            // 表示件数を指定
            $query->set('posts_per_page', 6);
        } elseif (is_tax('case-study-category')) {
            $query->set('posts_per_page', 6);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page_case_study');

// ブログの表示件数を指定
function custom_posts_per_page_blog($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('blog')) {
            // 表示件数を指定
            $query->set('posts_per_page', 9);
        } elseif (is_tax('blog-category')) {
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page_blog');

global $wp_rewrite;
$wp_rewrite->flush_rules();