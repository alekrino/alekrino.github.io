/* Preloader */

$(function() {
  $(window).load(function() {
    setTimeout(function() {
      var fspagepreloader = $(".preloader");
      if (!fspagepreloader.hasClass("preloader_disable")) {
        fspagepreloader.removeClass("preloader_active");
        fspagepreloader.addClass("preloader_disable");
      }
    }, 1500);
  });
});


/* Preloader */

/* Top menu --block */

$(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 30) {
      $('#js-fixed').removeClass('container');
      $('#js-fixed').addClass('container_fixed');
    } else {
      $('#js-fixed').removeClass('container_fixed');
      $('#js-fixed').addClass('container');
    }
  });
});

/* Top menu --block */

/* Submenu */

$(function() {
  $('.menu__dropdown').mouseover(function() {
    $('.submenu').css("display", "block");
  });
  $('.menu__dropdown').mouseout(function() {
    $('.submenu').css("display", "none");
  });
});

/* END--Submenu */

/* Tabs */

$(function() {
  $(".link__tabs").on('click', function() {
    var tab = $(this).attr('tab');

    $('.link__tabs').siblings().removeClass('link__tabs_active');
    $('.link__tabs:eq(' + tab + ')').addClass('link__tabs_active');
    $('.steps__image-inner').removeClass('steps__image-inner_active');
    $('.steps__image-inner:eq(' + tab + ')').addClass('steps__image-inner_active');
    $('.icon__steps').removeClass('icon__steps_active');
    $('.icon__steps:eq(' + tab + ')').addClass('icon__steps_active');
    $('.tab__text').removeClass('tab_active');
    $('.tab__text:eq(' + tab + ')').addClass('tab_active');
  });
});

/* END--Tabs */

/* Portfolio-mousedown */

$(function() {
    $(".portfolio__image").mouseover(function() {
        var portfolioImage = $(this).attr('img-num');

        $(".portfolio-img__inner:eq(" + portfolioImage + ")").css("opacity", "1");
    });
    $(".portfolio__image").mouseout(function() {
      var portfolioImage = $(this).attr('img-num');

      $(".portfolio-img__inner:eq(" + portfolioImage + ")").css("opacity", "0");
    });
});

/* END--Portfolio-mousedown */

/* Phone mask */

var phone = document.querySelector('.contact__input_phone');

if (phone) {
    phone.addEventListener(
        'keydown',
        function(e) {
            if (!(e.key == 'ArrowLeft' || e.key == 'ArrowRight' || e.key == 'Backspace' || e.key == 'Tab')) {
                e.preventDefault();
            }

            var mask = '+7 (000) 000-00-00';

            if (/[0-9\+\ \-\(\)]/.test(e.key)) {
                var current = this.value;
                var length = current.length;

                if (/[0-9]/.test(e.key)) {
                    if (mask[length] == '0') {
                        this.value = current + e.key;
                    } else {
                        for (i = length; i < mask.length; i++) {
                            if (mask[i] == '0') {
                                this.value = current + e.key;
                                break;
                            }

                            current += mask[i];
                        }
                    }
                }
            }
        }
    );
}

/* END--Phone mask */

/* ArrowToTop */

$(function() {
    $(".go-top").hide();

    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $(".go-top").show();
        } else {
            $(".go-top").hide();
        }
    });

    $(".go-top").on('click', function() {
        $("body,html").animate({
            scrollTop: 0
        }, 900);
    });

});

/* END--ArrowToTop */

/* Mobile menu */

$(function() {

    var screenHeight = $("body").height();
    var headerHeight = $("header").height();
    var footerHeight = $(".container__form").height() + $("footer").height();

    $(window).scroll(function() {
        if ($(this).scrollTop() < (screenHeight - footerHeight) && $(this).scrollTop() > headerHeight) {
            $(".mobile-menu").css("position", "fixed");
        } else {
            $(".mobile-menu").css("position", "relative");
        }
    });

});

/* Mobile menu */

/* Page scrolling */

$(function() {
    $('[href*="#"]').on('click', function(e) {
        $('html,body').stop().animate({ scrollTop: $("#js-contactForm").offset().top }, 1000);
        e.preventDefault();
    });
});

/* END--Page scrolling */

/* Form-submit */

$(function() {
    $(".add-to-cart").on('click', function() {
        let siteType = $(this).attr('site-type');

        $("#js-siteType").val(siteType);
    });
});

$(function() {

    $("#js-form").on('submit', function(e) {
        e.preventDefault();

        var name = $("input[name='name']").val();
        var phone = $("input[name='phone']").val();
        var email = $("input[name='email']").val();
        var userText = $("textarea[name='user-text']").val();
        var orderFrom = $("input[name='order-from']").val();
        var siteType = $("#js-siteType").val();
        var orderData = [name, phone, email, userText, orderFrom, siteType];

        
    });

});

/* END--Form-submit */

/* GetDate */

$(function() {
    var dateFormat = $("#js-date").attr('data-dateFormat');

            $("#js-date").text('2019');
});

/* END--GetDate */

/* WOW-JS */

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    console.log('no WOW');
} else {
    new WOW().init();
}

/* END--WOW-JS */
