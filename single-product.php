<?php
$category = get_the_category();
$user_id = get_the_ID();
$product_id = get_the_ID();
$post_url = get_permalink(get_the_ID());
/* fields */
$subtitle = get_field('subtitle');
$text = get_field('text');
$price = get_field('price');
$overview = get_field('overview');
$description = get_field('description');

$comment_number = get_comments_number( $product_id );
$average_ratings = comment_rating_get_average_ratings($product_id);
get_header(); ?>
<main class="main">
	<section>
		<section class='review'>

			<div class='container container--fluid-mobile'>

				<div class='review__head review-head'>

					<div class='row'>

						<div class='col-md-2 d-flex align-content-center justify-content-center'>

							<div class='review-head__logo'>

                                <img width="175" src="<?php echo  get_the_post_thumbnail_url($product_id, 'bse-thumbnail-review-post');?>">

							</div>

						</div>

						<div class='col-md-10'>

							<div class='review-head__info'>

								<div class='review-head__top-bar'>

									<div class='rating'>

										<div class='rating__value'><?php echo $average_ratings;?></div>

										<span class='rating__star js-rating' data-rating='<?php echo $average_ratings;?>'></span>
                                        <?php if($comment_number > 0):?>
										<a href='#' class='rating__link'><?php echo $comment_number;?> reviews</a>
                                        <?php endif;?>

									</div>

								</div>

								<div class='review__title-wrap'>

									<h1 class='review__title'>

										<?php echo get_the_title();?>

									</h1>
									<div class='price'>$<?php echo $price;?>Month</div>

								</div>

								<div class='specification-list'>
                                    <?php
                                    $terms = get_the_terms($product_id,'product_tag');
                                    if( is_array( $terms ) ){
	                                    foreach( $terms as $term ){
		                                    $color = get_field('color', $term);
		                                    echo '<div class="specification-item" style="background-color: '.$color.';">'.$term->name.'</div>';
	                                    }
                                    }
                                    ?>

								</div>

								<div class='review__text'><?php echo $overview;?></div>

								<div class='review__buttons buttons-horizontal'>
									<?php if( have_rows('button_visit_site', $product_id) ):
									while( have_rows('button_visit_site', $product_id) ) : the_row();
									$text = get_sub_field('text');
									$link = get_sub_field('link');
									?>
									<a href='<?php echo $link;?>' class='btn'>

										<span class='btn__text'><?php echo $text;?></span>

										<span class='btn__arrow'>

                         <svg class='btn__icon icon-arrow'>

                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                        </svg>

                      </span>

									</a>
									<?php endwhile; endif; ?>
									<?php if( have_rows('button_visit_site_orange', $product_id) ):
									while( have_rows('button_visit_site_orange', $product_id) ) : the_row();
									$text = get_sub_field('text');
									$link = get_sub_field('link');
									?>
									<a href='<?php echo $link;?>' class='btn btn--orange'>

										<span class='btn__text'><?php echo $text;?></span>

										<span class='btn__arrow'>

                         <svg class='btn__icon icon-arrow'>

                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                        </svg>

                      </span>

									</a>
									<?php endwhile; endif; ?>

								</div>

							</div>

						</div>

					</div>



				</div>



				<div class='review__body'>

					<div class='sidebar-wrap js-sidebar-sticky'>

						<div class=''>

							<nav class='js-sidebar sidebar sidebar--grey'>

								<div class='sidebar-head'>

									<div class='sidebar-head__top'>

										<div class='sidebar-head__logo'>

											<img src="<?php echo get_the_post_thumbnail_url($product_id, 'bse-thumbnail-related-post');?>">

										</div>

										<div class='sidebar-head__title'><?php echo get_the_title();?></div>

									</div>

									<div class='sidebar-head__bottom'>
                                    <?php if( have_rows('button_visit_site', $product_id) ):
                                    while( have_rows('button_visit_site', $product_id) ) : the_row();
                                    $text = get_sub_field('text');
                                    $link = get_sub_field('link');
                                    ?>
										<a href='<?php echo $link;?>' class='btn sidebar-head__btn sidebar-head__btn--top'>

											<span class='btn__text'><?php echo $text;?></span>

											<span class='btn__arrow'>
                                    <?php endwhile; endif; ?>
                         <svg class='btn__icon icon-arrow'>

                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                        </svg>

                      </span>

										</a>
										<?php if( have_rows('button_try_free_orange', $product_id) ):
										while( have_rows('button_try_free_orange', $product_id) ) : the_row();
										$text = get_sub_field('text');
										$link = get_sub_field('link');
										?>
										<a href='<?php echo $link;?>' class='btn sidebar-head__btn btn--orange'>

											<span class='btn__text'><?php echo $text;?></span>

											<span class='btn__arrow'>

                         <svg class='btn__icon icon-arrow'>

                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                        </svg>

                      </span>

										</a>
										<?php endwhile; endif; ?>

									</div>

								</div>



								<div class='sidebar-list-wrap'>

									<div class='sidebar-action-panel'>

										<button class='btn-toggle-category'>

											<span></span>

											<span></span>

											<span></span>

										</button>

									</div>

									<ul class='sidebar-list'>

										<li class='sidebar-item'>

											<a href='#section-description' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Description</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-requirements' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>System Requirements</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-features' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Features</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-ConsPros' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>ConS & Pros</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-review' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Our Reviews</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-video' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Video</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-services' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Additional Services</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

										<li class='sidebar-item'>

											<a href='#section-similar' class='sidebar-item__link anchor'>

												<span class='sidebar-item__title'>Similar Products</span>

												<svg class='sidebar-item__arrow'>

													<use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

												</svg>

											</a>

										</li>

                                        <li class='sidebar-item'>

                                            <a href='#section-customer-reviews' class='sidebar-item__link anchor'>

                                                <span class='sidebar-item__title'>Customer Reviews</span>

                                                <svg class='sidebar-item__arrow'>

                                                    <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>

                                                </svg>

                                            </a>

                                        </li>



									</ul>

								</div>

							</nav>

						</div>

					</div>

					<div class='review-content'>

						<div class='review-content-section' id='section-description'>

							<h2 class='title'><?php echo get_the_title();?> short description </h2>

							<?php echo $description;?>

						</div>

						<div class='review-content-section' id='section-requirements'>

							<h3 class='subtitle'>System Requirements</h3>
							<?php if( have_rows('system_requirements', $product_id) ): ?>
                            <?php while( have_rows('system_requirements', $product_id) ): the_row();
                            ?>
							<div class='review__tables'>

								<div class='table-wrap'>
									<?php if( have_rows('mac') ): ?>

									<div class='block-title'>Mac</div>

									<table class='table'>

										<thead>

										<tr>

											<th style='width: 40%;'></th>

											<th></th>

										</tr>

										</thead>

										<tbody>
										<?php while( have_rows('mac') ): the_row();
										$key = get_sub_field('key');
										$value = get_sub_field('value');
										?>
										<tr>

											<td><?php echo $key;?></td>

											<td><?php echo $value;?></td>

										</tr>

										<?php endwhile;?>
										</tbody>

									</table>
									<?php endif; ?>
								</div>

                                <div class='table-wrap'>
									<?php if( have_rows('windows') ): ?>

                                        <div class='block-title'>Windows</div>

                                        <table class='table'>

                                            <thead>

                                            <tr>

                                                <th style='width: 40%;'></th>

                                                <th></th>

                                            </tr>

                                            </thead>

                                            <tbody>
											<?php while( have_rows('windows') ): the_row();
												$key = get_sub_field('key');
												$value = get_sub_field('value');
												?>
                                                <tr>

                                                    <td><?php echo $key;?></td>

                                                    <td><?php echo $value;?></td>

                                                </tr>

											<?php endwhile;?>
                                            </tbody>

                                        </table>
									<?php endif; ?>
                                </div>

							</div>
							<?php endwhile; endif; ?>
						</div>

						<div class='review-content-section' id='section-features'>

							<h2 class='title'><?php echo get_the_title();?> Features</h2>

							<ul class='list'>
								<?php if( have_rows('features', $product_id) ): ?>
								<?php while( have_rows('features', $product_id) ): the_row();
								$value = get_sub_field('value');
								$check = get_sub_field('check');
								if(get_sub_field('check')){
								    $css_class = '';
                                } else {
									$css_class = 'item--remove';
                                }
								?>
								<li class='item <?php echo $css_class;?>'><?php echo $value;?></li>
                                <?php endwhile; ?>
								<?php endif; ?>
							</ul>

						</div>

						<div class='review-content-section' id='section-ConsPros'>



							<h2 class='title'><?php echo get_the_title();?> Cons & Pros</h2>

							<div class='row'>
								<?php if( have_rows('cons_&_pros', $product_id) ): ?>
								<?php while( have_rows('cons_&_pros', $product_id) ): the_row();
								$advantage = get_sub_field('advantage');
								$disadvantage = get_sub_field('disadvantage');
								?>
								<div class='col-lg-auto accent-block-wrap'>
                                <?php if($advantage):?>
									<div class='accent-block--advantage accent-block'>

										<div class='block-title '>Advantage</div>

										<?php echo $advantage;?>

									</div>
                                    <?php endif;?>

								</div>

								<div class='col-lg-auto accent-block-wrap'>
									<?php if($disadvantage):?>
									<div class='accent-block--disadvantage accent-block'>

										<div class='block-title'>Disadvantage</div>

										<p><?php echo $disadvantage;?></p>

									</div>
									<?php endif;?>
								</div>
								<?php endwhile; endif; ?>
							</div>

						</div>
						<?php if( have_rows('our_review') ): ?>

						<div class='review-content-section' id='section-review'>



							<h2 class='title'><?php echo get_the_title();?> Our Review</h2>
							<?php while( have_rows('our_review') ): the_row();
								$subtitle = get_sub_field('subtitle');
								$text = get_sub_field('text');
								$youtube_video = get_sub_field('youtube_video');
								?>
							<h3 class='subtitle'><?php echo $subtitle;?></h3>

							<?php echo $text;?>

							<div class='video-wrap'>

								<?php echo $youtube_video;?>

							</div>

                           <?php endwhile;?>
						</div>
						<?php endif;?>
						<?php if( have_rows('video') ): ?>
                        <div class='review-content-section' id='section-video'>
                        <?php while( have_rows('video') ): the_row();
								$link = get_sub_field('link');
								?>
							<h2 class='title'><?php echo get_the_title();?> Video</h2>

							<div class='video-wrap'>

								<?php echo $link;?>

							</div>
                        <?php endwhile;?>
						</div>
						<?php endif;?>
						<?php if( have_rows('addition_services') ): ?>
						<div class='review-content-section' id='section-services'>
							<h2 class='title'><?php echo get_the_title();?> Addition Services</h2>
							<div class='table-responsive services-desktop'>
								<table class='table-large table--large-icons'>
									<thead>
									<tr>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
									</thead>

									<tbody>
									<?php while( have_rows('addition_services') ): the_row();
										$image = get_sub_field('image');
										$title = get_sub_field('title');
										$subtitle = get_sub_field('subtitle');
										$text = get_sub_field('text');
									?>
									<tr class='product'>

										<th>

											<div class='product__logo-wrap'>

												<img src='<?php echo $image;?>' alt=''>

											</div>

										</th>

										<th>

											<div class='product__title'><?php echo $title;?></div>

											<div class='product__subtitle'><?php echo $subtitle;?></div>

										</th>

										<th>

											<div class='product__text'><?php echo $text;?></div>

										</th>

										<th>

											<div class='product__actions'>
												<?php if( have_rows('button_visit_site') ): ?>
												<?php while( have_rows('button_visit_site') ): the_row();
												$text = get_sub_field('text');
												$link = get_sub_field('link');
												?>
												<a href='<?php echo $link;?>' class='btn btn--sm'>
													<span class='btn__text'><?php echo $text;?></span>
													<span class='btn__arrow'>
                         <svg class='btn__icon icon-arrow'>
                          <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>
                        </svg>
                      </span>
												</a>
												<?php endwhile;?>
												<?php endif;?>
												<?php if( have_rows('button_learn_more') ): ?>
												<?php while( have_rows('button_learn_more') ): the_row();
												$text = get_sub_field('text');
												$link = get_sub_field('link');
												?>
                                                <a href='<?php echo $link;?>' class='more more--gray'>
													<span class='more__text'><?php echo $text;?></span>
													<span class='more__icon-wrap'>
                  <svg class='more__icon icon-arrow'>
                    <use xlink:href='/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow'></use>
                  </svg>
              </span>
                                                </a>
                                                <?php endwhile;?>
												<?php endif;?>
											</div>

										</th>
									</tr>
                                    <?php endwhile;?>

									</tbody>

								</table>

							</div>


							<div class='services-mobile'>

                                <div class="swiper-container js-cards">

                                    <div class="swiper-wrapper cards-list">
										<?php
										$args = array(
											'post_type' => 'product',
											'posts_per_page' => 8,
											'orderby' => 'date',
											'order' => 'ASC'
										);
										$query = new WP_Query( $args );
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												$query->the_post();
												echo '<div class="swiper-slide card">';
												echo '<div class="card__head">';
												echo '<div class="card__number">' . sprintf("%02d.", $query->current_post +1) . '</div>';
												echo '<div class="tags">';
												$terms = get_the_terms(get_the_ID(),'product_tag');
												if( is_array( $terms ) ){
													foreach( $terms as $term ){
														$color = get_field('color', $term);
														echo '<style>';
														echo '.tag--'.$term->slug.' {
                                color: '.$color.';
                            }
                            .tag--'.$term->slug.':before{
                                color: '.$color.';
                                background-color: '.$color.';
                            }';
														echo '</style>';
														echo '<div class="tag tag--'.$term->slug.'">'.$term->name.'</div>';
													}
												}
												echo '</div>';
												echo '</div>';
												echo '<div class="card__body">';
												echo '<div class="card__info">';
												echo '<div class="card__logo-wrap"><img src="'.get_the_post_thumbnail_url(get_the_ID(), 'bse-thumbnail-related-post').'" alt=""></div>';
												echo '<div class="card__description">
                    <h4 class="card__title">' . get_the_title() . '</h4>
                    <h5 class="card__subtitle">'.get_field('subtitle').'</h5>
                    </div>';
												echo '</div>';
												echo '<div class="card__text">'. wp_trim_words( get_field('overview'), 20, '...' ).'</div>
                    <div class="card__price price">US$'.get_field('price').'/mo</div>';
												echo '</div>';
												echo '<div class="card__actions">';
												if( have_rows('button_visit_site') ):
													while( have_rows('button_visit_site') ) : the_row();
														$text = get_sub_field('text');
														$link = get_sub_field('link');
														echo '<a href="'.$link.'" class="btn btn--md btn--100-width">
                    <span class=" btn__text">'.$text.'</span>
                    <span class="btn__arrow">
                    <svg class="btn__icon icon-arrow">
                    <use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>
                    </svg>
                    </span>
                    </a>';
													endwhile;
												endif;
												$reviews = get_field('select_review');
												foreach( $reviews as $review ) {
													echo '<a href="' . get_permalink( $review->ID ) . '" class="more more--gray">
                            <span class="more__text">LEARN&nbsp;MORE</span>
                            <span class="more__icon-wrap">
                                          <svg class="more__icon icon-arrow">
                                             <use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>
                                          </svg>
                                       </span>
                        </a>';
												}
												echo '</div>';
												echo '</div>';
											}
										} else {
											// Постов не найдено
										}
										wp_reset_postdata();
										?>


                                    </div>
                                </div>

							</div>

						</div>
                        <?php endif;?>
						<div class='review-content-section' id='section-similar'>

							<h2 class='title'>Similar Products</h2>

                            <div class="swiper-container js-cards">

                                <div class="swiper-wrapper cards-list">
									<?php
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => 8,
										'orderby' => 'date',
										'order' => 'ASC'
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();
											echo '<div class="swiper-slide card">';
											echo '<div class="card__head">';
											echo '<div class="card__number">' . sprintf("%02d.", $query->current_post +1) . '</div>';
											echo '<div class="tags">';
											$terms = get_the_terms(get_the_ID(),'product_tag');
											if( is_array( $terms ) ){
												foreach( $terms as $term ){
													$color = get_field('color', $term);
													echo '<style>';
													echo '.tag--'.$term->slug.' {
                                color: '.$color.';
                            }
                            .tag--'.$term->slug.':before{
                                color: '.$color.';
                                background-color: '.$color.';
                            }';
													echo '</style>';
													echo '<div class="tag tag--'.$term->slug.'">'.$term->name.'</div>';
												}
											}
											echo '</div>';
											echo '</div>';
											echo '<div class="card__body">';
											echo '<div class="card__info">';
											echo '<div class="card__logo-wrap"><img src="'.get_the_post_thumbnail_url(get_the_ID(), 'bse-thumbnail-related-post').'" alt=""></div>';
											echo '<div class="card__description">
                    <h4 class="card__title">' . get_the_title() . '</h4>
                    <h5 class="card__subtitle">'.get_field('subtitle').'</h5>
                    </div>';
											echo '</div>';
											echo '<div class="card__text">'. wp_trim_words( get_field('overview'), 20, '...' ).'</div>
                    <div class="card__price price">US$'.get_field('price').'/mo</div>';
											echo '</div>';
											echo '<div class="card__actions">';
											if( have_rows('button_visit_site') ):
												while( have_rows('button_visit_site') ) : the_row();
													$text = get_sub_field('text');
													$link = get_sub_field('link');
													echo '<a href="'.$link.'" class="btn btn--md btn--100-width">
                    <span class=" btn__text">'.$text.'</span>
                    <span class="btn__arrow">
                    <svg class="btn__icon icon-arrow">
                    <use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>
                    </svg>
                    </span>
                    </a>';
												endwhile;
											endif;
											$reviews = get_field('select_review');
											foreach( $reviews as $review ) {
												echo '<a href="' . get_permalink( $review->ID ) . '" class="more more--gray">
                            <span class="more__text">LEARN&nbsp;MORE</span>
                            <span class="more__icon-wrap">
                                          <svg class="more__icon icon-arrow">
                                             <use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use>
                                          </svg>
                                       </span>
                        </a>';
											}
											echo '</div>';
											echo '</div>';
										}
									} else {
										// Постов не найдено
									}
									wp_reset_postdata();
									?>


                                </div>
                            </div>

						</div>

                        <div class='review-content-section' id='section-customer-reviews'>

                            <h2 class='title'>Customer Reviews</h2>
	                        <?php comments_template(); ?>

<script>
    jQuery(document).ready(function($){
			$('input[name="rating"]').change(function(){
				var rating = $('input[name="rating"]:checked').val();
				console.log(rating);
			})
    });
</script>
                        </div>


					</div>

				</div>

			</div>

		</section>
	</section>
</main>
<?php get_footer(); ?>
