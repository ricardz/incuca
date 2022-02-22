<?php

function theme_enqueue_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
  wp_enqueue_style('fonteawesome', get_stylesheet_directory_uri() . '/assets/css/all.min.css');
  wp_enqueue_script('sanitize', get_stylesheet_directory_uri() . '/assets/js/sanitize.js', array('jquery'), '', true);
  wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
  wp_localize_script('main', 'ajax_astra', array('ajax_url' => admin_url('admin-ajax.php'), 'store_url' => get_bloginfo('url')));
  wp_enqueue_script('ass', 'https://assinaturaweb.s3-sa-east-1.amazonaws.com/brt-assinatura-2021.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100);

?>