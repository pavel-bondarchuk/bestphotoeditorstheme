<?php
/* Template Name: Blog
*/
get_header(); ?>
         <main class="main">
	   <section>
           <div class='container'>

               <div class='small-title'><?php echo get_the_title();?></div>

               <div class='title'>Latest Posts</div>

               <div class='row'>

                   <div class='col-12 col-md'>



                       <div class='blog-list'>

	                       <?php
	                       $args = array(
		                       'posts_per_page' => 5,
		                       'orderby' => 'comment_count'
	                       );

	                       $query = new WP_Query( $args );

	                       if ( $query->have_posts() ) {
		                       while ( $query->have_posts() ) {
			                       $query->the_post();
			                       echo '<div class="post">';
			                       echo get_the_post_thumbnail(get_the_ID(),'bse-thumbnail-post');
			                       echo '<div class="post__description">';
			                       echo '<div class="post__title">' . get_the_title() . '</div>';
			                       echo '<div class="post__date">' . get_the_date('M. d, Y') . '</div>';
			                       echo '<div class="post__text">' . wp_trim_words(get_the_content(), 18) . '</div>';
			                       echo '<a href="'.get_permalink().'" class="more">';
                                   echo '<span class="more__text">LEARN&nbsp;MORE</span>';
                                   echo '<span class="more__icon-wrap">';
                                   echo '<svg class="more__icon icon-arrow"><use xlink:href="/wp-content/themes/bestphotoeditorstheme/img/sprite.svg#icon-arrow"></use></svg>';
                                   echo '</span>';
			                       echo '</a>';
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
	   </section>
             </div>
         </main>
<?php get_footer(); ?>
