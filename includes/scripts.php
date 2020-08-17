<?php
function scripts_styles()
{
  $ver = defined('WP_DEBUG') && WP_DEBUG === true ? time() : '1.04';

  wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/bundle.css', array(), $ver);

  wp_enqueue_script( 'validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js', array( ), $ver, true );
  
  wp_enqueue_script( 'map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBm-sVievd4ulRLn_U7IppLyDLmksF08rw', array( ), $ver, true );
  wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), $ver, true);


  wp_localize_script('main-js', 'variables', array('ajaxUrl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'scripts_styles');
