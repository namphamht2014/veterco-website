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
    $('html, body').animate({ scrollTop: $("#"+article).offset().top });

    $('.khop ul li div').removeClass('active');
    element.childNodes[1].className = 'active';
  },
  hover: function (element) {
    element.nextElementSibling.childNodes[1].style.width = '280px';
    element.nextElementSibling.childNodes[[3]].style.opacity = '1';
  },
  unhover: function (element) {
    element.nextElementSibling.childNodes[1].style.width = '242px';
    element.nextElementSibling.childNodes[[3]].style.opacity = '0';
  }
};
var labBlock = {
  hover: function(element){
    $(element).addClass('active');
  },
  blur: function(element){
    $(element).removeClass('active');
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
        whiteArrow.attr('style', 'bottom:75px;border-top: 10px solid transparent;border-bottom: 10px solid white;animation: moveUp .5s infinite;');
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
//calculate background of object
function bground(height) {
  this.height = height;
  this.calcByHeight = function (newHeight) {
    var heightInPercent = (newHeight * 100) / this.height;

    this.height = Math.round(this.height * (heightInPercent / 100));
  };
}

function myWindow(height) {
  this.height = height;
  this.getPercent = function (scrolled) {
    return (scrolled * 100) / this.height;
  };
}

var lastScrollTop = 0;
$(function(){
  var windowHeight = $(window).height();
  //khop 1 background width and height
  var khop1_bg_height = 815;
  var khop1bg = new bground(khop1_bg_height);
  khop1bg.calcByHeight(windowHeight);
  $('.first-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.search-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.hello-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.lab-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.lab2-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.lab-img-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.served-container').attr('style', 'height: '+(khop1bg.height * 2)+'px;');
  $('.served-article').attr('style', 'height: '+(khop1bg.height * 2)+'px;');

  var circleWidth = khop1bg.height - 62;
  $('.served-article .circle').attr('style', 'height: '+circleWidth+'px;width: '+circleWidth+'px;margin-left: -'+(circleWidth / 2)+'px;');

  $('.distribution-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.vietnam-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.leading-article').attr('style', 'height: '+(khop1bg.height * 2)+'px;');
  $('.leading-bg').attr('style', 'height: '+khop1bg.height+'px;');
  $('.value-article-container').attr('style', 'height: '+(khop1bg.height * 6)+'px;');
  $('.value-article').attr('style', 'height: '+khop1bg.height+'px;');
  $('.thank-article').attr('style', 'height: '+(khop1bg.height - 63)+'px;');

  var total_height = khop1bg.height * 18;
  var new_total_height = $('.first-article').height();
  new_total_height += $('.search-article').height();
  new_total_height += $('.hello-article').height();
  new_total_height += $('.lab-article').height();
  new_total_height += $('.lab2-article').height();
  new_total_height += $('.lab-img-article').height();
  new_total_height += $('.served-article').height();
  new_total_height += $('.distribution-article').height();
  new_total_height += $('.vietnam-article').height();
  new_total_height += $('.leading-article').height();
  new_total_height += $('.value-article-container').height();
  new_total_height += $('.thank-article').height();
  // console.log('total height: '+total_height);
  // console.log('new total height: '+new_total_height);
  var windowTotalHeight = new myWindow(new_total_height);

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
        $('.circle-content3-left').parent().removeClass('no-indent');
      }
    },
    startBlock2: function () {
      $('.circle-content').html('<b>YEARS</b> OF <b>CONTINUOUS INNOVATION</b>');
      $('.circle-content2-left').html('<b class="circle-text-bold">DRUG</b>');
      $('.circle-content2-right').text('COMBINATION TESTED');
      $('.circle-content3-left').parent().addClass('no-indent');
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
     var st = $(window).scrollTop();
    //  console.log(windowTotalHeight.getPercent(st));
     //header menus
     if (windowTotalHeight.getPercent(st) >= 5) {
       $('header').addClass('show');
     }else{
       $('header').removeClass('show');
     }
    /*Lab*/
    if (windowTotalHeight.getPercent(st) >= 19 && windowTotalHeight.getPercent(st) < 21) {
      $('.lab2-article .block1').addClass('move');
      $('.lab2-article .block2').addClass('move');
      $('.lab2-article .block3').addClass('move');
      $('.lab2-article .block4').addClass('move');
    }else if (windowTotalHeight.getPercent(st) < 19) {
      $('.lab2-article .block1').removeClass('move');
      $('.lab2-article .block2').removeClass('move');
      $('.lab2-article .block3').removeClass('move');
      $('.lab2-article .block4').removeClass('move');
    }
    /*Lab - end*/
     //Served
     if (windowTotalHeight.getPercent(st) >= 28 && windowTotalHeight.getPercent(st) < 32) {
       articleServed.startBlock1();
     }else if (windowTotalHeight.getPercent(st) >= 35.84) {
         articleServed.startBlock2();
     }

     if(windowTotalHeight.getPercent(st) < 31.26){
       $('.served-article .circle').removeClass('circle-bottom circle-fixed');
     }else if (windowTotalHeight.getPercent(st) >= 31.26 && windowTotalHeight.getPercent(st) < 36.83) {
       $('.served-article .circle').removeClass('circle-bottom').addClass('circle-fixed');
     }else if (windowTotalHeight.getPercent(st) >= 36.83) {
       $('.served-article .circle').removeClass('circle-fixed').addClass('circle-bottom');
     }
     //Vietnam
     if (windowTotalHeight.getPercent(st) >= 44.62) {
       $('.vietnam-article').attr('style', 'height: '+khop1bg.height+'px;background-size: 110% 110%;');
     }else if (windowTotalHeight.getPercent(st) < 44.62) {
       $('.vietnam-article').attr('style', 'height: '+khop1bg.height+'px;background-size: 100% 100%;');
     }
    /*leading*/
    var leading = $('.leading-article .leading-bg');
    var leadingContent = $('.leading-article .content1');
    var leadingRect = $('.leading-article .white-rec');
    if (windowTotalHeight.getPercent(st) < 55.22) {
      leading.removeClass('fixed');
    } else if (windowTotalHeight.getPercent(st) >= 55.22 && windowTotalHeight.getPercent(st) < 61.1) {
      if (windowTotalHeight.getPercent(st) > 58) {
        leadingContent.css({"opacity":0});
        leading.css({"background-position-y": "100%"});
        if (!leadingRect.hasClass('open')) {
          leadingRect.addClass('open');
        }
      }else{
        leading.css({"background-position-y": "0"});
        leadingContent.css({"opacity":1});
        leadingRect.removeClass('open');
      }
      leading.removeClass('bottom').addClass('fixed');
    }else if (windowTotalHeight.getPercent(st) >= 57.22){
      leading.removeClass('fixed').addClass('bottom');
    }
    /*leading - end*/

    if (windowTotalHeight.getPercent(st) < 66.31) {
      articleBlock.top();
    } else if(windowTotalHeight.getPercent(st) >= 66.31 && windowTotalHeight.getPercent(st) < 94.42){
      articleBlock.fixed();
      if (st > lastScrollTop){
        // downscroll code
        articleBlock.scroll("down");
      } else {
        // upscroll code
        articleBlock.scroll("up");
      }
      lastScrollTop = st;
    }else if(windowTotalHeight.getPercent(st) >= 94.42){
      articleBlock.bottom();
    }

    //active cac khop

    if (windowTotalHeight.getPercent(st) < 5.3) {
      //active khop1
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop1').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 5.3 && windowTotalHeight.getPercent(st) < 10.8) {
      //active khop2
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop2').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 10.8 && windowTotalHeight.getPercent(st) < 17.2) {
      //active khop3
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop3').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 17.2 && windowTotalHeight.getPercent(st) < 22.1) {
      //active khop4
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop4').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 22.1 && windowTotalHeight.getPercent(st) < 27.6) {
      //active khop5
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop5').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 27.6 && windowTotalHeight.getPercent(st) < 33) {
      //active khop6
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop6').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 33 && windowTotalHeight.getPercent(st) < 44.5) {
      //active khop7
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop7').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 44.5 && windowTotalHeight.getPercent(st) < 50) {
      //active khop8
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop8').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 50 && windowTotalHeight.getPercent(st) < 55.4) {
      //active khop9
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop9').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 55.4 && windowTotalHeight.getPercent(st) < 66.6) {
      //active khop10
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop10').addClass('active');
    }else if (windowTotalHeight.getPercent(st) > 55.4 && windowTotalHeight.getPercent(st) < 99.5) {
      //active khop11
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop11').addClass('active');
    }else{
      $('.khop ul li div').removeClass('active');
      $('.khop ul li div.khop12').addClass('active');
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


jQuery(window).load(function () {
  //hide loading page
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();

    var logo_run = '-webkit-transition: all 2s ease-in-out;-moz-transition: all 2s ease-in-out;-o-transition: all 2s ease-in-out;transition: all 2s ease-in-out;';
    setTimeout(function() {
      $('#logo1').attr('style', logo_run);
      $('#logo2').attr('style', logo_run);
      $('#logo3').attr('style', logo_run);
      $('#logo4').attr('style', logo_run);
      $('#logo5').attr('style', logo_run);
      $('#logo6').attr('style', logo_run);
      $('#logo7').attr('style', logo_run);
    }, 0);

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
    /*setTimeout(function() {
      $('div.desc-content').attr('style', 'opacity:1;');
    }, 3500);*/
    /*Menus - end*/
  }, 500);
});
