var header = {
  hover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "block";
    }
  },
  unhover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "none";
    }
  },
  active: function (menuID) {
    $('header ul li').removeClass('active');
    $('header ul li#'+menuID).addClass('active');
  }
};
var myPopup = {
  show: function () {
    setTimeout(function() {
      $('.myPopup').show();
    }, 200);
  },
  hide: function () {
    $('.myPopup').hide();
  }
};
var controlsBtns = {
  itemID: 1,
  init: function (sliderSelector, mySelector, type) {
    var _this = this;
    $(mySelector).mouseenter(function () {
      $(this).find('.hover').css('top', '-100%');
      $(this).find('.unhover').css('top', '0%');

      if (type == 'next') {
        _this.itemID--;
        if ($(sliderSelector+' #item'+_this.itemID).length) {
          $(sliderSelector+' #item'+(_this.itemID + 1)).attr('style', 'right: -100%;');
          $(sliderSelector+' #item'+_this.itemID).attr('style', 'right: 0;');
          return;
        }
        _this.itemID++;
      }else if (type =='prev') {
        _this.itemID++;
        if ($(sliderSelector+' #item'+_this.itemID).length) {
          $(sliderSelector+' #item'+(_this.itemID - 1)).attr('style', 'right: 100%;');
          $(sliderSelector+' #item'+_this.itemID).attr('style', 'right: 0;');
          return;
        }
        _this.itemID--;
      }
    });
    $(mySelector).mouseleave(function () {
      $(this).find('.hover').css('top', '0%');
      $(this).find('.unhover').css('top', '100%');
    });
    $(mySelector).click(function () {
      if (type == 'next') {
        _this.itemID--;
        if ($(sliderSelector+' #item'+_this.itemID).length) {
          $(sliderSelector+' #item'+(_this.itemID + 1)).attr('style', 'right: -100%;');
          $(sliderSelector+' #item'+_this.itemID).attr('style', 'right: 0;');
          return;
        }
        _this.itemID++;
      }else if (type =='prev') {
        _this.itemID++;
        if ($(sliderSelector+' #item'+_this.itemID).length) {
          $(sliderSelector+' #item'+(_this.itemID - 1)).attr('style', 'right: 100%;');
          $(sliderSelector+' #item'+_this.itemID).attr('style', 'right: 0;');
          return;
        }
        _this.itemID--;
      }
    });
  },
  plusInit: function (mySelector, textSelector) {
    var _this = this;
    var msgOpened = false;

    $(mySelector).mouseenter(function () {
      $(this).find('.btnPlus img').css('bottom', '100%');
      $(this).find('.btnMinus img').css('bottom', '0%');
    });
    $(mySelector).mouseleave(function () {
      $(this).find('.btnPlus img').css('bottom', '0%');
      $(this).find('.btnMinus img').css('bottom', '-100%');
    });

    $(mySelector).click(function () {
      var textID = $(this).attr('id');
      if($(textSelector+'.text'+textID).css('display') == 'block'){
        msgOpened = true;
      }else if ($(textSelector+'.text'+textID).css('display') == 'none') {
        msgOpened = false;
      }else if(textSelector === undefined){
        msgOpened = !msgOpened;
      }

      $(textSelector).hide();
      $(mySelector).find('.btnPlus img').attr('src', '/assets/images/workplace-btn-plus.jpg');
      $(mySelector).find('.btnMinus img').attr('src', '/assets/images/workplace-btn-plus-black.jpg');

      if (msgOpened) {
        $(textSelector+'.text'+textID).hide();

        $(this).find('.btnPlus img').attr('src', '/assets/images/workplace-btn-plus.jpg');
        $(this).find('.btnMinus img').attr('src', '/assets/images/workplace-btn-plus-black.jpg');
      }else {
        $(textSelector+'.text'+textID).show();

        $(this).find('.btnPlus img').attr('src', '/assets/images/workplace-btn-minus.jpg');
        $(this).find('.btnMinus img').attr('src', '/assets/images/workplace-btn-minus-black.jpg');
      }
    });
  },
  plusInit2: function (mySelector) {
    $(mySelector+' .btnPlus').mouseenter(function () {
      $(this).attr('style', 'bottom: 51px;');
      $(mySelector+' .btnMinus').attr('style', 'bottom: 0px;');
    });
    $(mySelector+' .btnMinus').mouseleave(function () {
      $(this).attr('style', 'bottom: -51px;');
      $(mySelector+' .btnPlus').attr('style', 'bottom: 0px;');
    });
  }
};
jQuery(window).load(function () {
  var winWidth = $(window).width();

  var mainBlocks = $('.workplaceContainer');
  mainBlocks.removeClass('small big biggest');
  if(winWidth >= 2738){
    mainBlocks.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    mainBlocks.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    mainBlocks.addClass('small');
  }

  $('header ul li').removeClass('active');
  $('header ul li#workplace').addClass('active');
  $("header").removeClass("header").addClass("headerFixed");

  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  /* WHO WE ARE? */
  controlsBtns.plusInit2('.child2 .row2 .buttons');
  controlsBtns.plusInit2('.child2 .row3 .block .buttons');
  controlsBtns.plusInit2('.child2 .row3 .block-float .buttons');
  controlsBtns.plusInit2('.child2 .row4 .buttons');


  controlsBtns.init('.child2 .row2 .mySlider', '.child2 .row2 .mySlider .controls .btnNext', 'next');
  controlsBtns.init('.child2 .row2 .mySlider', '.child2 .row2 .mySlider .controls .btnPrev', 'prev');
  controlsBtns.init('.child2 .row3 .mySlider', '.child2 .row3 .mySlider .controls .btnNext', 'next');
  controlsBtns.init('.child2 .row3 .mySlider', '.child2 .row3 .mySlider .controls .btnPrev', 'prev');
  controlsBtns.init('.child2 .row4 .mySlider.alone', '.child2 .row4 .mySlider.alone .controls .btnNext', 'next');
  controlsBtns.init('.child2 .row4 .mySlider.alone', '.child2 .row4 .mySlider.alone .controls .btnPrev', 'prev');
  controlsBtns.init('.child2 .row4 .mySlider.mySlider-float', '.child2 .row4 .mySlider.mySlider-float .controls .btnNext', 'next');
  controlsBtns.init('.child2 .row4 .mySlider.mySlider-float', '.child2 .row4 .mySlider.mySlider-float .controls .btnPrev', 'prev');
  // var itemID = 1;
  // $('.child2 .row2 .mySlider .btnPrev').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //
  //   itemID++;
  //   if ($('.child2 .row2 .mySlider #item'+itemID).length) {
  //     $('.child2 .row2 .mySlider .items').attr('style', 'right: 100%;');
  //     $('.child2 .row2 .mySlider #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID--;
  // });
  // $('.child2 .row2 .mySlider .btnPrev').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row2 .mySlider .btnNext').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID--;
  //   if ($('.child2 .row2 .mySlider #item'+itemID).length) {
  //     $('.child2 .row2 .mySlider .items').attr('style', 'right: -100%;');
  //     $('.child2 .row2 .mySlider #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID++;
  // });
  // $('.child2 .row2 .mySlider .btnNext').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row2 .btnPlus').mouseover(function () {
  //   $(this).attr('style', 'bottom: 51px;');
  //   $('.child2 .row2 .btnMinus').attr('style', 'bottom: 0px;');
  // });
  // $('.child2 .row2 .btnMinus').mouseout(function () {
  //   $(this).attr('style', 'bottom: -51px;');
  //   $('.child2 .row2 .btnPlus').attr('style', 'bottom: 0px;');
  // });
  //
  //
  // $('.child2 .row3 .mySlider .btnPrev').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID++;
  //   if ($('.child2 .row3 .mySlider #item'+itemID).length) {
  //     $('.child2 .row3 .mySlider .items').attr('style', 'right: 100%;');
  //     $('.child2 .row3 .mySlider #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID--;
  // });
  // $('.child2 .row3 .mySlider .btnPrev').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row3 .mySlider .btnNext').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID--;
  //   if ($('.child2 .row3 .mySlider #item'+itemID).length) {
  //     $('.child2 .row3 .mySlider .items').attr('style', 'right: -100%;');
  //     $('.child2 .row3 .mySlider #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID++;
  // });
  // $('.child2 .row3 .mySlider .btnNext').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row3 .block .btnPlus').mouseover(function () {
  //   $(this).attr('style', 'bottom: 51px;');
  //   $('.child2 .row3 .block .btnMinus').attr('style', 'bottom: 0px;');
  // });
  // $('.child2 .row3 .block .btnMinus').mouseout(function () {
  //   $(this).attr('style', 'bottom: -51px;');
  //   $('.child2 .row3 .block .btnPlus').attr('style', 'bottom: 0px;');
  // });
  // $('.child2 .row3 .block-float .btnPlus').mouseover(function () {
  //   $(this).attr('style', 'bottom: 51px;');
  //   $('.child2 .row3 .block-float .btnMinus').attr('style', 'bottom: 0px;');
  // });
  // $('.child2 .row3 .block-float .btnMinus').mouseout(function () {
  //   $(this).attr('style', 'bottom: -51px;');
  //   $('.child2 .row3 .block-float .btnPlus').attr('style', 'bottom: 0px;');
  // });
  //
  //
  // $('.child2 .row4 .mySlider.alone .btnPrev').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID++;
  //   if ($('.child2 .row4 .mySlider.alone #item'+itemID).length) {
  //     $('.child2 .row4 .mySlider.alone .items').attr('style', 'right: 100%;');
  //     $('.child2 .row4 .mySlider.alone #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID--;
  // });
  // $('.child2 .row4 .mySlider.alone .btnPrev').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row4 .mySlider.alone .btnNext').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID--;
  //   if ($('.child2 .row4 .mySlider.alone #item'+itemID).length) {
  //     $('.child2 .row4 .mySlider.alone .items').attr('style', 'right: -100%;');
  //     $('.child2 .row4 .mySlider.alone #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID++;
  // });
  // $('.child2 .row4 .mySlider.alone .btnNext').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row4 .mySlider.mySlider-float .btnPrev').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID++;
  //   if ($('.child2 .row4 .mySlider.mySlider-float #item'+itemID).length) {
  //     $('.child2 .row4 .mySlider.mySlider-float .items').attr('style', 'right: 100%;');
  //     $('.child2 .row4 .mySlider.mySlider-float #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID--;
  // });
  // $('.child2 .row4 .mySlider.mySlider-float .btnPrev').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row4 .mySlider.mySlider-float .btnNext').mouseover(function () {
  //   $(this).find('.hover').css('top','-100%');
  //   $(this).find('.unhover').css('top','0%');
  //   itemID--;
  //   if ($('.child2 .row4 .mySlider.mySlider-float #item'+itemID).length) {
  //     $('.child2 .row4 .mySlider.mySlider-float .items').attr('style', 'right: -100%;');
  //     $('.child2 .row4 .mySlider.mySlider-float #item'+itemID).attr('style', 'right: 0;');
  //     return;
  //   }
  //   itemID++;
  // });
  // $('.child2 .row2 .mySlider.mySlider-float .btnNext').mouseout(function () {
  //   $(this).find('.hover').css('top','0%');
  //   $(this).find('.unhover').css('top','100%');
  // });
  // $('.child2 .row4 .btnPlus').mouseover(function () {
  //   $(this).attr('style', 'bottom: 51px;');
  //   $('.child2 .row4 .btnMinus').attr('style', 'bottom: 0px;');
  // });
  // $('.child2 .row4 .btnMinus').mouseout(function () {
  //   $(this).attr('style', 'bottom: -51px;');
  //   $('.child2 .row4 .btnPlus').attr('style', 'bottom: 0px;');
  // });
  /* / WHO WE ARE? */

  /* CORE BELIEFS AT WORK PLACE */
  controlsBtns.plusInit('.child3 .buttons', '.child3 .col2 .texts');
  /* / CORE BELIEFS AT WORK PLACE */
  controlsBtns.plusInit('.child5 .buttons');
  controlsBtns.init('.child5 .mySlider', '.child5 .controls .btnNext', 'next');
  controlsBtns.init('.child5 .mySlider', '.child5 .controls .btnPrev', 'prev');
  /* / OUR R&D TEAM IS PASSIONATE ABOUT THEIR WORK */
});
