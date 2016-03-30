$(function () {
  var order = 1;
  var isPaused = false;
  setInterval(function() {
    if (!isPaused) {
      order++;

      $('.productFormsContainer .cycle img').hide();
      $('.productFormsContainer .cycle span').hide();
      $('.productFormsContainer .controls .container div').removeClass('active');

      $('.productFormsContainer .cycle img.form'+order).show();
      $('.productFormsContainer .cycle span.text'+order).show();
      $('.productFormsContainer .controls .container div.showBlock'+order).addClass('active');

      if (order >= 4) order = 0;
    }

  }, 3000);

  $('.productFormsContainer .cycle img').mouseenter(function () {
    isPaused = true;

    if ($(this).hasClass('form1') ||
        $(this).hasClass('form2') ||
        $(this).hasClass('form3') ||
        $(this).hasClass('form4')) {
      $(this).hide();
      var tmpClass = $(this).attr('class');
      $('.'+tmpClass+'-active').show();
    }
  });
  $('.productFormsContainer .cycle img').mouseleave(function () {

    if ($(this).hasClass('form1-active') ||
        $(this).hasClass('form2-active') ||
        $(this).hasClass('form3-active') ||
        $(this).hasClass('form4-active')) {
      isPaused = false;
    }
  });
  $('.productFormsContainer .controls .container div').mouseenter(function () {
    isPaused = true;
    $('.productFormsContainer .controls .container div').removeClass('active');
    $(this).addClass('active');
    $('.productFormsContainer .cycle img').hide();
    $('.productFormsContainer .cycle span').hide();

    if ($(this).hasClass('showBlock1')) {
      order = 1;
      $('.productFormsContainer .cycle img.form1-active').show();
      $('.productFormsContainer .cycle span.text1').show();
    }else if ($(this).hasClass('showBlock2')) {
      order = 2;
      $('.productFormsContainer .cycle img.form2-active').show();
      $('.productFormsContainer .cycle span.text2').show();
    }else if ($(this).hasClass('showBlock3')) {
      order = 3;
      $('.productFormsContainer .cycle img.form3-active').show();
      $('.productFormsContainer .cycle span.text3').show();
    }else if ($(this).hasClass('showBlock4')) {
      order = 0;
      $('.productFormsContainer .cycle img.form4-active').show();
      $('.productFormsContainer .cycle span.text4').show();
    }
  });
});
