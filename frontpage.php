<?php
/* Template Name: Frontpage
*/
get_header();?>

         <main class="main">
<?php get_template_part('template/slider'); ?>
<?php get_template_part('template/product'); ?>
<?php get_template_part('template/banners'); ?>
<section class='section'>

               <div class='container'>
	               <?php if( have_rows('options') ): ?>
	               <?php while( have_rows('options') ): the_row();
	               $title = get_sub_field('title');
	               $text = get_sub_field('text', false, false);
	               ?>
                  <div class='row justify-content-center'>

                     <div class='col-lg-6'>

                        <h2 class='section-title section-title__centered'><?php echo $title;?></h2>
	                     <?php if( have_rows('small_text') ): ?>
	                     <?php while( have_rows('small_text') ): the_row();
	                     $text = get_sub_field('text');
	                     ?>
                            <p class='section-small_text'><?php echo $text;?></p>
		                 <?php endwhile; ?>
	                     <?php endif; ?>
                     </div>

                  </div>

                  <div class='row justify-content-center'>

                     <div class='col-xl-10'>

                        <div class='faq-list'>
	                        <?php if( have_rows('faq') ): ?>
	                        <?php while( have_rows('faq') ): the_row();
	                        $title = get_sub_field('title');
	                        ?>
                           <div class='faq'>

                              <div class='faq__number'><?php echo sprintf("%02d.", get_row_index()) ; ?></div>

                              <div class='faq__description'>

                                 <h2 class='faq__title'><?php echo $title;?></h2>

                                 <div class='faq__text'>
	                                 <?php if( have_rows('paragraph') ): ?>
	                                 <?php while( have_rows('paragraph') ): the_row();
	                                 $text = get_sub_field('text');
	                                 ?>
                                    <p class='faq__paragraph'><?php echo $text;?></p>
		                                 <?php endwhile; ?>
	                                 <?php endif; ?>
                                 </div>

                              </div>

                              <div class='faq__angle'>

                                 <svg class='btn__icon icon-arrow'>

                                    <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                                 </svg>

                              </div>

                           </div>
		                        <?php endwhile; ?>
	                        <?php endif; ?>
                        </div>

                     </div>

                  </div>
		               <?php endwhile; ?>
	               <?php endif; ?>
               </div>

            </section>
<?php get_template_part('template/latest-post'); ?>
         </main>
<?php get_footer();?>
