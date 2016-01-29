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
  chicken.removeClass('small big biggest');
  var pigs = $('.pigsContainer');
  pigs.removeClass('small big biggest');
  var cattles = $('.cattlesContainer');
  cattles.removeClass('small big biggest');
  var pets = $('.petsContainer');
  pets.removeClass('small big biggest');

  var winWidth = $(window).width();

  if(winWidth >= 2738){
    lifeCycles.addClass('biggest');
    aquatics.addClass('biggest');
    chicken.addClass('biggest');
    pigs.addClass('biggest');
    cattles.addClass('biggest');
    pets.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    lifeCycles.addClass('big');
    aquatics.addClass('big');
    chicken.addClass('big');
    pigs.addClass('big');
    cattles.addClass('big');
    pets.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    lifeCycles.addClass('small');
    aquatics.addClass('small');
    chicken.addClass('small');
    pigs.addClass('small');
    cattles.addClass('small');
    pets.addClass('small');
  }
});
