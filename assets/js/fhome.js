var header = {
  hover: function (element) {
    element.childNodes[1].childNodes[1].style.display = "block";
  },
  unhover: function (element) {
    element.childNodes[1].childNodes[1].style.display = "none";
  }
};
var menus = {
  scrollTo: function (article, element) {
    var articlePos = 0;
    if (article == 1) {
      articlePos = "800px";
    }else if (article == 2) {
      articlePos = "2445px";
    }

    $('html, body').animate({ scrollTop: articlePos });
    $('.khop ul li div').removeClass('active');
    element.childNodes[1].className = 'active';
  },
  hover: function (element) {
    element.nextElementSibling.childNodes[1].style.width = '280px';
  },
  unhover: function (element) {
    element.nextElementSibling.childNodes[1].style.width = '242px';
  }
};
var logo = {
  run: function () {
    $("#logo1").addClass('logo1-run');
    setTimeout(function() {
      $("#logo1").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin-left': '138px',
          'margin-top': '1px'
      });
    }, 100);
    setTimeout(function() {
      $("#logo2").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin-left': '94px',
          'margin-top': '-42px'
      });
    }, 150);
    setTimeout(function() {
      $("#logo3").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin-left': '93px',
          'margin-top': '-105px'
      });
    }, 200);
    setTimeout(function() {
      $("#logo4").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin-left': '93px',
          'margin-top': '-25px'
      });
    }, 250);
    setTimeout(function() {
      $("#logo5").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin': '-284px 0 0 -100px'
      });
    }, 300);
    setTimeout(function() {
      $("#logo6").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin': '-215px 0 0 -98px'
      });
    }, 350);
    setTimeout(function() {
      $("#logo7").css({
          'opacity': '1',
          '-webkit-transform': 'rotate(360deg)',
          '-moz-transform': 'rotate(360deg)',
          '-ms-transform': 'rotate(360deg)',
          '-o-transform': 'rotate(360deg)',
          'transform': 'rotate(360deg)',
          'margin': '-95px 0 0 61px'
      });
    }, 400);
  }
};
var dropdown = {
  changed: function (menuName, value) {
    document.getElementById(menuName).textContent = value;
  }
};
var hello = {
  stopTimer: false,
  moved: true,
  move: function (argument) {
    var animateBox = $('.hello-article .boxAnimate');
    var animateBox2 = $('.hello-article .boxAnimate2');
    var diamondBox = $('.hello-article .myDiamond');
    var whiteArrow = $('.hello-article .white-arrow');
    var descBox = $('.hello-article .desc');

    hello.moved = !hello.moved;
    if (hello.moved) {
      animateBox.removeClass('move');
      animateBox2.removeClass('move');

      setTimeout(function() {
        animateBox.hide();
        animateBox2.hide();
        diamondBox.attr('style', 'background: url(../assets/images/hello-rec1.png)');
        whiteArrow.attr('style', 'margin-top:173px;border-top: 10px solid white;border-bottom: 10px solid transparent;');
        descBox.removeClass('move');
      }, 500);
    }else{
      animateBox.show();
      animateBox2.show();

      setTimeout(function() {
        animateBox.addClass('move');
        animateBox2.addClass('move');
      }, 100);
      setTimeout(function() {
        whiteArrow.attr('style', 'margin-top:163px;border-top: 10px solid transparent;border-bottom: 10px solid white;');
        diamondBox.attr('style', 'background: url(../assets/images/hello-rec2.png)');
        descBox.addClass('move');
      }, 500);
    }
  },
  animate: function (stop) {
    var whiteArrow = $('.hello-article .white-arrow');
    var timer = setInterval(function () {
      if (hello.stopTimer) {
        clearInterval(timer);
      }

      if (hello.moved) {
        if (whiteArrow.hasClass('move2')) {
          whiteArrow.removeClass('move2');
        }
        return (whiteArrow.hasClass('move')) ? whiteArrow.removeClass('move') : whiteArrow.addClass('move');
      } else {
        if (whiteArrow.hasClass('move')) {
          whiteArrow.removeClass('move');
        }

        return (whiteArrow.hasClass('move2')) ? whiteArrow.removeClass('move2') : whiteArrow.addClass('move2');
      }
    }, 200);
  }
};
var lastScrollTop = 0;
$(function(){
  setTimeout(function() {
    logo.run();
  }, 100);
  /*Menus*/
  setTimeout(function() {
    $('div.desc-line').attr('style', 'width:280px');
    setTimeout(function() {
      $('div.desc-line').attr('style', 'width:242px');
    }, 800);
  }, 2200);
  setTimeout(function() {
    $('div.desc-content').attr('style', 'opacity:1;');
  }, 3500);
  /*Menus - end*/

  /*
  served
   */
  var articleServed = {
    block1Started: false,
    block2Started: false,
    startBlock1: function () {
      $('.circle-content').html('<b>PRODUCTS</b> WITH <b>IMPRESSIVE FORMULAS</b>');
      $('.circle-content2-left').html('<b class="circle-text-bold">HOURS</b> OF');
      $('.circle-content2-right').text('R&D FARM TESTING');
      $('.circle-content3-left b').text('ANIMAL');
      $('.circle-content3-right').text('NUTRITION STUDIES');

      if (!articleServed.block1Started) {
        articleServed.block1Started = true;

        articleServed.counting($(".circle-number1"), 332, false);
        articleServed.counting($(".circle-number2"), 720000, true);
        articleServed.counting($(".circle-number3"), 5000, true);
      }else{
        $(".circle-number1").text('332');
        $(".circle-number2").text('720,000');
        $(".circle-number3").text('5,000');
      }
    },
    startBlock2: function () {
      $('.circle-content').html('<b>YEARS</b> OF <b>CONTINUOUS INNOVATION</b>');
      $('.circle-content2-left').html('<b class="circle-text-bold">DRUG</b>');
      $('.circle-content2-right').text('COMBINATION TESTED');
      $('.circle-content3-left b').text('GOAL - ');
      $('.circle-content3-right').text('IN PURSUIT OF EXCELENTCE');

      if (!articleServed.block2Started) {
        articleServed.block2Started = true;

        articleServed.counting($(".circle-number1"), 22, false);
        articleServed.counting($(".circle-number2"), 1200, true);
        articleServed.counting($(".circle-number3"), 1, false);
      }else{
        $(".circle-number1").text('22');
        $(".circle-number2").text('1,200');
        $(".circle-number3").text('1');
      }
    },
    counting: function (element, value, addCommas) {
      $({percentage: 0}).stop(true).animate({percentage: value}, {
          duration : 2000,
          easing: "easeOutExpo",
          step: function () {
              var percentageVal = Math.round(this.percentage);

              if (addCommas) {
                element.text(articleServed.addCommas(percentageVal));
              } else {
                element.text(percentageVal);
              }
          }
      }).promise().done(function () {
        if (addCommas) {
          element.text(articleServed.addCommas(value));
        } else {
          element.text(value);
        }
      });
    },
    addCommas:function (nStr) {
         nStr += "";
         var x, x1, x2, rgx;
         x = nStr.split(".");
         x1 = x[0];
         x2 = x.length > 1 ? "." + x[1] : "";
         rgx = /(\d+)(\d{3})/;
         while (rgx.test(x1)) {
             x1 = x1.replace(rgx, "$1,$2");
         }
         return x1 + x2;
     }
  };

  /*
  served - end
   */
   $(window).scroll(function(){
     var st = $("body").scrollTop();

     //header menus
     if (st >= 680) {
       $('header').addClass('show');
     }else{
       $('header').removeClass('show');
     }
     /* hello */
     if (st >= 850 && st < 2240) {
       hello.stopTimer = false;
       hello.animate(false);
     }else{
       hello.stopTimer = true;
     }
     /* hello - end */
    /*Lab*/
    if (st >=2900) {
      $('.lab2-article .block1').addClass('move');
      $('.lab2-article .block2').addClass('move');
      $('.lab2-article .block3').addClass('move');
      $('.lab2-article .block4').addClass('move');
    }else if (st < 2900) {
      $('.lab2-article .block1').removeClass('move');
      $('.lab2-article .block2').removeClass('move');
      $('.lab2-article .block3').removeClass('move');
      $('.lab2-article .block4').removeClass('move');
    }
    /*Lab - end*/
    /*leading*/
    var leading = $('.leading-article .leading-bg');
    var leadingContent = $('.leading-article .content1');
    var leadingRect = $('.leading-article .white-rec');
    if (st < 8088) {
      leading.removeClass('fixed');
    } else if (st >= 8088 && st < 8900) {
      if (st > 8400) {
        leadingContent.css({"opacity":0});
        leading.css({"background-position-y": "810px"});
        if (!leadingRect.hasClass('open')) {
          leadingRect.addClass('open');
        }
      }else{
        leading.css({"background-position-y": "0"});
        leadingContent.css({"opacity":1});
        leadingRect.removeClass('open');
      }
      leading.removeClass('bottom').addClass('fixed');
    }else if (st >= 8900){
      leading.removeClass('fixed').addClass('bottom');
    }
    /*leading - end*/
     //Served
     var servedPos = st - 4824;
     if (st > 4200 && st < 4820) {
       articleServed.startBlock1();
     }else if (st > 5360) {
         articleServed.startBlock2();
     }

     if(st < 4860){
       $('.served-article .circle').removeClass('circle-bottom circle-fixed');
     }else if (st > 4860 && st < 5636) {
       $('.served-article .circle').removeClass('circle-bottom').addClass('circle-fixed');
     }else if (st > 5636) {
       $('.served-article .circle').removeClass('circle-fixed').addClass('circle-bottom');
     }
     //Vietnam
     if (st >= 7000) {
       $('.vietnam-article').attr('style', 'background-size: 101%;');
     }else if (st < 7000) {
       $('.vietnam-article').attr('style', 'background-size: 100%;');
     }
    if (st < 9720) {
      articleBlock.top();
    } else if(st <= 10640 && st >= 9720){
      articleBlock.fixed();

      if (st > lastScrollTop){
        // downscroll code
        articleBlock.scroll("down");
      } else {
        // upscroll code
        articleBlock.scroll("up");
      }
      lastScrollTop = st;
    }else if(st >= 10657){
      articleBlock.bottom();
    }
  }).scroll();
});
var articleBlock = {
  lastPos: 0,
  currentPos: 0,
  height: 1748,
  start: 748,
  element: $("article.value-article"),
  isFixed: false,
  top: function () {
    articleBlock.isFixed = false;
    articleBlock.element.removeClass("value-article-fixed value-article-bottom");
  },
  fixed: function () {
    if (!articleBlock.isFixed) {
      articleBlock.isFixed = true;

      articleBlock.element
      .removeClass("value-article-bottom value-article-fixed")
      .addClass("value-article-fixed");
    }
  },
  bottom: function () {
    articleBlock.isFixed = false;
    articleBlock.element
    .removeClass("value-article-fixed")
    .addClass("value-article-bottom");
  },
  scroll: function (direction) {
      $("body").removeClass("play play2");
      var aa = $("ul.secondPlay li.active");

      if (aa.html() === undefined) {
          aa = $("ul.secondPlay li").eq(0);
          aa.addClass("before")
              .removeClass("active")
              .next("li")
              .addClass("active")
              .closest("body")
              .addClass("play");
      }
      else if (aa.is(":first-child")) {
        // $("article.value-article").removeClass("value-article-fixed value-article-bottom");
          $("ul.secondPlay li").removeClass("before active");
          // aa.addClass("before").removeClass("active");
          // aa = $("ul.secondPlay li").eq(0);
          // aa.addClass("active")
          //     .closest("body")
          //     .addClass("play");
      }
      else if (aa.is(":last-child")) {
        // $("article.value-article").removeClass("value-article-fixed").addClass("value-article-bottom");
          $("ul.secondPlay li").removeClass("before active");
          // aa.addClass("before").removeClass("active");
          // aa = $("ul.secondPlay li").eq(0);
          // aa.addClass("active")
          //     .closest("body")
          //     .addClass("play");
      }
      else {
          $("ul.secondPlay li").removeClass("before");
          if(direction == "down"){
            aa.addClass("before")
                .removeClass("active")
                .next("li")
                .addClass("active")
                .closest("body")
                .addClass("play");
          }else{
            aa.addClass("before")
                .removeClass("active")
                .prev("li")
                .addClass("active")
                .closest("body")
                .addClass("play2");
          }
      }
  }
};
