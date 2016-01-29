jQuery(window).load(function () {
  //hide Loading page
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  var lifeCycles = $('.lifeCyclesContainer');
  lifeCycles.removeClass('small big biggest');

  var winWidth = $(window).width();
  
  if(winWidth >= 2738){
    lifeCycles.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    lifeCycles.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    lifeCycles.addClass('small');
  }
});
