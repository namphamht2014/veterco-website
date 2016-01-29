jQuery(window).load(function () {
  //hide Loading page
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  var lifeCycles = $('.lifeCyclesContainer');
  lifeCycles.removeClass('small big biggest');

  var aquatics = $('.aquaticsContainer');
  lifeCycles.removeClass('small big biggest');
  var chicken = $('.chickenContainer');
  lifeCycles.removeClass('small big biggest');

  var winWidth = $(window).width();

  if(winWidth >= 2738){
    lifeCycles.addClass('biggest');
    aquatics.addClass('biggest');
    chicken.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    lifeCycles.addClass('big');
    aquatics.addClass('big');
    chicken.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    lifeCycles.addClass('small');
    aquatics.addClass('small');
    chicken.addClass('small');
  }
});
