jQuery(window).load(function () {
  //active Talk To Us menu
  $('header ul li').removeClass('active');
  $('header ul li#talk').addClass('active');
  //show header bar
  $("header").removeClass("header").addClass("headerFixed");

  //hide Loading page
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  //animate for title
  var tm = 5;
  setInterval(function() {
    $('.t'+tm).hide();
    if (tm == 4) $('.block-title img').show();
    if (tm == 5) tm = 1;
    else tm++;
  }, 500);

  // var winWidth = $(window).width();
  //
  // var mainBlocks = $('.talkContainer');
  // mainBlocks.removeClass('small big biggest');
  // if(winWidth >= 2738){
  //   mainBlocks.addClass('biggest');
  // }else if (winWidth >= 2282 && winWidth < 2738) {
  //   mainBlocks.addClass('big');
  // }else if (winWidth >= 1902 && winWidth < 2282) {}else {
  //   mainBlocks.addClass('small');
  // }
});
var myField = {
  tmpVal: '',
  onFocus: function (element) {
    this.tmpVal = element.value;

    element.value = '';
  },
  onBlur: function (element) {
    element.value = this.tmpVal;
  }
};
