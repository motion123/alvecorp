<?php
/**
 * Created by IntelliJ IDEA.
 * User: tomino
 * Date: 18/04/26
 * Time: 14:29
 */

add_theme_support( 'menus' );
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );

function register_script(){ //読み込むJSを登録する
wp_register_script('scrollEvent', get_template_directory_uri().'/src/js/scrollevent.js');
wp_register_script('scrollMonitor', get_template_directory_uri().'/src/js/scrollMonitor.js');
}

function add_scripts() {
    register_script();
    wp_enqueue_script('scrollMonitor', '', array(), false, true);
    wp_enqueue_script('scrollEvent', '', array("scrollMonitor"), false, true);
}
add_action( 'wp_print_scripts', 'add_scripts' );

// カスタム投稿タイプの追加

add_action( 'init', 'create_post_type' );
function create_post_type() {
    $exampleSupports = [
        'title',
        'editor',
        'revisions'
    ];

    // add post type
    register_post_type( 'news',
        array(
            'label' => '新着情報',
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => $exampleSupports
        )
    );

}

?>