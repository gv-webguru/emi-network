<?php

add_theme_support( 'post-thumbnails' );


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function echourl() {
	echo get_template_directory_uri();
}

function themeurl( $atts ){
	return get_template_directory_uri();
}
add_shortcode( 'themeurl', 'themeurl' );


function echositeurl() {
	return get_site_url();
}
add_shortcode( 'echositeurl', 'echositeurl' );



function my_wp_nav_menu_args( $args = '' ) {
        $args['container'] = false;
        return $args;
    }
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );




function wpb_list_child_pages() { 

global $post; 

if ( is_page() && $post->post_parent )

	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

	//$string = '<li class="services_link">' . $childpages . '</li>';
	$string = preg_replace('/class="/','class="services_link ', $childpages); //note space on end of replacement string            
}

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');











function wp_new_excerpt($text)
{
	if ($text == '')
	{
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$text = nl2br($text);
		$excerpt_length = apply_filters('excerpt_length', 50);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_new_excerpt');






/*
|--------------------------------------------------------------------------
| Register widgetized area and update sidebar with default widgets
|--------------------------------------------------------------------------
*/
if ( ! function_exists( 'unitedthemes_widgets_init' ) ) :
 
    function unitedthemes_widgets_init() {
        
		if (function_exists( 'ot_get_option') ) {
            
			$sidebars = ot_get_option( 'ut_sidebars', '', false, true, -1 );
                
				if( !empty( $sidebars ) && is_array( $sidebars ) ){
                
				foreach( $sidebars as $num => $sidebar_options ){
                    
					register_sidebar(array(
                        'name'              => $sidebar_options['title'],
                        'id'                => 'ut_sidebar_' . $sidebar_options['ut_sidebar_id'],
                        'description'       => $sidebar_options['ut_sidebardesc'],
                        'before_widget'     => '<li id="%1$s" class="clearfix widget-container %2$s">',
                        'after_widget'         => '</li>',
                        'before_title'         => '<h3 class="widget-title"><span>',
                        'after_title'         => '</span></h3>',
                    ));
					
                }   
            }			
        }
		
		/*
        register_sidebar( array(
            'name' => __( 'Blog Sidebar', 'eminetwork' ),
            'id' => 'blog-widget-area',
            'before_widget' => '<div style="float: right; margin-left: 300px; height: 475px; padding-top: 0px; -webkit-mask-image:-webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))" class="hide-on-mobile "> <img src="http://www.eminetwork.com/demo/wp-content/themes/emi/images/vertical-rule.png"></div><li style="margin-top: 150px; " class="hide-on-mobile clearfix widget-container">',
            'after_widget' => '</li>',
            'before_title' => '<h3 style="font-family: GothamM;" class="widget-title"><span>',
            'after_title' => '</span></h3>',
        ) );
        */


		register_sidebar( array(
            'name' => __( 'Blog Sidebar', 'eminetwork' ),
            'id' => 'blog-widget-area',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 style="font-family: GothamMedium; font-size: 16px;" class="widget-title"><span>',
            'after_title' => '</span></h3>',
        ) );

        /*
        
        register_sidebar1( array(
            'name' => __( 'Page Sidebar', 'eminetwork' ),
            'id' => 'page-widget-area',
            'before_widget' => '<li class="clearfix widget-container %1$s %2$s">',
            'after_widget' => '</li>',
            'before_title' => '<h3 class="widget-title"><span>',
            'after_title' => '</span></h3>',
        ) ); */
		
    }
    
    add_action( 'widgets_init', 'unitedthemes_widgets_init' );

endif;
// See the __() WordPress function for valid values for $text_domain.
register_sidebar( array(
    'id'          => 'footer-content',
    'name'        => __( 'Footer Content', $text_domain ),
    'description' => __( '', $text_domain ),
) );








