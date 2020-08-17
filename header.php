<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!-- <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg"
    color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config"
    content="<?php echo get_template_directory_uri(); ?>/images/favicon/browserconfig.xml"> -->
  <meta name="theme-color" content="#ffffff">
  <title>
    <?php the_field('title_text'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".primary-menu" <?php body_class(); ?>>
  <!-- Preloader -->
  <div class="preloader">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <!-- Preloader / -->

  <!-- Main-Menu-Area -->
  <nav class="navbar mainmenu-area fixed-top" data-spy="affix" data-offset-top="200">
    <div class="container">
      <div class="equal-height">

        <div class="site-branding">
          <a class="nav_logo" href="<?php echo get_option("siteurl"); ?>">
            <img src="<?php echo get_correct_image_link_thumb(get_field('navigation_logo'), 'head_carousel_image'); ?> " alt="">
          </a>
        </div>

        <div class="primary-menu">
          <ul class="nav">
            <li class="active"><a href="#<?php echo sanitize_title(get_field('meniu_item_1')); ?>"><?php the_field('meniu_item_1'); ?></a>
            </li>
            <li>
              <a href="#<?php echo sanitize_title(get_field('meniu_item_2')); ?>"><?php the_field('meniu_item_2'); ?></a>
            </li>
            <li><a href="#<?php echo sanitize_title(get_field('meniu_item_3')); ?>"><?php the_field('meniu_item_3'); ?></a></li>
            <li><a href="#<?php echo sanitize_title(get_field('meniu_item_4')); ?>"><?php the_field('meniu_item_4'); ?></a></li>
            <li><a href="#<?php echo sanitize_title(get_field('meniu_item_5')); ?>"><?php the_field('meniu_item_5'); ?></a></li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
  <div id="<?php echo sanitize_title(get_field('meniu_item_1')); ?>"></div>
  <header class="header-area" style="background-image: url('<?php echo get_correct_image_link_thumb(get_field('first_section_background_image'), 'icons'); ?>);" >

    <div class="container">
      <div class="row equal-height">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <h2 class="head-title wow fadeInLeft" data-wow-delay="0.6s"> <?php the_field('first_section_header'); ?> </h2>
          <div class="desc wow fadeInLeft" data-wow-delay="0.8s">
            <?php the_field('first_section_text'); ?>
          </div>
          <div class="space-20"></div>

          <?php if(get_field('first_section_button_link') !== ''){ ?>
          <a href="<?php the_field('first_section_button_link'); ?>"
            class="bttn-1 bttn-ppl wow fadeInLeft" data-wow-delay="1s">
            <?php the_field('first_section_button_text'); ?></a>
          <?php } ?>

          <div class="space-50"></div>
          <div class="owl-carousel clients dots-none">
            <?php 
              if( have_rows('first_section_carousel_images') ):
                while( have_rows('first_section_carousel_images') ) : the_row();
            ?>

            <div class="item">
              <img
                src="<?php echo get_correct_image_link_thumb(get_sub_field('carousel_image'), 'head_carousel_image'); ?>"
                alt="">
            </div>

            <?php
                  endwhile;
                endif;
            ?>

          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
          <div class="hidden visible-xs visible-sm space-60"></div>
          <figure class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <img
              src="<?php echo get_correct_image_link_thumb(get_field('first_section_big_image'), 'head_big_image'); ?>"
              alt="illustration">
          </figure>
        </div>
      </div>
    </div>
  </header>