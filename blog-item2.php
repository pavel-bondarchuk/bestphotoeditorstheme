<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>
	<meta charset="utf-8" />
	<title>Creative Logo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no">
<!--	<meta name="viewport" content="viewport-fit=cover" />-->

	<!-- build:css css/style.min.css -->
	<link href="https://fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.css" />
	<link rel="stylesheet" href="css/style.css" />

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">

<!--	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">-->

<!--	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">-->

<!--	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">-->

	<link rel="shortcut icon" href="img/favicon/favicon.ico" />
	<link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="img/favicon/favicon.ico">
	<link rel="icon" sizes="192x192" href="img/favicon/favicon-192.png">
<!--	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/favicon/favicon-180.png">-->
	<meta name="msapplication-TileColor" content="#FFFFFF">
<!--	<meta name="msapplication-TileImage" content="img/favicon/favicon-144.png">-->
	<meta name="theme-color" content="#fff">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- endbuild -->
	<!--
		Mobile define colors for elements of the browser
		<meta name="theme-color" content="HEX_COLOR">
		<meta name="msapplication-navbutton-color" content="HEX_COLOR">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="HEX_COLOR">
		-->
	<!--
		<link rel="shortcut icon" href="favicon.ico"/>
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="">
		<meta name="robots" content="index,follow">
		<meta name="copyright" content="">
		-->
	<style type="text/css" media="screen">
		select.choice-language {
			display: none;
		}
	</style>
</head>


<body>
<div class="wrapper">
  <link rel="stylesheet" href="../scss/components/header.scss">
<header class="header">
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-lg-12 header__inner">

        <a href="index.html" class="header__logo">
          <img src="img/logo.svg" alt="logo site">
        </a>

        <nav class="navigation">
          <div class="navigation__inner">

            <ul class="menu">

              <li class="menu__item">
                <a class="menu__link nav-link" href="index.html">HOME</a>
              </li>
              <li class="menu__item">
                <a class="menu__link nav-link" href="products.html">PRODUCTS</a>
              </li>
              <li class="menu__item">
                <a class="menu__link nav-link" href="benefits.html">BENEFITS</a>
              </li>
              <li class="menu__item">
                <a class="menu__link nav-link" href="blog.html">BLOG</a>
              </li>
              <li class="menu__item">
                <a class="menu__link nav-link" href="contacts.html">CONTACT US</a>

              </li>
            </ul>
            <ul class="mobile-language-select">
              <li><a class="default language-select__link"><img class="language-select__icon" src="img/flags/en.svg" alt="">en</a></li>
              <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/de.svg" alt="">de</a></li>
              <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/fr.svg" alt="">fr</a></li>
              <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/es.svg" alt="">es</a></li>
            </ul>
          </div>

        </nav>
        <div class="language-select">
          <div class="language-select__current-wrap">
            <button>
              <span class="language-select__current"><img class="language-select__icon" src="img/flags/en.svg" alt="">en</span>
            </button>
            <svg class="language-select__arrow icon-arrow">
            <use xlink:href="img/sprite.svg#icon-arrow"></use>
          </svg>
          </div>
          <ul class="language-select__list">
            <li><a class="default language-select__link"><img class="language-select__icon" src="img/flags/en.svg" alt="">en</a></li>
            <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/de.svg" alt="">de</a></li>
            <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/fr.svg" alt="">fr</a></li>
            <li><a class="language-select__link"><img class="language-select__icon" src="img/flags/es.svg" alt="">es</a></li>
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


  <main class="main">
    <section class="blog-item">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 blog-item__top-blog">
            <div class="blog-item__top-text"><span>BLOG</span> | <span>CATEGORY NAME</span></div>
            <div class="title blog-item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="blog-item__info">
              <div class="blog-item__date">oct. 01, 2020
              </div>
              <div class="rating">
                <div class="rating__value">9.4</div>
                <span class="rating__star js-rating" data-rating="3.5"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center blog-item-content">
          <div class="col-lg-8">
            <div class="blog-item__banner">
              <img src="img/blog-item-banner.jpg" alt="">
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere euismod elit, id semper magna porta non. Etiam vel tortor et nunc iaculis suscipit. Mauris a elit at arcu lacinia finibus ac vel ligula. Vivamus fermentum aliquam neque, at mollis mauris malesuada id. Suspendisse
              porttitor, orci id facilisis consectetur, urna urna euismod sapien, in interdum sem dolor at mauris. In vel nisl malesuada, euismod felis at, dignissim nisi. Vivamus non massa sed odio tristique rutrum.</p>
            <p>Morbi sit amet sollicitudin risus, id eleifend massa. Donec molestie elit nec sagittis lacinia. Proin auctor tempus libero vitae viverra. Ut ullamcorper ipsum a libero commodo varius. Donec tempor ex eget justo gravida vulputate. Class aptent taciti sociosqu ad litora torquent per
              conubia nostra, per inceptos himenaeos. Maecenas consequat maximus cursus.</p>
            <p>Proin dignissim volutpat risus, ac euismod urna viverra ut. Nulla cursus non risus ac suscipit. Proin nunc purus, tincidunt ac metus euismod, cursus faucibus nisl. Proin nunc felis, dignissim sed lacus ut, volutpat interdum lacus. Vivamus a enim lacus. Proin in scelerisque neque.
              Praesent suscipit, ligula in sollicitudin ornare, dolor ipsum varius odio, vel ornare sapien nisi sit amet elit.</p>
            <div class="blog-item__banner">
              <img src="img/blog-item-banner-2.jpg" alt="">
            </div>
            <p>Morbi sit amet sollicitudin risus, id eleifend massa. Donec molestie elit nec sagittis lacinia. Proin auctor tempus libero vitae viverra. Ut ullamcorper ipsum a libero commodo varius. Donec tempor ex eget justo gravida vulputate. Class aptent taciti sociosqu ad litora torquent per
              conubia nostra, per inceptos himenaeos. Maecenas consequat maximus cursus.</p>
            <p>Proin dignissim volutpat risus, ac euismod urna viverra ut. Nulla cursus non risus ac suscipit. Proin nunc purus, tincidunt ac metus euismod, cursus faucibus nisl. Proin nunc felis, dignissim sed lacus ut, volutpat interdum lacus. Vivamus a enim lacus. Proin in scelerisque neque.
              Praesent suscipit, ligula in sollicitudin ornare, dolor ipsum varius odio, vel ornare sapien nisi sit amet elit.</p>
            <div class="social share share--mobile">
              <div class="share__top">
                <div class="share__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewbox="0 0 20 18">
                    <g>
                      <g>
                        <path fill="#7672ce" d="M20 8.994L11.688-.12v5.438H9.921C4.441 5.318 0 9.759 0 15.238v2.883l.785-.86a14.085 14.085 0 0 1 10.403-4.59h.5v5.437z"/>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="share__title">
                  Share
                </div>
              </div>
              <ul class="social__list">
                <li class="social__item"><a href="#" class="social__link  social__link-fb"><img src="img/icon-fb.svg" alt=""></a></li>
                <li class="social__item"><a href="#" class="social__link  social__link-instagram"><img src="img/icon-instagram.svg" alt=""></a></li>
                <li class="social__item"><a href="#" class="social__link  social__link-in"><img src="img/icon-in.svg" alt=""></a></li>
              </ul>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-12">
                <div class="blog-item-author">
                  <div class="blog-item-author__image-wrap">
                    <div class="blog-item-author__image">
                      <img src="img/temp/avatar-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="blog-item-author__info">
                    <div class="blog-item-author__name">
                      Brad Pitt
                    </div>
                    <div class="blog-item-author__text">
                      Proin dignissim volutpat risus, ac euismod urna viverra ut. Nulla cursus non risus ac suscipit.
                    </div>
                  </div>
                </div>
                <div class="blog-item__link-wrap">
                  <a href="#" class="btn btn--grey bnt--lg">
                            <span class="btn__arrow">
                         <svg class="btn__icon icon-arrow">
                          <use xlink:href="img/sprite.svg#icon-arrow"></use>
                        </svg>
                      </span>
                    <span class="btn__text">BACK TO BLOG LIST</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="social share share--desktop">
            <div class="share__top">
              <div class="share__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewbox="0 0 20 18">
                  <g>
                    <g>
                      <path fill="#7672ce" d="M20 8.994L11.688-.12v5.438H9.921C4.441 5.318 0 9.759 0 15.238v2.883l.785-.86a14.085 14.085 0 0 1 10.403-4.59h.5v5.437z"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="share__title">
                Share
              </div>
            </div>
            <ul class="social__list">
              <li class="social__item"><a href="#" class="social__link  social__link-fb"><img src="img/icon-fb.svg" alt=""></a></li>
              <li class="social__item"><a href="#" class="social__link  social__link-instagram"><img src="img/icon-instagram.svg" alt=""></a></li>
              <li class="social__item"><a href="#" class="social__link  social__link-in"><img src="img/icon-in.svg" alt=""></a></li>
            </ul>
          </div>

        </div>


      </div>
    </section>
    <section class="recent-posts">
      <div class="container">
        <div class="recent-posts__inner">
          <h3 class="subtitle">
            Recent Posts
          </h3>
          <div class="js-cards swiper-container">
            <div class="recent-posts__list swiper-wrapper">
              <a href="#" class="recent-post swiper-slide">
                <div class="recent-post__info">
                  <div class="recent-post__title">
                    Lorem ipsum dolor sit amet
                  </div>
                  <div class="more more--sm">
                    <span class="more__text">READ MORE</span>
                    <span class="more__icon-wrap">
                  <svg class="more__icon icon-arrow">
                    <use xlink:href="img/sprite.svg#icon-arrow"></use>
                  </svg>
              </span>
                  </div>

                </div>
                <div class="recent-post__image-wrap">
                  <img src="img/temp/post-1.jpg" alt="">
                </div>
              </a>
              <a href="#" class="recent-post swiper-slide">
                <div class="recent-post__info">
                  <div class="recent-post__title">
                    Lorem ipsum dolor sit amet
                  </div>
                  <div class="more more--sm">
                    <span class="more__text">READ MORE</span>
                    <span class="more__icon-wrap">
                  <svg class="more__icon icon-arrow">
                    <use xlink:href="img/sprite.svg#icon-arrow"></use>
                  </svg>
              </span>
                  </div>

                </div>
                <div class="recent-post__image-wrap">
                  <img src="img/temp/post-2.jpg" alt="">
                </div>
              </a>
              <a href="#" class="recent-post swiper-slide">
                <div class="recent-post__info">
                  <div class="recent-post__title">
                    Lorem ipsum dolor sit amet
                  </div>
                  <div class="more more--sm">
                    <span class="more__text">READ MORE</span>
                    <span class="more__icon-wrap">
                  <svg class="more__icon icon-arrow">
                    <use xlink:href="img/sprite.svg#icon-arrow"></use>
                  </svg>
              </span>
                  </div>

                </div>
                <div class="recent-post__image-wrap">
                  <img src="img/temp/post-3.jpg" alt="">
                </div>
              </a>
              <a href="#" class="recent-post swiper-slide">
                <div class="recent-post__info">
                  <div class="recent-post__title">
                    Morbi posuere euismod elit, id semper magna porta non
                  </div>
                  <div class="more more--sm">
                    <span class="more__text">READ MORE</span>
                    <span class="more__icon-wrap">
                  <svg class="more__icon icon-arrow">
                    <use xlink:href="img/sprite.svg#icon-arrow"></use>
                  </svg>
              </span>
                  </div>

                </div>
                <div class="recent-post__image-wrap">
                  <img src="img/temp/post-1.jpg" alt="">
                </div>
              </a>
              <a href="#" class="recent-post swiper-slide">
                <div class="recent-post__info">
                  <div class="recent-post__title">
                    Lorem ipsum dolor sit amet
                  </div>
                  <div class="more more--sm">
                    <span class="more__text">READ MORE</span>
                    <span class="more__icon-wrap">
                  <svg class="more__icon icon-arrow">
                    <use xlink:href="img/sprite.svg#icon-arrow"></use>
                  </svg>
              </span>
                  </div>
                </div>
                <div class="recent-post__image-wrap">
                  <img src="img/temp/post-2.jpg" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
  <div class="container footer__inner">
    <div class="line line--left"></div>
    <div class="row footer__top">
      <div class="col-md-3 col-lg-2">
        <a href="" class="footer__logo"><img src="img/logo-sm.svg" alt="logo"></a>
        <div class="social social--mobile">
          <ul class="social__list">
            <li class="social__item"><a href="#" class="social__link  social__link-fb"><img src="img/icon-fb.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-twitter"><img src="img/icon-twitter.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-instagram"><img src="img/icon-instagram.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-youtube"><img src="img/icon-youtube.svg" alt=""></a></li>

          </ul>
        </div>
      </div>
      <div class="col-md-9 footer__categories">
        <div class="categories-list">
          <a href="#" class="category-link">Add Text to Collages</a>
          <a href="#" class="category-link">Art</a>
          <a href="#" class="category-link">Background Remover</a>
          <a href="#" class="category-link">Banner Maker</a>
          <a href="#" class="category-link">Batch Edit Photos</a>
          <a href="#" class="category-link">Blur Image</a>
          <a href="#" class="category-link">Brochure Maker</a>
          <a href="#" class="category-link">Business Card Templates</a>

          <a href="#" class="category-link">Card Maker</a>
          <a href="#" class="category-link">Collage Layouts</a>
          <a href="#" class="category-link">Collage Wizard</a>
          <a href="#" class="category-link">Crop Photo</a>
          <a href="#" class="category-link">Customizable Graphics</a>
          <a href="#" class="category-link">Design Elements</a>
          <a href="#" class="category-link">Digital Art</a>
          <a href="#" class="category-link">Etsy Banner Maker</a>

          <a href="#" class="category-link">Facebook Cover Photos</a>
          <a href="#" class="category-link">Flyer Maker</a>
          <a href="#" class="category-link">Infographic Maker</a>
          <a href="#" class="category-link">Invitation Maker</a>
          <a href="#" class="category-link">Lens Flares</a>
          <a href="#" class="category-link">Patterns</a>
          <a href="#" class="category-link">Photo Effects</a>
          <a href="#" class="category-link">Photo Enhancer</a>

          <a href="#" class="category-link">Photo Frames</a>
          <a href="#" class="category-link">Photo to Art</a>
          <a href="#" class="category-link">Photo To Cartoon</a>
          <a href="#" class="category-link">Pinterest Pin Maker</a>
          <a href="#" class="category-link">Postcard Maker</a>
          <a href="#" class="category-link">Poster Maker</a>
          <a href="#" class="category-link">Resize Image</a>
          <a href="#" class="category-link">Social Media Templates</a>

          <a href="#" class="category-link">Stock Images</a>
          <a href="#" class="category-link">Text Editor</a>
          <a href="#" class="category-link">Texture Background</a>
          <a href="#" class="category-link">Thank You Cards</a>
          <a href="#" class="category-link">Touch Up tools</a>
          <a href="#" class="category-link">Transparent Background</a>
          <a href="#" class="category-link">Watermarks</a>
          <a href="#" class="category-link">YouTube Channel</a>
        </div>
      </div>
      <div class="col-lg-1 d-lg-flex footer__column-social">
        <div class="social social--desktop">
          <ul class="social__list">
            <li class="social__item"><a href="#" class="social__link  social__link-fb"><img src="img/icon-fb.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-twitter"><img src="img/icon-twitter.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-instagram"><img src="img/icon-instagram.svg" alt=""></a></li>
            <li class="social__item"><a href="#" class="social__link  social__link-youtube"><img src="img/icon-youtube.svg" alt=""></a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      Developed by <span class="accent-text">Avengers.</span> © 2020. All rights reserved
    </div>
  </div>
</footer>

</div>
<!-- scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- build:js js/libs.min.js -->
<script src="js/libs.js"></script>
 <!-- endbuild -->
<script src="js/common.js"></script>

</body>

</html>
