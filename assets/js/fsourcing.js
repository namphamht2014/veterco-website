var header = {
  hover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "block";
    }
  },
  unhover: function (element) {
    if (!element.parentElement.classList.contains('active')) {
      element.childNodes[1].childNodes[1].style.display = "none";
    }
  },
  active: function (menuID) {
    $('#header ul li').removeClass('active');
    $('#header ul li#'+menuID).addClass('active');
  }
};
var block = {
  hover: function (element) {
    element.childNodes[1].className += " move";
  },
  unhover: function (element) {
    element.childNodes[1].className = element.childNodes[1].className.replace(' move', '');
  }
};
var grid = {
  show: function (element, itemNo) {
    $('.block-left .view .item1').removeClass('active');
    $('.block-left .view .item2').removeClass('active');
    element.childNodes[0].className += " active";

    var item = $('.block-right .product-list .product');
    if (itemNo == 6) {
      item.attr('style', 'width: 16.6%');
    }else {
      item.attr('style', 'width: 25%');
    }
  }
};
$(function () {
  $('#header').addClass('show');
});

( function( $ ) {
$( document ).ready(function() {
$('#cssmenu li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	$('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');
});
} )( jQuery );
