<?php

function roots_scripts() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', '/js/plugins.js', false, null, false);
wp_register_script('roots_script', '/js/script.js', false, null, false);
wp_enqueue_script('roots_plugins');
wp_enqueue_script('roots_script');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);