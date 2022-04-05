<?php
    add_action('wp_enqueue_scripts', 'topforum_scripts');

    
    function topforum_scripts(){
        wp_enqueue_style('topforum-style', get_stylesheet_uri());
        wp_deregister_script('jquery');
        wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        wp_enqueue_script('jquery');
        wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery']);
        wp_enqueue_script('topforum-scripts' , get_template_directory_uri() . '/assets/js/script.js',array(), null , true);
    };
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    function my_acf_google_map_api( $api ){
	
        $api['key'] = 'AIzaSyBcqPq8n3K5VwQA_Dkz2hsFkBr5iJ89KrY';
        
        return $api;
        
    };
    
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
    
    add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );
    function custom_custom_form_class_attr( $class ) {
        $class .= ' form__body';
        return $class;
    }

    /**
     * Return image for CF7 tag.
     *
     * @param $tag
     *
     * @return string
     */
    function custom_add_form_tag_img_handler( $tag ) {
        return '<img src="' . get_stylesheet_directory_uri() . '/assets/img/icons/' . $tag['options'][0] . '">';
    }

    /**
     * Hook to add custom 'img' tag to CF7.
     * Usage in CF7: [acf source]
     */
    function custom_add_form_tag_img() {
        wpcf7_add_form_tag( 'img', 'custom_add_form_tag_img_handler' );
    }

    add_action( 'wpcf7_init', 'custom_add_form_tag_img' );

    
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args){
    if($args->menu === 'Main'){
        $atts['class'] = 'menu__link';

    }
    if($args->menu === 'Footer menu'){
        $atts['class'] = 'menu__link';

    }
    if($item->ID===526 ){
        $atts['class'] .= ' parent';
    }
    return $atts;
}

add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );

function change_wp_nav_menu( $classes, $args, $depth ) {
	foreach ( $classes as $key => $class ) {
		if ( $class == 'sub-menu' ) {
			$classes[ $key ] = 'sub-menu__list';
		}
	}

	return $classes;
}

?>