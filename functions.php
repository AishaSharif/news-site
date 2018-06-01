<?php 
function insert_image_before_title( $title, $id = null ) {

if(get_post_meta($id, 'image_before_title_url', true)) {
    $img_source = get_post_meta(get_the_ID(), 'image_before_title_url', true);
    $title = '<img class="top-story-img" src="'. $img_source .'" />' . $title;
}

return $title;
}
add_filter( 'the_title', 'insert_image_before_title', 10, 2 );

function wpb_tags() { 
$wpbtags =  get_tags();
foreach ($wpbtags as $tag) { 
$string .= '<span class="tagbox"><a class="taglink" href="'. get_tag_link($tag->term_id) .'">'. $tag->name . '</a><span class="tagcount">'. $tag->count .'</span></span>' . "\n"   ;
} 
return $string;
} 
add_shortcode('wpbtags' , 'wpb_tags' );
?>
<?php

function news_site_files(){
  wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );
  wp_enqueue_style( 'bootstrap_4', '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
  wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Tajawal:200,300,400,700,800' );
  wp_enqueue_style( 'news_site_main_styles', get_stylesheet_uri(), NULL, microtime() );
}

add_action('wp_enqueue_scripts', 'news_site_files');

function news_site_features(){
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'news_site_features' );