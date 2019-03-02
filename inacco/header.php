<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
   
    <!--JQUeryの入れ替え-->
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', array(), '1.9.0');
    ?>

    <?php wp_head(); ?>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/fastclick.js"></script>
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>-->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation-icons.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.equalizer.js"></script>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">

  <script>
    $(document).foundation();
  </script>

    <?php get_template_part('ogp');?>

  </head>
  <body <?php body_class(); ?>>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '100950546919253',
        xfbml      : true,
        version    : 'v2.3'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>


  <!--メニュー -->
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar" style="background:none;" >
      <section class="left-small btn">
        <a class="left-off-canvas-toggle menu-icon  button small" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <a href="<?php echo home_url('/'); ?>"><img style="width:70px" src="<?php echo get_template_directory_uri(); ?>/img/toptitlemark.png"></a>
      </section>

      <div class="right tab-bar-section">
      <a href="お問合せ/" style="height:45px" role="button" href="#" class="inquary button small"><i class="fi-mail"></i> お問い合わせ</a>
      </div>
    </nav>

    <aside class="left-off-canvas-menu">
      <?php wp_nav_menu( array(
        'theme_location'=>'', 
        'container' => '',
        'menu_class'      => 'off-canvas-list'
        ));
      ?>
    </aside>

    <section class="main-section">
<!--
      <div class="row">
        <div class="large-12 columns">
          <div class="nav-bar right">

           <ul class="button-group">
             <li><a href="#" class="button">Link 1</a></li>
             <li><a href="#" class="button">Link 2</a></li>
             <li><a href="#" class="button">Link 3</a></li>
             <li><a href="#" class="button">Link 4</a></li>
            </ul>            
          </div>
          <h1>イナコちっと</h1>
          <hr/>
        </div>
      </div>
      -->