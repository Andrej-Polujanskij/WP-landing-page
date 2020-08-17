<?php
/* Template name: Homepage */
get_header();
?>
<section class="section-padding gray-bg" id="<?php echo sanitize_title(get_field('meniu_item_2')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="page-title text-left">
          <h3 class="title"> <?php the_field('second_section_title'); ?></h3>
          <div class="space-10"></div>
        </div>
        <div class="space-5"></div>
        <?php the_field('second_section_text'); ?>
        <div class="space-20"></div>

        <?php if(get_field('second_section_button_link') !== ''){ ?>
        <a href="<?php the_field('second_section_button_link'); ?>"
          class="bttn-1 bttn-ppl"><?php the_field('second_section_button_text'); ?>
        </a>
        <?php } ?>

        <div class="hidden visible-xs visible-sm space-50"></div>
      </div>
      <div class="col-md-7 col-md-offset-1">
        <div class="row start-height">

          <?php 
          if( have_rows('second_section_descriptions') ):
            while( have_rows('second_section_descriptions') ) : the_row();
        ?>

          <div class="xs-full col-xs-6 col-md-4">
            <div class="single-feature-list">
              <div class="list-wrapper">
                <span class="spacer"></span>
                <h4 class="title"><?php the_sub_field('description_title'); ?></h4>
              </div>

              <div class="description">
                <?php the_sub_field('description_text'); ?>
              </div>
            </div>
            <div class="hidden visible-xs visible-sm space-30"></div>
            <div class="space-30 hidden-xs hidden-sm"></div>
          </div>

          <?php
              endwhile;
             endif;
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="counter-area">
  <div class="container">
    <div class="row">
      <?php 
        if( have_rows('experience') ):
          while( have_rows('experience') ) : the_row();
      ?>

      <div class="col-xs-6 col-md-3 single-count wow fadeInLeft" data-wow-delay="0.9s">
        <div class="count-icon">
          <span
            style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('experience_icon'), 'icons'); ?>);"
            class="icon-experience"></span>
        </div>
        <h3 class="count"><?php the_sub_field('experience_number'); ?></h3>
        <div class="desc"><?php the_sub_field('experience_description'); ?></div>
      </div>

      <?php
          endwhile;
        endif;
      ?>

    </div>
  </div>
</div>

<section class="section-padding" id="<?php echo sanitize_title(get_field('meniu_item_3')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="page-title">
          <h3 class="title"><?php the_field('fourth_section_title'); ?></h3>
          <div class="desc"><?php the_field('fourth_section_sub_title'); ?></div>
          <div class="space-60"></div>
        </div>
      </div>
    </div>

    <?php 
      if( have_rows('services') ):
        while( have_rows('services') ) : the_row();
    ?>

    <div class="row equal-height services_container">
      <div class="col-xs-12 col-sm-5 text-center">
        <figure class="text-left">
          <img src="<?php echo get_correct_image_link_thumb(get_sub_field('services_image'), 'thumbas'); ?>" alt="">
        </figure>
        <div class="space-30 hidden visible-xs"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-offset-1">
        <div class="single-service-two">
          <h5 class="icon-title">
            <span class="icon">
              <span class="icon-services"
                style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('services_sub_title_icon'), 'icons'); ?>);"></span>
            </span>
            <?php the_sub_field('services_sub_title'); ?>
          </h5>
          <div class="space-10"></div>
          <h3 class="title"><?php the_sub_field('services_title'); ?></h3>
          <p><?php the_sub_field('services_description'); ?></p>
        </div>
      </div>
    </div>
    <div class="space-50"></div>

    <?php
          endwhile;
        endif;
      ?>

  </div>
</section>

<section class="section-padding gray-bg" id="<?php echo sanitize_title(get_field('meniu_item_4')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="page-title">
          <h3 class="title"><?php the_field('fifth_section_title'); ?></h3>
          <div class="space-60"></div>
        </div>
      </div>
    </div>
    <div class="owl-carousel row features ppl-dots">

      <?php 
        if( have_rows('fitth_section_clients') ):
          while( have_rows('fitth_section_clients') ) : the_row();
      ?>

      <div class="item">
        <img src="<?php echo get_correct_image_link_thumb(get_sub_field('clients_image'), 'head_carousel_image'); ?>"
          alt="">
      </div>

      <?php
            endwhile;
          endif;
      ?>

    </div>
  </div>
</section>

<div class="contact-page" id="<?php echo sanitize_title(get_field('meniu_item_5')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="page-title text-left">
          <h3 class="title"><?php the_field('sixth_section_title'); ?></h3>
          <div class="desc"><?php the_field('sixth_section_sub_title'); ?></div>
          <div class="space-60"></div>
        </div>

        <?php 
          if( have_rows('sixth_section_contacts') ):
            while( have_rows('sixth_section_contacts') ) : the_row();
        ?>

        <div class="info-box">
          <div class="icon">
            <span class="icon-contact "
              style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('contacts_icon'), 'icons'); ?>);"></span>
            <span class="icon-contact icon-hover"
              style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('contacts_icon_hover'), 'icons'); ?>);"></span>
          </div>
          <div class="info_content">
            <h5 class="title"><?php the_sub_field('contact_title'); ?></h5>
            <span><?php the_sub_field('contact_info'); ?></span>
          </div>
        </div>

        <?php
            endwhile;
          endif;
        ?>

      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="contact-form-2">

          <!-- <div class="preloader"> -->
          <div class="spinner spinner_2 display-none">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
          </div>
          <!-- </div> -->

          <form id="contact-form">
            <div class="form-group">
              <input type="text" name="name" id="form-name" class="form-input required"
                placeholder="<?php the_field('contact_form_name_placeholder'); ?>" required>
            </div>
            <div class="form-group">
              <input type="email" name="form-email" id="form-email" class="form-input requiredemail"
                placeholder="<?php the_field('contact_form_e-mail_placeholder'); ?>" required>
            </div>
            <div class="form-group">
              <input type="text" name="form-phone" class="form-input" id="form-phone numberReq"
                placeholder="<?php the_field('contact_form_number_placeholder'); ?>" required>
            </div>
            <div class="form-group">
              <textarea class="form-input mintnine" name="form-message" id="form-message"
                placeholder="<?php the_field('contact_form_message_placeholder'); ?>" rows="5"></textarea>
            </div>
            <div class="text-center">
              <button class="bttn-1 bttn-ppl" type="submit"><?php the_field('contact_form_button_text'); ?></button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="address"><?php the_field('map_address'); ?></div>

<div id="googleMap" style="width:100%;height:500px;">
  <div class="map" style="width:100%;height:100%;"></div>
</div>


<?php get_footer(); ?>