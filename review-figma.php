<?php include "./config.php"; ?>
<?php include "./reviews/figma.php"; ?>
<?php echo $doctype; ?>
<html lang="<?php echo $langhtml; ?>" <?php echo $rtl; ?>>
   <head>
      <title><?php echo $title;?></title>
      <meta name="description" content="<?php echo $description; ?>">
      <link rel="canonical" href="<?php echo $url;?>">
<?php include "./template/head.php"; ?>
      <?php echo $hreflang; ?>
   </head>
   <body>
      <div class="wrapper">
         <header class="header">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12 header__inner">
                     <?php echo $logo; ?>
<?php include "./template/menu.php" ?>
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
	   <section>
<?php echo $content ?>
	   </section>
         </main>
		</div>
<?php include "./template/footer.php"; ?>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/libs.js"></script>
      <script src="js/common.js"></script>
   </body>
</html>