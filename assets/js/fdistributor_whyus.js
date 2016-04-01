jQuery(window).load(function () {
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').removeClass('small big biggest');
  $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').removeClass('small big biggest');
      $('.whyUsDetailsContainer .white-block .text, .whyUsDetailsContainer .center-block .text, .whyUsDetailsContainer .arrow-block .text').removeClass('small big biggest');

  var winWidth = $(window).width();
  if(winWidth >= 2764){
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('biggest');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('biggest');

    $('.whyUsDetailsContainer .white-block .text, .whyUsDetailsContainer .center-block .text, .whyUsDetailsContainer .arrow-block .text').addClass('biggest');
  }else if (winWidth >= 2304 && winWidth < 2764) {
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('big');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('big');

    $('.whyUsDetailsContainer .white-block .text, .whyUsDetailsContainer .center-block .text, .whyUsDetailsContainer .arrow-block .text').addClass('big');
  }else if (winWidth >= 1920 && winWidth < 2304) {}else {
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('small');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('small');

    $('.whyUsDetailsContainer .white-block .text, .whyUsDetailsContainer .center-block .text, .whyUsDetailsContainer .arrow-block .text').addClass('small');
  }

  $('.whyUsContainer .blocks').mouseenter(function () {
    $(this).find('.active').addClass('moved');
  });
  $('.whyUsContainer .blocks').mouseleave(function () {
    $(this).find('.active').removeClass('moved');
  });
});
