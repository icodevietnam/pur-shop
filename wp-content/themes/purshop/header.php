<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage PurShop
 * @since Pur Shop
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDNhQodvMWGRaXcSs5blVgRyoJCsvV_W74&callback=General.addDom" async defer></script>
</head>

<body>
<div class="header container">
    <div class="header-language right">
      <p class="center">
        English
        <i class="fa fa-sort-desc" aria-hidden="true"></i>
      </p>
    </div>
    <div class="login right">
      <p class="center">
        <i class="fa fa-user" aria-hidden="true"></i> Login
      </p>
    </div>
    <a href="<?= SITEURL ?>">
        <img src="<?= Url::imagePath() ?>/logo.png" />
    </a>
    <ul class="list-language right">
        <li><a href="/lang/en">English</a></li> 
        <li><a href="/lang/vi">Vi</a></li> 
    </ul>
</div>
<div class="container">
    <nav class="pur">
  <ul class="primary">
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="">Product</a>
      <ul class="sub">
        <li><a href="">Tabby</a></li>
        <li><a href="">Black Cat</a></li>
        <li><a href="">Wrinkly Cat</a></li>
      </ul>
    </li>
    <li>
      <a href="">Gallery</a>
      <ul class="sub">
        <li><a href="">Humming Bird</a></li>
        <li><a href="">Hawk</a></li>
        <li><a href="">Crow</a></li>
      </ul>  
    </li>
    <li>
      <a href="">News</a>
      <ul class="sub">
        <li><a href="">Brown Horse</a></li>
        <li><a href="">Race Horse</a></li>
        <li><a href="">Tall Horse</a></li>
      </ul>  
    </li>
    <li>
      <a href="">Contact Us</a>
      <ul class="sub">
        <li><a href="">Cheesy</a></li>
        <li><a href="">More Ketchup</a></li>
        <li><a href="">Some Mustard</a></li>
        <li><a href="">Extra Butter</a></li>
      </ul>  
    </li>
    <li>
      <div class='search-input'>
        <span class="icon"><i class="fa fa-2x fa-search"></i></span>
        <input type="search" id="search" placeholder="Search..." />
      </div>
    </li>
  </ul>
</nav>
</div>