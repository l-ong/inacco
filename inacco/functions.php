<?php

add_action('admin_menu', 'mytheme_add_box');

//カスタム投稿
function add_custom() {
    register_post_type('news', array(
        'label' => '最新情報',
        'menu_position' => 4,
        'public' => true,
        'supports' => array(
            'title', 
            'editor',
            'thumbnail'),
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'news', 
            'with_front' => false)
    )); 
}
add_action('init', 'add_custom');


//サムネイル設定
  add_theme_support( 'post-thumbnails');
  add_image_size('slide-image',976,600,true);
  add_image_size('home-post-wide',470,317,true);
  add_image_size('home-post-tall',227,317,true);
  add_image_size('home-post-box',244,258,true);
  add_image_size('index-box',244,160,true);
  //add_image_size('blog-image',614,337,true);
  add_image_size('blog_thumbnail', 250, 160,true );
  set_post_thumbnail_size(150,150,true);


if ( function_exists('register_sidebar') ) {
        register_sidebar(array(
                'name'=>'Sidebar',
        'before_widget' => '<div class="side_box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="side_title">',
        'after_title' => '</h3>',
    ));
        
}

register_sidebar(array(
        'name'=>'mai_ncontents',
'before_widget' => '<div class="side_box">',
'after_widget' => '</div>',
'before_title' => '<h3 class="side_title">',
'after_title' => '</h3>',
));



//投稿時にアイキャッチを設定する
add_action('publish_post', 'my_post_thumbnail_url');
function my_post_thumbnail_url($post_id){
    //カスタムフィールドに設定してあるアイキャッチURL取得
    $first_img = get_post_meta($post_id, 'thumbnail_url', true);
    set_my_post_thumbnail_url($post_id, $first_img);
}
 
//記事の最初の画像をアイキャッチに指定
function set_my_post_thumbnail_url($post_id, $first_img){
    //カスタムフィールドが空、またはpicasa以外だったら下記の処理
    if(empty($first_img) || (strpos($first_img, '1010uzu.com') || strpos($first_img, 'mzstatic.com')) !== false){
        $post = get_post($post_id);
        ob_start();
        ob_end_clean();
        preg_match_all('/<img.+?src=[\'"]([^\'"]+)?[\'"].*?>/i', $post->post_content, $matches);
        foreach( $matches [1] as $value ){
            if( preg_match("/(lh\d\.ggpht\.com)|(lh\d\.googleusercontent\.com)|(1010uzu\.com)|(a\d\.mzstatic\.com)/", $value) ){
                $first_img = $value;
                break; 
            }
        }
     
        //カスタムフィールドにアイキャッチURLを追加
        if((strpos($first_img, 'ggpht') || strpos($first_img, 'googleusercontent')) !== false){
            $first_img = preg_replace('/\/(w|s|h)(\d+)\//', '/s160-c/', $first_img);
        }
        //アイキャッチが設定されていないときは追加、それ以外は更新。
        if(!empty($first_img)){
            if ( !add_post_meta($post->ID, 'thumbnail_url', $first_img, true) ) update_post_meta($post->ID, 'thumbnail_url', $first_img);
        }
    }
    return $first_img;
}
 
//記事の最初の画像をサムネイルで表示（picasaの画像）
function my_post_thumbnail() {
    if( null === $post_id ){
        $post_id = get_the_ID();
    }
     
    //カスタムフィールドに設定してあるアイキャッチURL取得
    $first_img = get_post_meta($post_id, 'thumbnail_url', true);
    //カスタムフィールドが空だったらアイキャッチをセット（通常はコメントアウト）
    //$first_img = set_my_post_thumbnail_url($post->ID, $first_img);
 
    //デフォルトイメージ設定
    if(empty($first_img)){
        return "";
        $first_img = "http://l-ong.sakura.ne.jp/inacco.com/wp-content/uploads/chittop-02-150x150.png";
        //カテゴリー別デフォルトイメージ設定
        /*
        if ( in_category('suidou') || in_category('%e3%81%a9%e3%81%86%e3%81%a7%e3%81%97%e3%82%87%e3%81%86%e3%83%aa%e3%82%bf%e3%83%bc%e3%83%b3%e3%82%ba') || in_category('jungle-revenge') || in_category('new-work') || in_category('classic')) {
            $first_img = "https://lh5.ggpht.com/-PrYnn5YW2Do/UAxF7nGyPaI/AAAAAAABJsA/m3b7JGK9qk8/s160-c/suidou.jpg";

      
        } elseif ( in_category('mac') ) {
            $first_img = "https://lh3.ggpht.com/-g5oMqYaGk-E/UAxF7kTEpbI/AAAAAAABJr0/LNDRDczmyOM/s160-c/mac.jpg";
        } elseif ( in_category('antenna-dtb') ) {
            $first_img = "https://lh3.ggpht.com/-D4-xrb5rOhY/UAxF6awBhuI/AAAAAAABJrg/4gnxv9Nl_VU/s160-c/antenna-dtb.jpg";
        }*/
    }
    echo '<img width="150" height="150" src="' . $first_img . '" class="attachment-thumbnail" alt="thumbnail" />';
}


// サムネイル画像を利用
//add_theme_support( 'post-thumbnails', array( 'news' ) );


// EX POST CUSTOM FIELD END
?>