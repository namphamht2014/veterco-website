var blocks = {
  deactive: function () {

  },
  active: function () {

  }
};
$(function () {
  $('.productFormsContainer .controls .container').mouseenter(function () {
    $('.productFormsContainer .controls .container div').removeClass('active');
    $('.productFormsContainer .cycle img').hide();
    $('.productFormsContainer .cycle span').hide();

    if ($(this).hasClass('ctop')) {
      $('.showBlock1').addClass('active');
      $('.productFormsContainer .cycle .form1').show();
      $('.productFormsContainer .cycle span.text1').show();
    }
    if ($(this).hasClass('cright')) {
      $('.showBlock2').addClass('active');
      $('.productFormsContainer .cycle .form2').show();
      $('.productFormsContainer .cycle span.text2').show();
    }
    if ($(this).hasClass('cleft')) {
      $('.showBlock3').addClass('active');
      $('.productFormsContainer .cycle .form3').show();
      $('.productFormsContainer .cycle span.text3').show();
      $('.productFormsContainer .cycle span.text3_2').show();
    }
    if ($(this).hasClass('cbottom')) {
      $('.showBlock4').addClass('active');
      $('.productFormsContainer .cycle .form4').show();
      $('.productFormsContainer .cycle span.text4').show();
    }
  });
});
