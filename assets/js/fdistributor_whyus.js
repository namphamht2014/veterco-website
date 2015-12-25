jQuery(window).load(function () {
  // $('.loadingPage').css('opacity', '0');
  // setTimeout(function() {
  //   $('.loadingPage').hide();
  // }, 500);

  $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').removeClass('small');
  $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').removeClass('small');

  var winWidth = $(window).width();
  if(winWidth >= 2764){
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('biggest');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('biggest');
  }else if (winWidth >= 2304 && winWidth < 2764) {
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('big');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('big');
  }else if (winWidth >= 1920 && winWidth < 2304) {}else {
    $('.whyUsContainer .block1 .text, .whyUsContainer .block2 .text, .whyUsContainer .block3 .text').addClass('small');
    $('.whyUsContainer .block4 .text, .whyUsContainer .block5 .text, .whyUsContainer .block6 .text').addClass('small');
  }

  var blockFriendly = $('.whyUsContainer .block1');
  var blockFriendlyActive = $('.whyUsContainer .block1 .active');
  blockFriendly.mouseover(function () {
    blockFriendlyActive.css('opacity', '1');
  });
  blockFriendly.mouseout(function () {
    blockFriendlyActive.css('opacity', '0');
  });
  var blockBenefit = $('.whyUsContainer .block2');
  var blockBenefitActive = $('.whyUsContainer .block2 .active');
  blockBenefit.mouseover(function () {
    blockBenefitActive.css('opacity', '1');
  });
  blockBenefit.mouseout(function () {
    blockBenefitActive.css('opacity', '0');
  });
  var blockTraining = $('.whyUsContainer .block3');
  var blockTrainingActive = $('.whyUsContainer .block3 .active');
  blockTraining.mouseover(function () {
    blockTrainingActive.css('opacity', '1');
  });
  blockTraining.mouseout(function () {
    blockTrainingActive.css('opacity', '0');
  });
  var blockWebsite = $('.whyUsContainer .block4');
  var blockWebsiteActive = $('.whyUsContainer .block4 .active');
  blockWebsite.mouseover(function () {
    blockWebsiteActive.css('opacity', '1');
  });
  blockWebsite.mouseout(function () {
    blockWebsiteActive.css('opacity', '0');
  });
  var blockPricing = $('.whyUsContainer .block5');
  var blockPricingActive = $('.whyUsContainer .block5 .active');
  blockPricing.mouseover(function () {
    blockPricingActive.css('opacity', '1');
  });
  blockPricing.mouseout(function () {
    blockPricingActive.css('opacity', '0');
  });
  var blockProducts = $('.whyUsContainer .block6');
  var blockProductsActive = $('.whyUsContainer .block6 .active');
  blockProducts.mouseover(function () {
    blockProductsActive.css('opacity', '1');
  });
  blockProducts.mouseout(function () {
    blockProductsActive.css('opacity', '0');
  });
});
