<?php
/* Template Name: Сontact Us
*/
get_header(); ?>
         <main class="main">
		<div class="container">
            <h1 class='page-title'><?php echo get_the_title();?></h1>

            <div class='row'>

                <div class='offset-lg-3 col-lg-2'>

                    <div class='row contacts-list'>

                        <div class='col-md-4 col-lg-12'>

                            <div class='contact'>

                                <div class='contact__description'>
                                <?php if(get_field('email')):?>
                                    <h5 class='contact__title'>E-MAIL:</h5>

                                    <div class='contact__text'>

                                        <a class='contact__link' href='mailto:<?php echo get_field('email');?>'><?php echo get_field('email');?></a>

                                    </div>
                                    <?php endif;?>

                                </div>

                            </div>

                        </div>

                        <div class='col-md-4 col-lg-12'>

                            <div class='contact'>

                                <div class='contact__description'>
	                                <?php if(get_field('telephone')):?>
                                    <h5 class='contact__title'>TELEPHONE:</h5>

                                    <div class='contact__text'>

                                        <a class='contact__link' href='tel:<?php echo get_field('telephone');?>'><?php echo get_field('telephone');?></a>

                                    </div>
	                                <?php endif;?>
                                </div>

                            </div>

                        </div>

                        <div class='col-md-4 col-lg-12'>

                            <div class='contact'>

                                <div class='contact__description'>
	                                <?php if(get_field('address')):?>
                                    <h5 class='contact__title'>ADDRESS:</h5>

                                    <div class='contact__text'>

	                                    <?php echo get_field('address');?>

                                    </div>
	                                <?php endif;?>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class='social social--contacts social--horizontal'>
	                    <?php if(have_rows('social_links')):?>
                        <ul class='social__list'>
                        <?php while( have_rows('social_links') ) : the_row();
                        $link = get_sub_field('link');
                        $social = get_sub_field('social');
                        ?>
                            <li class='social__item'><a href='<?php echo $link;?>' class='social__link  social__link-<?php echo $social;?>'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-<?php echo $social;?>.svg' alt=''></a></li>
                        <?php endwhile;?>

                        </ul>
                        <?php endif;?>

                    </div>

                </div>

                <div class='col-lg-5 '>

                    <div class='form form--contact'>

                        <div class='form__inner'>

                            <div class='form__info'>

                                <div class='form__title'>Please, feel free to ask a question</div>

                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="91" title="Contact Us"]');?>

                        </div>

                    </div>

                </div>

            </div>
        </div>
         </main>
<?php get_footer(); ?>
