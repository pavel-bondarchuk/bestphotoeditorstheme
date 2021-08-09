<?php
/**
 * BestPhotoEditors.net functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage BestPhotoEditors.net
 * @since 1.0
 */
 if ( ! function_exists( 'bse_setup' ) ) :
function bse_setup() {

    load_theme_textdomain( 'bse', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

	add_image_size( 'bse-featured-image', 2000, 1200, true );
	add_image_size( 'bse-thumbnail-author', 60, 60, true );
	add_image_size( 'bse-thumbnail-related-posts', 76, 72, true );
	add_image_size( 'bse-thumbnail-related-posts-image', 76, 72, true );
	add_image_size( 'bse-thumbnail-post', 325, 306, true );
	add_image_size( 'bse-thumbnail-review-post', 175, 170, true );

    register_nav_menus( array(
        'header'   => __( 'Header Menu', 'bse' ),
        'footer' => __('Footer Menu', 'bse' )
    ) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

    add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );


}
endif;
add_action( 'after_setup_theme', 'bse_setup' );

/**
 * Register custom fonts.
 */
function bse_fonts_url() {
	$fonts_url = '';

	$libre_franklin = _x( 'on', 'poppins font: on or off', 'bse' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Poppins:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since BestPhotoEditors 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function bse_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'bse-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'bse_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bse_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bse' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'bse' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'bse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'bse' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'bse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bse_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * Create your own bse_excerpt_more() function to override in a child theme.
 *
 * @since Twenty Seventeen 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function bse_excerpt_more() {
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bse' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'bse_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since BestPhotoEditors 1.0
 */
function bse_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'bse_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 */
function bse_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'bse-fonts', bse_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'bse-style', get_stylesheet_uri() );

	wp_enqueue_style( 'libs', get_theme_file_uri() . '/css/libs.css' );
	wp_enqueue_style( 'style', get_theme_file_uri() . '/css/style.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', null, true);
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('libs', get_theme_file_uri() . '/js/libs.js', array('jquery'), null, true );

	wp_enqueue_script('commontheme', get_theme_file_uri() . '/js/common.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'bse_scripts' );

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $classes[] = 'menu__item';
    return $classes;
}
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function show_template() {
	if( is_super_admin() ){
		global $template;
		print_r($template);
	}
}
//add_action('wp_footer', 'show_template');

function bse_comments( $comment, $args, $depth ){
	$GLOBALS['comment'] = $comment;
	$comment_id = $comment->comment_ID;
	if( $comment->comment_parent ) :
	?>
		<div class="customer-reviews-item--admin" id="comment-<?php comment_ID() ?>">
			<div class="customer-reviews-item__author">
				<?php comment_author();?>
			</div>
			<div class="rating-wrap">
			<span class='customer-reviews-item__time'><?php printf( _x( '%s ago', '%s = human-readable time difference', 'bse' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
			</div>
			<div class="customer-reviews-item__info">
				<?php comment_text();?>
			</div>
		</div>
<?php
else:
?>
        <div class="customer-reviews-item" id="comment-<?php comment_ID() ?>">
		<div class="customer-reviews-item__author">
			<?php comment_author();?>
		</div>
		<div class="rating-wrap">
            <?php $rating = get_comment_meta( $comment_id, 'rating', true );?>
			<span class='customer-reviews-item__rating js-rating' data-rating='<?php echo $rating[0];?>'></span>
			<span class='customer-reviews-item__time'><?php printf( _x( '%s ago', '%s = human-readable time difference', 'bse' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
		</div>
		<div class="customer-reviews-item__info">
			<?php comment_text();?>
		</div>
	</div>
<?php
endif;
}
// Save the comment meta data along with comment
add_action( 'comment_post', 'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {
	if ( isset( $_POST['rating'] )) {
		$rating = $_POST['rating'];
		update_comment_meta( $comment_id, 'rating', $rating );
	}
}
//Get the average rating of a post.
function comment_rating_get_average_ratings( $id) {
	$comments = get_approved_comments( $id );

	if ( $comments ) {
		$i = 0;
		$total = 0;
		foreach( $comments as $comment ){
			$rate = get_comment_meta( $comment->comment_ID, 'rating', true );
			if( isset( $rate ) && '' !== $rate ) {
				$i++;
				$total += $rate;
			}
		}

		if ( 0 === $i ) {
			return false;
		} else {
			return round( $total / $i, 1 );
		}
	} else {
		return false;
	}
}
