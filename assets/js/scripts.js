// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.



/*
    HW Slider - простой слайдер на jQuery.
    Настройки скрипта:
    hwSlideSpeed - Скорость анимации перехода слайда.
    hwTimeOut - время до автоматического перелистывания слайдов.
    hwNeedLinks - включает или отключает показ ссылок "следующий - предыдущий". Значения true или false
    */
(function($) {
  var hwSlideSpeed = 100;
  var hwTimeOut = 3000;
  var hwNeedLinks = true;

  $(document).ready(function(e) {
    $('.slide').css({
      "position": "absolute",
      "top": '0',
      "left": '0'
    }).hide().eq(0).show();
    var slideNum = 0;
    var slideTime;
    slideCount = $("#slider .slide").size();
    var animSlide = function(arrow) {
      clearTimeout(slideTime);
      $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
      if (arrow == "next") {
        if (slideNum == (slideCount - 1)) {
          slideNum = 0;
        } else {
          slideNum++
        }
      } else if (arrow == "prew") {
        if (slideNum == 0) {
          slideNum = slideCount - 1;
        } else {
          slideNum -= 1
        }
      } else {
        slideNum = arrow;
      }
      $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
      $(".control-slide.active").removeClass("active");
      $('.control-slide').eq(slideNum).addClass('active');
    }
    if (hwNeedLinks) {
      var $linkArrow = $('<a id="prewbutton" href="#">&lt;</a><a id="nextbutton" href="#">&gt;</a>')
        .prependTo('#slider');
      $('#nextbutton').click(function() {
        animSlide("next");
        return false;
      })
      $('#prewbutton').click(function() {
        animSlide("prew");
        return false;
      })
    }
    var $adderSpan = '';
    $('.slide').each(function(index) {
      $adderSpan += '<span class = "control-slide">' + index + '</span>';
    });
    $('<div class ="sli-links">' + $adderSpan + '</div>').appendTo('#slider-wrap');
    $(".control-slide:first").addClass("active");
    $('.control-slide').click(function() {
      var goToNum = parseFloat($(this).text());
      animSlide(goToNum);
    });
    var pause = false;
    var rotator = function() {
      if (!pause) {
        slideTime = setTimeout(function() {
          animSlide('next')
        }, hwTimeOut);
      }
    }
    $('#slider-wrap').hover(
      function() {
        clearTimeout(slideTime);
        pause = true;
      },
      function() {
        pause = false;
        rotator();
      });
    rotator();
  });
})(jQuery);



// show and hide sub menu
$(function() {
  $('nav ul li').hover(
    function() {
      //show its submenu
      $('ul', this).slideDown(150);
    },
    function() {
      //hide its submenu
      $('ul', this).slideUp(150);
    }
  );
});
//end


$(document).ready(function() {

  function hideallDropdowns() {
    $(".dropped .drop-menu-main-sub").hide();
    $(".dropped").removeClass('dropped');
    $(".dropped .drop-menu-main-sub .title").unbind("click");
  }

  function showDropdown(el) {
    var el_li = $(el).parent().addClass('dropped');
    el_li
      .find('.title')
      .click(function() {
        hideallDropdowns();
      })
      .html($(el).html());

    el_li.find('.drop-menu-main-sub').show();
  }

  $(".drop-down").click(function() {
    showDropdown(this);
  });

  $(document).mouseup(function() {
    hideallDropdowns();
  });
});


$(document).ready(function() {

  $('.menu_midle > a').click(function() {
    var idItem = /(menu_)(\S+)/ig;
    var Array1 = idItem.exec($(this).parent().attr('id'));
    var nID = '#sub_menu_' + (Array1[2]);

    $('.blockSubMenuHor').hide();
    $(nID).show('slow');
    return false;
  });
});

//sidebar
(function($) {
  $(document).ready(function() {

    $('#menu li.has-sub>a').on('click', function() {
      $(this).removeAttr('href');
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp();
      } else {
        element.addClass('open');
        element.children('ul').slideDown();
        element.siblings('li').children('ul').slideUp();
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp();
      }
    });

    $('#menu>ul>li.has-sub>a').append('<span class="holder"></span>');

    (function getColor() {
      var r, g, b;
      var textColor = $('#menu').css('color');
      textColor = textColor.slice(4);
      r = textColor.slice(0, textColor.indexOf(','));
      textColor = textColor.slice(textColor.indexOf(' ') + 1);
      g = textColor.slice(0, textColor.indexOf(','));
      textColor = textColor.slice(textColor.indexOf(' ') + 1);
      b = textColor.slice(0, textColor.indexOf(')'));
      var l = rgbToHsl(r, g, b);
      if (l > 0.7) {
        $('#menu>ul>li>a').css('text-shadow', '0 1px 1px rgba(0, 0, 0, .35)');
        $('#menu>ul>li>a>span').css('border-color', 'rgba(0, 0, 0, .35)');
      } else {
        $('#menu>ul>li>a').css('text-shadow', '0 1px 0 rgba(255, 255, 255, .35)');
        $('#menu>ul>li>a>span').css('border-color', 'rgba(255, 255, 255, .35)');
      }
    })();


    function rgbToHsl(r, g, b) {
      r /= 255, g /= 255, b /= 255;
      var max = Math.max(r, g, b),
        min = Math.min(r, g, b);
      var h, s, l = (max + min) / 2;

      if (max == min) {
        h = s = 0;
      } else {
        var d = max - min;
        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
        switch (max) {
          case r:
            h = (g - b) / d + (g < b ? 6 : 0);
            break;
          case g:
            h = (b - r) / d + 2;
            break;
          case b:
            h = (r - g) / d + 4;
            break;
        }
        h /= 6;
      }
      return l;
    }

    $("#menu .current-menu-item > a").click();

  });
})(jQuery);


