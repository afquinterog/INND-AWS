<?php
// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS
	add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
	function twbs_load_styles() {
		// Bootstrap
		wp_register_style('bootstrap-styles', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('bootstrap-styles');
		// Theme Styles
		wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
		wp_enqueue_style('theme-styles');
		// Font Awesome
		wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');
	}


} // end if !is_admin

//get a custom field value

function get_custom_field_value($szKey, $bPrint = false) {
  global $post;
  $szValue = get_post_meta($post->ID, $szKey, true);
  if ( $bPrint == false ) return $szValue; else echo $szValue;
}

add_theme_support('post-thumbnails' );

add_image_size( 'category-news', 870, 415);

add_filter('post_thumbnail_html','add_class_to_thumbnail');
function add_class_to_thumbnail($thumb) {
if( is_single() ) $thumb = str_replace('attachment-', 'img-responsive ', $thumb);
return $thumb;
}

/**
 * If more than one page exists, return TRUE.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

/* strip gallery shortcode for use elsewhere in post*/

function  strip_shortcode_gallery( $content ) {
    preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );
    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if ($pos !== false)
                    return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
            }
        }
    }
    return $content;
}

// Register secondary nav menu

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'home-scroll', __( 'home_scrollTop_nav', 'wptuts' ) );
        } endif;

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'primary_page_navigation', 'wptuts' ) );
        } endif;

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}


/***
Show the services nav menu
*/
function showServicesMenu($postId){
  $args = array(
    'posts_per_page' => '-1',
    'post_type' => 'services',
    'orderby' => 'menuorder',
    'order' => 'ASC'    
    );
  $pagelist = new WP_Query( $args );
  $pages = array();
  while ( $pagelist->have_posts() ) : $pagelist->the_post();
    $id = get_the_ID();
    $title = get_the_title();
    //echo $id . " " . $title;
    $pages[] += $id;
  endwhile;

  $current = array_search($postId, $pages);
  $prevID = $pages[$current-1];
  $nextID = $pages[$current+1];

  if (!empty($prevID)) {
    $prevTitle = get_the_title($prevID);
    $prevLink  = get_permalink($prevID);
    echo '
      <a class="link" style="margin-right:10px" href="'.$prevLink.'" title="' . $prevTitle . '">
                <img class="left-icon-service" src="'. site_url() .'/wp-content/uploads/black-left.png" />
                <b class="left-text"></b>
            </a>
      ';
  }

  $title = get_the_title( $postId );

  echo ( $title == 'technology') ? 'technology <span>|</span>' : 
                                   '<a href='. site_url() .'/services/technology/>technology</a> <span>|</span>';
  echo ( $title == 'interactivity') ? 'interactivity <span>|</span>' : 
                                      '<a href='. site_url() .'/services/interactivity/>interactivity</a> <span>|</span>';
  echo ( $title == 'engagement') ?  'engagement <span>|</span>' : 
                                    '<a href='. site_url() .'/services/engagement/>engagement</a> <span>|</span>';
  echo ( $title == 'identity') ? 'identity <span>|</span>' : 
                                 '<a href='. site_url() .'/services/identity/>identity</a> <span>|</span>';
  echo ( $title == 'strategy') ? 'strategy <span>|</span>' : 
                                 '<a href='. site_url() .'/services/strategy/>strategy</a> <span>|</span>';
  echo ( $title == 'data') ? 'data ' : 
                             '<a href='. site_url() .'/services/data/>data</a>';

  if (!empty($nextID)) {
    $nextTitle = get_the_title($nextID);
    $nextLink  = get_permalink($nextID);
    echo '
      <a class="link" style="margin-left:10px" href="'.$nextLink.'" title="' . $nextTitle . '">
                <img class="right-icon-service" src="'. site_url() .'/wp-content/uploads/black-right.png" />
                <b class="left-text"></b>
            </a>
      ';
  }

  wp_reset_query();

}


/***
Create the custom post type services
*/
add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Services' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'services'),
      'supports' => array ('title', 'editor','page-attributes'),
      'register_meta_box_cb' => 'add_services_metabox'
    )
  );

  //Create a meta box for the custom post fields
  
}

function add_services_metabox(){
  add_meta_box( 'services-meta', 'Green Bar Text', 'services_meta_box',
                'services', 'normal', 'high' );
}
add_filter( 'wpseo_metabox_prio', function() { return 'low';});

//build services meta box
function services_meta_box( $post ) {


    // retrieve our custom meta box values
    $greenText = get_post_meta( $post->ID, 'greenText', true );
    

  //nonce field for security
  //wp_nonce_field( 'meta-box-save', 'service-posttype' );
  
    // display meta box form

     echo '<p>' . __('').'<input style="width:100%" type="text" name="greenText" value="'.esc_attr( $greenText ).'"></p>';

}

// Action hook to save the meta box data when the post is saved
add_action( 'save_post','services_store_save_meta_box' );

//save meta box data
function services_store_save_meta_box( $post_id ) {

  //verify the post type is for Halloween Products and metadata has been posted
  if ( get_post_type( $post_id ) == 'services'  ) {
    
    //if autosave skip saving data
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
     return;


    //check nonce for security
    //check_admin_referer( 'meta-box-save', 'service-posttype' );

    // save the meta box data as post metadata
    update_post_meta( $post_id, 'greenText', sanitize_text_field( $_POST['greenText'] ));

  }
  
}
/***
End Create the custom post type services
*/

