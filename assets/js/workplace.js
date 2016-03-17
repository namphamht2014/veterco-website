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
  var itemID = 1;
  $('.child2 .row2 .mySlider .btnPrev').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');

    itemID++;
    if ($('.child2 .row2 .mySlider #item'+itemID).length) {
      $('.child2 .row2 .mySlider .items').attr('style', 'right: 100%;');
      $('.child2 .row2 .mySlider #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID--;
  });
  $('.child2 .row2 .mySlider .btnPrev').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row2 .mySlider .btnNext').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID--;
    if ($('.child2 .row2 .mySlider #item'+itemID).length) {
      $('.child2 .row2 .mySlider .items').attr('style', 'right: -100%;');
      $('.child2 .row2 .mySlider #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID++;
  });
  $('.child2 .row2 .mySlider .btnNext').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row2 .btnPlus').mouseover(function () {
    $(this).attr('style', 'bottom: 51px;');
    $('.child2 .row2 .btnMinus').attr('style', 'bottom: 0px;');
  });
  $('.child2 .row2 .btnMinus').mouseout(function () {
    $(this).attr('style', 'bottom: -51px;');
    $('.child2 .row2 .btnPlus').attr('style', 'bottom: 0px;');
  });


  $('.child2 .row3 .mySlider .btnPrev').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID++;
    if ($('.child2 .row3 .mySlider #item'+itemID).length) {
      $('.child2 .row3 .mySlider .items').attr('style', 'right: 100%;');
      $('.child2 .row3 .mySlider #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID--;
  });
  $('.child2 .row3 .mySlider .btnPrev').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row3 .mySlider .btnNext').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID--;
    if ($('.child2 .row3 .mySlider #item'+itemID).length) {
      $('.child2 .row3 .mySlider .items').attr('style', 'right: -100%;');
      $('.child2 .row3 .mySlider #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID++;
  });
  $('.child2 .row3 .mySlider .btnNext').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row3 .block .btnPlus').mouseover(function () {
    $(this).attr('style', 'bottom: 51px;');
    $('.child2 .row3 .block .btnMinus').attr('style', 'bottom: 0px;');
  });
  $('.child2 .row3 .block .btnMinus').mouseout(function () {
    $(this).attr('style', 'bottom: -51px;');
    $('.child2 .row3 .block .btnPlus').attr('style', 'bottom: 0px;');
  });
  $('.child2 .row3 .block-float .btnPlus').mouseover(function () {
    $(this).attr('style', 'bottom: 51px;');
    $('.child2 .row3 .block-float .btnMinus').attr('style', 'bottom: 0px;');
  });
  $('.child2 .row3 .block-float .btnMinus').mouseout(function () {
    $(this).attr('style', 'bottom: -51px;');
    $('.child2 .row3 .block-float .btnPlus').attr('style', 'bottom: 0px;');
  });


  $('.child2 .row4 .mySlider.alone .btnPrev').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID++;
    if ($('.child2 .row4 .mySlider.alone #item'+itemID).length) {
      $('.child2 .row4 .mySlider.alone .items').attr('style', 'right: 100%;');
      $('.child2 .row4 .mySlider.alone #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID--;
  });
  $('.child2 .row4 .mySlider.alone .btnPrev').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row4 .mySlider.alone .btnNext').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID--;
    if ($('.child2 .row4 .mySlider.alone #item'+itemID).length) {
      $('.child2 .row4 .mySlider.alone .items').attr('style', 'right: -100%;');
      $('.child2 .row4 .mySlider.alone #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID++;
  });
  $('.child2 .row4 .mySlider.alone .btnNext').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row4 .mySlider.mySlider-float .btnPrev').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID++;
    if ($('.child2 .row4 .mySlider.mySlider-float #item'+itemID).length) {
      $('.child2 .row4 .mySlider.mySlider-float .items').attr('style', 'right: 100%;');
      $('.child2 .row4 .mySlider.mySlider-float #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID--;
  });
  $('.child2 .row4 .mySlider.mySlider-float .btnPrev').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row4 .mySlider.mySlider-float .btnNext').mouseover(function () {
    $(this).find('.hover').css('top','-100%');
    $(this).find('.unhover').css('top','0%');
    itemID--;
    if ($('.child2 .row4 .mySlider.mySlider-float #item'+itemID).length) {
      $('.child2 .row4 .mySlider.mySlider-float .items').attr('style', 'right: -100%;');
      $('.child2 .row4 .mySlider.mySlider-float #item'+itemID).attr('style', 'right: 0;');
      return;
    }
    itemID++;
  });
  $('.child2 .row2 .mySlider.mySlider-float .btnNext').mouseout(function () {
    $(this).find('.hover').css('top','0%');
    $(this).find('.unhover').css('top','100%');
  });
  $('.child2 .row4 .btnPlus').mouseover(function () {
    $(this).attr('style', 'bottom: 51px;');
    $('.child2 .row4 .btnMinus').attr('style', 'bottom: 0px;');
  });
  $('.child2 .row4 .btnMinus').mouseout(function () {
    $(this).attr('style', 'bottom: -51px;');
    $('.child2 .row4 .btnPlus').attr('style', 'bottom: 0px;');
  });
  /* / WHO WE ARE? */
});
