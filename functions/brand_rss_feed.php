<?php function add_rss_logo($content) {
  if(is_feed()) {
    $content .= "<hr><a href='blog_url'><img src='". get_stylesheet_directory_uri()."/images/Il-Lazzarone-Neapolitan-Pizzeria-logo.png'/></a>";
  }
  return $content;
}
add_filter('the_content', 'add_rss_logo');
add_filter('the_excerpt_rss', 'add_rss_logo');