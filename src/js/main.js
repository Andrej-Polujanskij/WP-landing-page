(function($) {
  "use strict";
  $(document).on('ready', function() {
    console.log('veikia');
    /* Contact form validation
    =============================*/
    $("#contact-form").validate({
      errorPlacement: function() {
        return false; // suppresses error message text
      },
      errorClass: 'error-validation-class'
    });
    $.validator.addClassRules({
      required: {
        required: true,
        minlength: 2
      },
      requiredemail: {
        required: true,
        email: true
      },
      numberReq: {
        required: true,
        number: true,
        minlength: 7
      },
      mintnine: {
        required: true,
        minlength: 9
      }
    });


    /* Form sending
    =============================*/
    $(document).on('submit', '#contact-form', function(event) {
      event.preventDefault();

      $('.spinner_2').toggleClass('display-none');
      $('#contact-form').toggleClass('opacity5');
      var formData = new FormData(this);
      formData.append('action', 'send_contact_form_message');

      jQuery.ajax({
        url: variables.ajaxUrl,
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',

        success: function(data) {
          // console.log(data);


          $('.spinner_2').toggleClass('display-none');
          $('#contact-form').toggleClass('opacity5');

          var inputValue = document.querySelectorAll('input');
          for (var i = 0; i < inputValue.length; i++) {
            inputValue[i].value = '';
          }
          document.querySelector('#form-message').value = '';

        }
      });
    });

    /* testimonials Slider Active
    =============================*/
    $('.features').owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass: true,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 2500,
      smartSpeed: 1000,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right" ></i>'],
      responsive: {
        0: {
          items: 2,
          dots: false,
        },
        768: {
          items: 3
        },
        1170: {
          items: 4
        }
      }
    });

    /* testimonials Slider Active
    =============================*/
    $('.clients ').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 2500,
      smartSpeed: 1000,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right" ></i>'],
      responsive: {
        0: {
          items: 3,
        },
        768: {
          items: 3
        },
        1170: {
          items: 3,
          nav: false,
        }
      }
    });



    /* Counter-JS */
    // $('.count').counterUp({
    //   delay: 10,
    //   time: 3000
    // });
    // Counter
    if ($('.counter-area .container').length > 0) {
      var counted = 0;
      $(window).scroll(function() {
        var oTop = $('.counter-area .container').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
          $('.count').each(function() {
            var $this = $(this),
              numberTo = $this.text(),
              countTo = numberTo;
            $(this).text(0);
            $({
              countNum: $this.text()
            }).animate({
              countNum: countTo
            }, {
              duration: 3000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
              }
            });
          });
          counted = 1;
        }
      });
    }


    /* Slick Nav Acitve */
    $('.primary-menu ul').slicknav();
    $('.slicknav_menu').prepend($(".nav_logo").clone());

    /* Scroll to top */
    $.scrollUp({
      scrollText: '<i class="fa fa-angle-up"></i>',
      easingType: 'linear',
      scrollSpeed: 900,
      animation: 'fade'
    });



    // Select all links with hashes
    $(' a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .on('click', function(event) {
        // On-page links

        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {});
          }
        }
      });

    $('.slicknav_menu a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .on('click', function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {});
          }
        }
      });



  });
  /* Preloader Js
  ===================*/
  $(window).on("load", function() {

    $('.preloader').fadeOut(500);

  });



})(jQuery);

/* Google maps Js
  ===================*/
google.maps.event.addDomListener(window, 'load', init);

function init() {

  var mapOptions = {
    zoom: 11,

    // center: new google.maps.LatLng(),

    disableDefaultUI: true,

    styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]

  };

  var mapElement = document.querySelector('.map');

  var map = new google.maps.Map(mapElement, mapOptions);

  var geocoder = new google.maps.Geocoder();
  var address = jQuery(".address").first().text();

  jQuery(document).ready(function($) {

    geocodeAddress(address, geocoder, map);

  });

}

function geocodeAddress(address, geocoder, resultsMap) {

  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      resultsMap.fitBounds(results[0].geometry.viewport);
    }
  });
}