(function($){

var util = {
    Global: {
        init: function () {
           $("select").selectOrDie();

           window.scrollReveal = new scrollReveal({ 
            // reset: true, move: '50px' 
           });

        },
    },
    Front: {
      init: function() {
        this.CustomScript();
        this.Slider();
      },
      Slider: function() {


        $('.post-thumb-slider').flexslider({
          animation: "slide",
          controlNav: false,
          animationLoop: true,
          slideshow: false,
          itemWidth: 130,
          prevText: "<span class='fa fa-angle-left'></span>",
          nextText: "<span class='fa fa-angle-right'></span>",
          itemMargin: 10,
          asNavFor: '.post-img-slider'
        });
         
        $('.post-img-slider').flexslider({
          animation: "slide",
          directionNav: false,
          controlNav: false,
          animationLoop: true,
          slideshow: false,
          sync: ".post-thumb-slider"
        });
      },
      CustomScript: function() {
        
        var head = $('.t-header').outerHeight();
        var banner = $('.banner.banner-sm').outerHeight();
        var opt = $('.nav-options').outerHeight();
        var win = $(window).outerHeight();

        var totalH = win-(head + opt);

        $('.map-view-wrapper iframe').height(totalH);
        $('.body-wrapper.pushed').height(win);

        $(window).resize(function() { 
         head = $('.t-header').outerHeight();
         banner = $('.banner.banner-sm').outerHeight();
         opt = $('.nav-options').outerHeight();
         win = $(window).outerHeight();

         totalH = win-(head + opt);

          $('.map-view-wrapper iframe').height(totalH);
          $('.body-wrapper.pushed').height(win-head);

          console.log(totalH);

        });

        $('.btn-advance').click(function(e) {

          $(this).text(function(i, text){
            return text === "retract search" ? "Advance Search" : "retract search";
          })
          $('.search-wrapper').toggleClass('advance-show');

           // testAnim('bounceInUp');

          e.preventDefault();

        });
        $('.search-close').click(function(e) {
          $('.search-wrapper').removeClass('advance-show');
          $('.btn-advance').text('Advance Search');
           e.preventDefault();

        });


        $('.navbar-toggle').click( function() {
          var menu_target = $(this).data('target');

          $('.body-wrapper').toggleClass('slide-left');
          $('.navbar-collapse').css('right','0');

          return false;

        });
        $('.map-view').click( function(e) {
            $('.map-view-wrapper').toggleClass('pushed');
            $('.body-wrapper').toggleClass('pushed');
            $('.body-wrapper').toggleClass('body-default');
            $('.body-wrapper.pushed').height(win-head);


            $(".nav-options .map-view").html("<span class='fa fa-map-marker'></span>Show map view<span class='fa fa-caret-right'></span>");
            $(".pushed .nav-options .map-view").html("<span class='fa fa-list-ul'></span>Show list view<span class='fa fa-caret-left'></span>");


            setTimeout(function(){

              $('.banner-sm').slideToggle('fast');

            }, 390);


            e.preventDefault();

        });
        $('.btn-close').click( function(e) {

          $('.body-wrapper').removeClass('slide-left');
          $('.navbar-collapse').css('right','-100%');

          e.preventDefault();

        });
        $('body').click( function(e) {

          $('.body-wrapper').removeClass('slide-left');
          $('.navbar-collapse').css('right','-100%');

        });


      },
    
    }
};

jQuery(document).ready(function() {
  	util.Global.init();
    util.Front.init();
});

})(jQuery);


