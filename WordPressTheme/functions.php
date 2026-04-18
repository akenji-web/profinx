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
    $main_js_deps = array('jquery');
    if (
        is_post_type_archive('cases') || is_tax('cases-category')
        || is_page('company')
    ) {
        wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '8');
        wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '8', true);
        $main_js_deps[] = 'swiper-js';
    }
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', $main_js_deps, '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');

    // トップページ：GSAP とファーストビュー文字アニメーション
    if (is_front_page()) {
        wp_enqueue_script(
            'gsap',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
            array(),
            '3.12.5',
            true
        );
        wp_enqueue_script(
            'mv-text-js',
            get_template_directory_uri() . '/assets/js/mv-text.js',
            array('gsap'),
            '1.0.1',
            true
        );
    }
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

// 実績紹介の表示件数を指定
function custom_posts_per_page_cases($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('cases')) {
            // 表示件数を指定
            $query->set('posts_per_page', 6);
        } elseif (is_tax('cases-category')) {
            $query->set('posts_per_page', 6);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page_cases');

// インサイトの表示件数を指定
function custom_posts_per_page_insight($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('insight')) {
            // 表示件数を指定
            $query->set('posts_per_page', 9);
        } elseif (is_tax('insight-category')) {
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page_insight');

// メンバー紹介の表示件数を指定
function custom_posts_per_page_member($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('member')) {
            // 表示件数を指定
            $query->set('posts_per_page', 9);
        } elseif (is_tax('member-category')) {
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page_member');

// function create_case_post_type() {
//     register_post_type('cases', array(
//         'label' => '実績紹介',
//         'public' => true,
//         'show_in_rest' => true,
//         'has_archive' => true,
//         'supports' => array('title', 'editor', 'thumbnail'),
//         'template' => array(
//             array('core/heading', array(
//                 'level' => 3,
//                 'content' => '業種'
//             )),
//             array('core/paragraph', array(
//                 'placeholder' => '業種を入力してください'
//             )),
//             array('core/heading', array(
//                 'level' => 3,
//                 'content' => '上場区分'
//             )),
//             array('core/paragraph', array(
//                 'placeholder' => '上場区分を入力してください'
//             )),
//             array('core/heading', array(
//                 'level' => 3,
//                 'content' => '売上規模'
//             )),
//             array('core/paragraph', array(
//                 'placeholder' => '売上規模を入力してください'
//             )),
//             array('core/heading', array(
//                 'level' => 3,
//                 'content' => '支援内容'
//             )),
//             array('core/paragraph', array(
//                 'placeholder' => '支援内容を入力してください'
//             )),
//         ),
//         'template_lock' => 'insert',
//     ));
// }
// add_action('init', 'create_case_post_type');