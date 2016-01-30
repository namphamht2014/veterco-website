jQuery(window).load(function () {
  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);
  setTimeout(function() {
    $('.blocks .title1').css('opacity', '0');
    $('.blocks .title2').css('opacity', '0');
  }, 2000);
  setTimeout(function() {
    $('.blocks .title1').hide();
    $('.blocks .title2').hide();
  }, 2500);

  $('.blocks .title1, .blocks .title2, .blocks .order-status .text').removeClass('small big biggest');
  $('.blocks .product-customization .text, .blocks .promotional .text').removeClass('small big biggest');
  $('.blocks .samples .text, .blocks .why-us .text, .blocks .be-the-first .text').removeClass('small big biggest');
  //Be the first container
  var beTheFirst = $('.beTheFirstContainer');
  beTheFirst.removeClass('small big biggest');
  //Samples shipping quote
  var shippingQuote = $('.samplesContainer');
  shippingQuote.removeClass('small big biggest');
  //Promotional Items Selection
  var promotionItems = $('.promotionalContainer');
  promotionItems.removeClass('small big biggest');

  var winWidth = $(window).width();
  console.log(winWidth);
  if(winWidth >= 2759){
    $('.blocks .title1, .blocks .title2, .blocks .order-status .text').addClass('biggest');
    $('.blocks .product-customization .text, .blocks .promotional .text').addClass('biggest');
    $('.blocks .samples .text, .blocks .why-us .text, .blocks .be-the-first .text').addClass('biggest');
    beTheFirst.addClass('biggest');
    shippingQuote.addClass('biggest');
    promotionItems.addClass('biggest');
  }else if ((winWidth >= 2304 || winWidth >= 2299) && (winWidth < 2764 || winWidth < 2759)) {
    $('.blocks .title1, .blocks .title2, .blocks .order-status .text').addClass('big');
    $('.blocks .product-customization .text, .blocks .promotional .text').addClass('big');
    $('.blocks .samples .text, .blocks .why-us .text, .blocks .be-the-first .text').addClass('big');
    beTheFirst.addClass('big');
    shippingQuote.addClass('big');
    promotionItems.addClass('big');
  }else if ((winWidth >= 1920 || winWidth >= 1916) && (winWidth < 2304 || winWidth < 2299)) {}else {
    $('.blocks .title1, .blocks .title2, .blocks .order-status .text').addClass('small');
    $('.blocks .product-customization .text, .blocks .promotional .text').addClass('small');
    $('.blocks .samples .text, .blocks .why-us .text, .blocks .be-the-first .text').addClass('small');
    beTheFirst.addClass('small');
    shippingQuote.addClass('small');
    promotionItems.addClass('small');
  }

  var beTheFirstBlock = $('.blocks .be-the-first');
  var beTheFirstBlockOver = $('.blocks .be-the-first-block');
  beTheFirstBlockOver.mouseover(function () {
    beTheFirstBlock.css('opacity', '1');
  });
  beTheFirstBlockOver.mouseout(function () {
    beTheFirstBlock.css('opacity', '0');
  });
  var orderStatusBlock = $('.blocks .order-status');
  var orderStatusBlockOver = $('.blocks .order-status-block');
  orderStatusBlockOver.mouseover(function () {
    orderStatusBlock.css('opacity', '1');
  });
  orderStatusBlockOver.mouseout(function () {
    orderStatusBlock.css('opacity', '0');
  });
  var productCustomizationBlock = $('.blocks .product-customization');
  var productCustomizationBlockOver = $('.blocks .product-customization-block');
  productCustomizationBlockOver.mouseover(function () {
    productCustomizationBlock.css('opacity', '1');
  });
  productCustomizationBlockOver.mouseout(function () {
    productCustomizationBlock.css('opacity', '0');
  });
  var promotionalBlock = $('.blocks .promotional');
  var promotionalBlockOver = $('.blocks .promotional-block');
  promotionalBlockOver.mouseover(function () {
    promotionalBlock.css('opacity', '1');
  });
  promotionalBlockOver.mouseout(function () {
    promotionalBlock.css('opacity', '0');
  });
  var samplesBlock = $('.blocks .samples');
  var samplesBlockOver = $('.blocks .samples-block');
  samplesBlockOver.mouseover(function () {
    samplesBlock.css('opacity', '1');
  });
  samplesBlockOver.mouseout(function () {
    samplesBlock.css('opacity', '0');
  });
  var whyUsBlock = $('.blocks .why-us');
  var whyUsBlockOver = $('.blocks .why-us-block');
  whyUsBlockOver.mouseover(function () {
    whyUsBlock.css('opacity', '1');
  });
  whyUsBlockOver.mouseout(function () {
    whyUsBlock.css('opacity', '0');
  });
});

var myField = {
  tmpVal: '',
  onFocus: function (element) {
    this.tmpVal = element.value;
    element.style.textAlign = 'left';

    element.value = '';
  },
  onBlur: function (element) {
    element.style.textAlign = 'center';
    element.value = this.tmpVal;
  }
};
