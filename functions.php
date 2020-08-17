<?php
// enquee scripts and styles
include('includes/scripts.php');
include('includes/disable_comments.php');

// create post types and taxonomies if needed
include('includes/post_types.php');

// add post thumbnails with sizes
add_theme_support('post-thumbnails');
if (function_exists('add_image_size')) {
  add_image_size('thumbas', 500, 500, false);
  add_image_size('head_carousel_image', 225, 110, true);
  add_image_size('head_big_image', 780, 620, false);
  add_image_size('icons', 100, 100, false);
}

// custom function for returning excerpt from post
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

// get image url from attachment id
function get_correct_image_link_thumb($thumb_id = '', $size = 'large')
{

  if ($thumb_id != '') {
    $imagepermalink = wp_get_attachment_image_src($thumb_id, $size, true);
  } else {
    $imagepermalink[0] = get_stylesheet_directory_uri() . '/src/images/cover.png';
  }
  return $imagepermalink[0];
}

// disable admin bar if needed
show_admin_bar(false);

// Create ACF options page
if (function_exists('acf_add_options_sub_page')) {
  acf_add_options_sub_page('Options');
}

// Create wordpress menu locations
function register_theme_menus()
{
  register_nav_menus(array(
    'header-menu' => __('Header menu')
  ));
}

add_action('init', 'register_theme_menus');

// AJAX function
add_action('wp_ajax_send_contact_form_message',        'send_contact_form_message');
add_action('wp_ajax_nopriv_send_contact_form_message', 'send_contact_form_message');
function send_contact_form_message(){
    $to = get_option('admin_email');
    // $to = 'andrej@nextweb.lt';
    // print_r($_POST);

    $message ='
        Vardas: '.$_POST['name'].' <br />
        El. paštas: '.$_POST['form-email'].' <br />
        Tel. numeris: '.$_POST['form-phone'].' <br />
        Žinutė: '.$_POST['form-message'].' <br />
    ';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From:  '.$_POST['form-email'].'',
        'Reply-To: '.$_POST['name'].' <'.$_POST['form-email'].'>'
    );

    $subject = 'Užklausos forma';

   wp_mail($to, $subject, $message, $headers);

    die();
}

