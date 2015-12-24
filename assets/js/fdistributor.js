jQuery(window).load(function () {
  setTimeout(function() {
    $('.blocks .title1').css('opacity', '0');
    $('.blocks .title2').css('opacity', '0');
  }, 2000);
  setTimeout(function() {
    $('.blocks .title1').hide();
    $('.blocks .title2').hide();
  }, 2500);

  var beTheFirstBlock = $('.blocks .be-the-first');
  beTheFirstBlock.mouseover(function () {
    beTheFirstBlock.css('opacity', '1');
  });
  beTheFirstBlock.mouseout(function () {
    beTheFirstBlock.css('opacity', '0');
  });
  var orderStatusBlock = $('.blocks .order-status');
  orderStatusBlock.mouseover(function () {
    orderStatusBlock.css('opacity', '1');
  });
  orderStatusBlock.mouseout(function () {
    orderStatusBlock.css('opacity', '0');
  });
  var productCustomizationBlock = $('.blocks .product-customization');
  productCustomizationBlock.mouseover(function () {
    productCustomizationBlock.css('opacity', '1');
  });
  productCustomizationBlock.mouseout(function () {
    productCustomizationBlock.css('opacity', '0');
  });
  var promotionalBlock = $('.blocks .promotional');
  promotionalBlock.mouseover(function () {
    promotionalBlock.css('opacity', '1');
  });
  promotionalBlock.mouseout(function () {
    promotionalBlock.css('opacity', '0');
  });
  var samplesBlock = $('.blocks .samples');
  samplesBlock.mouseover(function () {
    samplesBlock.css('opacity', '1');
  });
  samplesBlock.mouseout(function () {
    samplesBlock.css('opacity', '0');
  });
  var whyUsBlock = $('.blocks .why-us');
  whyUsBlock.mouseover(function () {
    whyUsBlock.css('opacity', '1');
  });
  whyUsBlock.mouseout(function () {
    whyUsBlock.css('opacity', '0');
  });
});
