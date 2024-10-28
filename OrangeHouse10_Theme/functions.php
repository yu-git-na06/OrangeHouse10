<?php
// 投稿画面でアイキャッチ画像を設定できるようにする
function custom_theme_setup()
{
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');
?>

<?php

// 実績紹介のカスタム投稿タイプを追加
function sample_custom_post_type(){
   register_post_type('works', // 投稿タイプ名
       array(   // オプション
           'label' => 'News', // ダッシュボードに表示される名前
           'public' => true, // 利用する場合はtrueにする
           'description' => 'お知らせを投稿するページです',  // 投稿タイプの説明文
           'show_in_rest' => false, // ブロックエディタを使用
           'has_archive' => true, // trueにするとアーカイブを有効にする
           'menu_position' => 5, // ダッシュボードに「実績紹介」が表示される位置
           'menu_icon' => 'dashicons-admin-multisite', // ダッシュボードで表示するアイコン
           'supports' => array( // 投稿画面で表示する項目
               'title',  // タイトルの追加
               'editor', // 本文の追加
               'thumbnail' //サムネイルの追加
           )
       )
   );
}
add_action('init', 'sample_custom_post_type');
?>
