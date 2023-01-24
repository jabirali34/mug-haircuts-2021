(function($) {
  var Scripts = {
    init() {
      this.bindEvents();
      this.startupKit();
      //this.instafeed();
    },

    bindEvents() {
      var self = this;
      // show mobile nav
      $(document).on("touchstart, click", ".navbar .btn-navbar", function(e) {
        e.preventDefault();
        $('html.nav-visible').find('.nav-collapse').hide();
        $(".navbar").find('.nav-collapse').show();
        $(".navbar").toggleClass('nav-visible');
        $('html').toggleClass('nav-visible');
      });

      // always close mobile nav
      $(document).on("click", ".nav-visible .nav-top li a", function() {
        self._close_nav();
      });
    },

    _close_nav() {
      $('.navbar').removeClass('nav-visible');
      $('html').removeClass('nav-visible');
    },

    _open_nav() {
      $(".navbar").find('.nav-collapse').show();
      $(".navbar").addClass('nav-visible');
      $('html').addClass('nav-visible');
    },

    // instafeed(){
    //   var feed = new Instafeed({
    //     accessToken: 'IGQVJWbEoyWkZAYWWZAQUEUwYzk4RFVaSnNHak91OGx0ZADVCZAUQ3eDVlUk9QdHAzWHFfcVd3SlhXQUhFVUxyMmFURXFURnlmVEVyVVFZAeTZA6SjdwVWQ4ZATBOTlZAGTko2LWRzU2VjT3dIMzNLSjJMM0szbAZDZD',
    //     limit: 4
    //   });
    //   feed.run();
    // },

    equalHeight() {
      let target = $(document).find('.equalheight');
      let width = target.width();
      target.height(width);
    },

    startupKit() {
      var self = this;
      $(document).ready(function() {
        setTimeout(function() {
          $('html').addClass('loaded');
        }, 400);
      });
    },
  };

  Scripts.init();



  //image slick slider
  $('.image-slider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
})(jQuery);

