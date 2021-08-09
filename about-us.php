<?php
/* Template Name: About Us
*/
get_header(); ?>
<main class="main about-us">
    <section class='about-us-story'>
		<?php if ( have_rows( 'our_story' ) ): ?>
            <div class='container'>
				<?php while ( have_rows( 'our_story' ) ) : the_row();
					$company_name = get_sub_field( 'company_name' );
					$title        = get_sub_field( 'title' );
					$text         = get_sub_field( 'text' );
					?>
                    <div class='row '>

                        <div class='col-lg-6 about-us-story__info'>

                            <div class='small-title'><?php echo $company_name; ?></div>

                            <h2 class='title title--bordered'><?php echo $title; ?></h2>

                            <p class='text'><?php echo $text; ?></p>

							<?php if ( have_rows( 'button' ) ): ?>
                                <div class='btn-wrap'>
									<?php while ( have_rows( 'button' ) ) : the_row();
										$button_text = get_sub_field( 'button_text' );
										$button_link = get_sub_field( 'button_link' );
										?>
                                        <a href='<?php echo $button_link; ?>' class='btn btn--orange'>

                                            <span class='btn__text'><?php echo $button_text; ?></span>

                                            <span class='btn__arrow'>

                <svg class='btn__icon icon-arrow'>

                  <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                </svg>

              </span>

                                        </a>
									<?php endwhile; ?>
                                </div>
							<?php endif; ?>

                        </div>
						<?php if ( have_rows( 'card' ) ): ?>
                            <div class='col-lg-6'>

                                <div class='team'>

                                    <div class='row gutters-small team-list'>
										<?php while ( have_rows( 'card' ) ) : the_row();
											$photo    = get_sub_field( 'photo' );
											$name     = get_sub_field( 'name' );
											$position = get_sub_field( 'position' );
											$text     = get_sub_field( 'text' );
											?>

                                            <div class='col-auto col-md-6 team-card-wrap'>

                                                <div class='team-card'>

                                                    <div class='team-card__inner'>

                                                        <div class='team-card__image-wrap'>

                                                            <img src='<?php echo $photo; ?>' alt=''>

                                                        </div>

                                                        <div class='team-card__name'>

															<?php echo $name; ?>

                                                        </div>

                                                        <div class='team-card__position'>

															<?php echo $position; ?>

                                                        </div>

                                                        <div class='team-card__text'>

															<?php echo $text; ?>

                                                        </div>
														<?php if ( have_rows( 'social' ) ): ?>
                                                            <div class='social social--horizontal team-card__social'>

                                                                <ul class='social__list'>

																	<?php while ( have_rows( 'social' ) ) : the_row();
																		$link        = get_sub_field( 'link' );
																		$social_type = get_sub_field( 'social_type' );
																		?>
                                                                        <li class='social__item'><a
                                                                                    href='<?php echo $link; ?>'
                                                                                    class='social__link  social__link-<?php echo $social_type; ?>'><img
                                                                                        src='/wp-content/themes/bestphotoeditorstheme/img/icon-<?php echo $social_type; ?>.svg'
                                                                                        alt=''></a></li>

                                                                        <!--<li class='social__item'><a href='#' class='social__link  social__link-in'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-in.svg' alt=''></a></li>-->


																	<?php endwhile; ?>
                                                                </ul>

                                                            </div>
														<?php endif; ?>

                                                    </div>

                                                </div>

                                            </div>


										<?php endwhile; ?>

                                    </div>

                                </div>

                            </div>
						<?php endif; ?>

                    </div>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </section>
	<?php if ( have_rows( 'project_goals' ) ): ?>
        <section class='about-us-goals'>

            <div class='container '>

                <div class='row '>
					<?php while ( have_rows( 'project_goals' ) ) : the_row();
						$title    = get_sub_field( 'title' );
						$subtitle = get_sub_field( 'subtitle' );
						$text     = get_sub_field( 'text' );
						?>

                        <div class='col-lg-3'>

                            <div class='row  about-us-goals__description'>

                                <div class='col-md-6 col-lg-12'>

                                    <div class='small-title'><?php echo $title; ?></div>

                                    <h2 class='title title--bordered'><?php echo $subtitle; ?></h2>

                                </div>

                                <div class='col-md-6 col-lg-12'>

                                    <h4 class='section-subtitle'><?php echo $text; ?></h4></div>

                            </div>


                        </div>
						<?php if ( have_rows( 'goals' ) ): ?>

                            <div class='col-lg-9'>

                                <div class='goals-list'>

                                    <div class='row flex-nowrap flex-md-wrap   gutters-small'>
										<?php while ( have_rows( 'goals' ) ) : the_row();
											$image = get_sub_field( 'image' );
											$title = get_sub_field( 'title' );
											$text  = get_sub_field( 'text' );
											?>

                                            <div class='col-auto col-md-12 col-lg-4 goal-item-wrap'>

                                                <div class='goal-item'>

                                                    <div class='row goal-item__inner'>

                                                        <div class='col-md-auto col-lg-12'>

                                                            <div class='goal-item__icon-wrap'>

                                                                <img src='<?php echo $image; ?>' alt=''>

                                                            </div>

                                                        </div>

                                                        <div class='col-md-4 col-lg-12'>

                                                            <div class='goal-item__title'><?php echo $title; ?></div>

                                                        </div>

                                                        <div class='col-md-6 col-lg-12'>

                                                            <div class='goal-item__text'><?php echo $text; ?></div>

                                                        </div>


                                                    </div>

                                                </div>

                                            </div>

										<?php endwhile; ?>

                                    </div>

                                </div>

                            </div>
						<?php endif; ?>
					<?php endwhile; ?>

                </div>

            </div>

        </section>
	<?php endif; ?>

    <div class='section about-us-questions'>

        <div class='container'>

            <div class='row'>

                <div class='offset-lg-1 col-lg-2'>

                    <h2 class='title title--white title--bordered'>Still have

                        questions?</h2>


					<?php if ( have_rows( 'social' ) ): ?>
                        <div class='social social--horizontal'>

                            <ul class='social__list'>
								<?php while ( have_rows( 'social' ) ) : the_row();
									$social = get_sub_field( 'social' );
									$link   = get_sub_field( 'link' );
									?>
                                    <li class='social__item'><a href='<?php echo $link; ?>'
                                                                class='social__link  social__link-<?php echo $social; ?>'><img
                                                    src='/wp-content/themes/bestphotoeditorstheme/img/icon-<?php echo $social; ?>.svg'
                                                    alt=''></a></li>



								<?php endwhile; ?>

                            </ul>

                        </div>
					<?php endif; ?>

                </div>

                <div class='col-lg-7 '>

                    <div class='row'>

                        <div class='col-lg-12'>

                            <div class='form form--contact'>

                                <div class='row justify-content-center'>

                                    <div class='col-lg-10'>

                                        <div class='form__inner'>

                                            <div class='form__info'>

                                                <div class='form__title'>Please, feel free to ask a question</div>

                                            </div>
											<?php echo do_shortcode( '[contact-form-7 id="77" title="Still have questions?"]' ); ?>


                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>

</main>
<?php get_footer(); ?>
