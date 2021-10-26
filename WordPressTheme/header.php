<?php
require_once( dirname(dirname( __FILE__ )) . '/wp-load.php' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner header__inner--pc">
      <a href="<?php echo home_url(''); ?>" class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo@4x.png" alt="ヘッダーロゴ">
      </a>
      <a href="https://lancerunit.jp/" class="header__btn">法人のお客様 ></a>
    </div>
    <div class="header__inner header__inner--sp">
      <a href="#top" class="header__spLogo">
        <img class="header__normalLogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/lancer-unit@2x.png" alt="ヘッダーロゴ">
        <img class="header__activeLogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white@2x.png" alt="ヘッダーロゴ">
      </a>
      <div class="openbtn"><span></span><span></span><span></span></div>
      <nav class="header__spNav">
        <ul class="header__navList">
          <li class="header__navItem">
            <a href="#" class="header__navLink">特徴</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">導入事例</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">料金</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">BLOG</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">会社概要</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">よくあるご質問</a>
          </li>
          <li class="header__navItem">
            <a href="#" class="header__navLink">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>