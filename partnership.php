<?php
/* Template Name: Partnership
*/
get_header(); ?>
         <main class="main">
		<div class="container">
            <h1 class='page-title'><?php echo get_the_title();?></h1>

            <div class='row'>

                <section class='blog-item'>

                    <div class='container'>

                        <div class='row justify-content-center'><div class='row justify-content-center blog-item-content'>

                                <div class='col-lg-8'>



                                    <?php the_content();?>

                                </div></div></div></div></section></div>
        </div>
         </main>

<?php get_footer(); ?>
