<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage BestPhotoEditors.net
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
   <head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
		<!--<link rel="stylesheet" href="/css/libs.css" />-->
		<!--<link rel="stylesheet" href="/css/style.css" />-->
		<!--<link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/img/favicon/favicon.ico" />
		<link rel="icon" type="/image/x-icon" sizes="16x16 32x32" href="img/favicon/favicon.ico">
		<link rel="icon" sizes="192x192" href="/img/favicon/favicon-192.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">-->
		<style type="text/css" media="screen">
		select.choice-language {
			display: none;
		}
		</style>
	<?php wp_head(); ?>
   </head>
<body <?php body_class(); ?>>
<div class="wrapper">
         <header class="header">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12 header__inner">
                     <div class="logov"><a href="/" class="header__logo"><span class="logo"><?php echo get_field('text_logo', 'option');?></span></a></div>

					 <?php
					 wp_nav_menu( [
	'theme_location'  => 'header',
	'menu'            => 'Header Menu',
	'container'       => 'nav',
	'container_class' => 'navigation',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
	'link_class'   => 'menu__link nav-link'
] );
?>
					 <!--<nav class="navigation">

                        <div class="navigation__inner">

                           <ul class="menu">

                              <li class="menu__item">

                                 <a class="menu__link nav-link" href="/about-us">About us</a>

                              </li>

                              <li class="menu__item">

                                 <a class="menu__link nav-link" href="/partnership">Partnership</a>

                              </li>

                              <li class="menu__item">

                                 <a class="menu__link nav-link" href="/blog">Blog</a>

                              </li>

                              <li class="menu__item">

                                 <a class="menu__link nav-link" href="/contacts">Contact us</a>

                              </li>

                           </ul>

                           <ul class="mobile-language-select">

                              <li><a class="default language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/en.svg" alt="">en</a></li>

                              <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/de.svg" alt="">de</a></li>

                              <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/fr.svg" alt="">fr</a></li>

                              <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/es.svg" alt="">es</a></li>

                           </ul>

                        </div>

                     </nav>-->

                     <div class="language-select">

                        <div class="language-select__current-wrap">

                           <button>

                           <span class="language-select__current"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/en.svg" alt="">en</span>

                           </button>

                           <svg class="language-select__arrow icon-arrow">

                              <use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>

                           </svg>

                        </div>

                        <ul class="language-select__list">

                           <li><a class="default language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/en.svg" alt="">en</a></li>

                           <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/de.svg" alt="">de</a></li>

                           <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/fr.svg" alt="">fr</a></li>

                           <li><a class="language-select__link"><img class="language-select__icon" src="/wp-content/themes/bestphotoeditorstheme/img/flags/es.svg" alt="">es</a></li>

                        </ul>
                     </div>
                     <button class="hamburger btn-toggle-menu" type="button"
                        aria-label="Menu" aria-controls="navigation">
                     <span class="hamburger-box">
                     <span class="hamburger-inner"></span>
                     </span>
                     </button>
                  </div>
               </div>
            </div>
         </header>
