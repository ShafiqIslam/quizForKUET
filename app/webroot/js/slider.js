/**
 *  * Created by dracon on 28.02.2016.
 *  */

(function ($) {
  $.fn.dsSlider = function (options) {

    var defaults = {
      duration: 10000,
      direction: "right"
    };

    //Extend default options
    var options = $.extend(defaults, options);


    return this.each(function () {
      var obj = $(this);
      loopItems(obj);
    });


    function slideLeft(obj) {
      var $active = $(obj).find('li.active');
      if ($active.length == 0) $active = $(obj).find('li:last');
      //Er active.next() > 0?
      var $next = $active.next().length ? $active.next()
          : $(obj).find('li:first');
      $active.addClass('last-active')
          .animate({opacity: 0.0}, (options.duration / 4));
      $next.css({opacity: 0.0})
          //.css({"transform": "translateX(-100%)"})
          .addClass('active slide-left')
          //.animate({"transform":"translateX(100%)"},{queue: false, duration: 1000})
          .animate({opacity: 1.0}, 2000, function () {
            console.log('Jeg er her!');
            $active.removeClass('active last-active slide-left');
          })
      ;
    }

    function slideRight(obj) {
      var $active = $(obj).find('li.active');
      if ($active.length == 0) $active = $(obj).find('li:last');
      var $next = $active.next().length ? $active.next()
          : $(obj).find('li:first');
      $active.addClass('last-active')
          .animate({opacity: 0.0}, options.duration / 4);
      $next.css({opacity: 0.0})
          .addClass('active slide-right')
          .animate({opacity: 1.0}, 2000, function () {
            console.log('Jeg er her!');
            $active.removeClass('active last-active slide-right');
          })
      ;
    }


    function loopItems(obj) {
      setInterval(function () {
        if (options.direction === "left") {
          $(obj).children().css({left: "-100%"});
          slideLeft(obj);
        }
        if (options.direction === "right"){
          $(obj).children().css({left: "+100%"});
          slideRight(obj);
        }
      }, options.duration); //TODO: dynamisk duration
    }
  };
})(jQuery);



