<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'twentynineteen-style'; // This is 'twentynineteen-style' for the Twenty nineteen theme.
 
   wp_enqueue_style ( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style(
        'twentynineteen-style-enfant',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

  
    wp_enqueue_script(
	'animation',
	get_stylesheet_directory_uri() . '/js/animation.js',
	array(),
	filemtime( get_stylesheet_directory() . '/js/animation.js' )
);
}

/* Permet d'adapter la requête principale avant qu'elle ne s'exécute */ 
function extraire_cours( $query ) {
   if ($query->is_category('cours'))
   {
      $query->set( 'posts_per_page', -1 );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'asc' );
   }
}
add_action( 'pre_get_posts', 'extraire_cours' );

///////////////////////////////////////////////////////////
/*
function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'category_name', 'nouvelle' );
    }
}
 add_action( 'pre_get_posts', 'my_home_category' );
*/

/*
 
function acf_set_featured_image( $value, $post_id, $field  ){
    
    if($value != ''){
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }
 
    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=cursusfoto', 'acf_set_featured_image', 10, 3);
 */

/*
add_action('acf/save_post', 'acf_set_featured_image');

function acf_set_featured_image($post_id){
    $value = get_field('featured_image_2', $post_id);

    if($value != ''){
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}
*/


?>
