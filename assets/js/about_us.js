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
  console.log(winWidth);

  var mainBlocks = $('.aboutUsContainer');
  mainBlocks.removeClass('small big biggest');
  if(winWidth >= 2738){
    mainBlocks.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    mainBlocks.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    mainBlocks.addClass('small');
  }

  $('header ul li').removeClass('active');
  $('header ul li#about_us').addClass('active');
  $("header").removeClass("header").addClass("headerFixed");

  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  $(".aboutUsContainer .content").mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 30);

      event.preventDefault();

   });
});
