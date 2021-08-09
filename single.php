<?php
$category = get_the_category();
$user_id = get_the_ID();
$post_url = get_permalink(get_the_ID());

$rating = get_field('rating');
$value = get_field('value');

get_header(); ?>
<main class="main">

    <section class='blog-item'>

        <div class='container'>

            <div class='row justify-content-center'>

                <div class='col-lg-6 blog-item__top-blog'>

                    <div class='blog-item__top-text'><span>BLOG</span> | <span><?php echo $category[0]->name;?></span></div>

                    <div class='title blog-item__title'><?php echo get_the_title();?></div>

                    <div class='blog-item__info'>

                        <div class='blog-item__date'><?php echo get_the_date('M. d, Y');?></div>
                        <?php if ( !empty($value) || !empty($rating) ):?>
                        <div class='rating'>

                            <div class='rating__value'><?php echo $value;?></div>

                            <span class='rating__star js-rating' data-rating='<?php echo $rating;?>'></span>

                        </div>
                        <?php endif;?>

                    </div>

                </div>

            </div>



            <div class='row justify-content-center blog-item-content'>

                <div class='col-lg-8'>

					<?php the_content();?>

                    <div class='social share share--mobile'>

                        <div class='share__top'>

                            <div class='share__icon'>

                                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='18' viewbox='0 0 20 18'>

                                    <g>

                                        <g>

                                            <path fill='#7672ce' d='M20 8.994L11.688-.12v5.438H9.921C4.441 5.318 0 9.759 0 15.238v2.883l.785-.86a14.085 14.085 0 0 1 10.403-4.59h.5v5.437z'/>

                                        </g>

                                    </g>

                                </svg>

                            </div>

                            <div class='share__title'>

                                Share

                            </div>

                        </div>

                        <ul class='social__list'>

                            <li class='social__item'><a href='#' class='social__link  social__link-fb'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-fb.svg' alt=''></a></li>

                            <li class='social__item'><a href='#' class='social__link  social__link-instagram'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-instagram.svg' alt=''></a></li>

                            <li class='social__item'><a href='#' class='social__link  social__link-in'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-in.svg' alt=''></a></li>

                        </ul>

                    </div>



                    <div class='row justify-content-center'>

                        <div class='col-md-6 col-lg-12'>

                            <div class='blog-item-author'>

                                <div class='blog-item-author__image-wrap'>

                                    <div class='blog-item-author__image'>
										<?php echo get_avatar( $user_id, 'bse-thumbnail-author', '', '', '' ); ?>


                                    </div>

                                </div>

                                <div class='blog-item-author__info'>

                                    <div class='blog-item-author__name'>

										<?php echo the_author_meta( 'user_nicename', $user_id  );?>

                                    </div>

                                    <div class='blog-item-author__text'>

										<?php echo the_author_meta( 'description', $user_id  ); ?>

                                    </div>

                                </div>

                            </div>

                            <div class='blog-item__link-wrap'>

                                <a href='/blog' class='btn btn--grey bnt--lg'>

                            <span class='btn__arrow'>

                         <svg class='btn__icon icon-arrow'>

                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                        </svg>

                      </span>

                                    <span class='btn__text'>BACK TO BLOG LIST</span>

                                </a>

                            </div>

                        </div>

                    </div>



                </div>

                <div class='social share share--desktop'>

                    <div class='share__top'>

                        <div class='share__icon'>

                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='18' viewbox='0 0 20 18'>

                                <g>

                                    <g>

                                        <path fill='#7672ce' d='M20 8.994L11.688-.12v5.438H9.921C4.441 5.318 0 9.759 0 15.238v2.883l.785-.86a14.085 14.085 0 0 1 10.403-4.59h.5v5.437z'/>

                                    </g>

                                </g>

                            </svg>

                        </div>

                        <div class='share__title'>

                            Share

                        </div>

                    </div>

                    <ul class='social__list'>

                        <li class='social__item'><a href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url;?>&t=<?php echo get_the_title();?>' target="_blank"  class='social__link  social__link-fb'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-fb.svg' alt=''></a></li>

                        <li class='social__item'><a href='#' class='social__link  social__link-instagram'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-instagram.svg' alt=''></a></li>

                        <li class='social__item'><a href='https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url;?>&title=<?php echo get_the_title();?>' target="_blank" class='social__link  social__link-in'><img src='/wp-content/themes/bestphotoeditorstheme/img/icon-in.svg' alt=''></a></li>

                    </ul>

                </div>



            </div>





        </div>

    </section>

    <section class='recent-posts'>

        <div class='container'>

            <div class='recent-posts__inner'>

                <h3 class='subtitle'>

                    Recent Posts

                </h3>

                <div class='js-cards swiper-container swiper-container-initialized swiper-container-horizontal' style='cursor: grab;'>

                    <div class='recent-posts__list swiper-wrapper' style='transform: translate3d(0px, 0px, 0px);'>
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 5,
							'orderby' => 'comment_count'
						);

						$query = new WP_Query( $args );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<a href="'.get_permalink().'" class="recent-post swiper-slide" style="width: 400px; margin-right: 20px;">';
								echo '<div class="recent-post__info">';
								echo '<div class="recent-post__title">' . get_the_title() . '</div>';
								echo '<div class="more more--sm">
                                             <span class="more__text">READ MORE</span>
                                             <span class="more__icon-wrap"><svg class="more__icon icon-arrow"><use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use></svg></span>
                                         </div>';
								echo '</div>';
								echo '<div class="recent-post__image-wrap">';
								echo get_the_post_thumbnail(get_the_ID(),'bse-thumbnail-related-posts');
                                echo '</div>';
								echo '</a>';
							}
						} else {
							// Постов не найдено
						}
						wp_reset_postdata();
						?>


                    </div>

                    <span class='swiper-notification' aria-live='assertive' aria-atomic='true'></span>

                </div>
            </div>

        </div>

    </section>
</main>
<?php get_footer(); ?>
