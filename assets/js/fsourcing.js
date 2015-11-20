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
    $('header ul li').removeClass('active');
    $('header ul li#'+menuID).addClass('active');
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
var animal = {
  changed: function (element, animalType, colorType) {
    if (!element.childNodes[0].classList.contains('active')) {
      $('.small-cycle div').removeClass('active');
      element.childNodes[0].className += ' active';
      var titleBlock = $('.inner-cycle .title span');
      var outter_cycle = $('.sourcingAnimalContainer .outter-cycle');
      if (colorType) {
        $('.cycle1').removeClass('black');
        $('.cycle2').removeClass('black');
        $('.cycle3').removeClass('black');
        $('.cycle4').removeClass('black');
        $('.cycle5').removeClass('black');
        $('.cycle6').removeClass('black');
        $('.cycle7').removeClass('black');
        $('.cycle8').removeClass('black');
        $('.cycle9').removeClass('black');
        $('.cycle10').removeClass('black');
        $('.cycle11').removeClass('black');
        $('.cycle12').removeClass('black');
      }else {
        $('.cycle1').addClass('black');
        $('.cycle2').addClass('black');
        $('.cycle3').addClass('black');
        $('.cycle4').addClass('black');
        $('.cycle5').addClass('black');
        $('.cycle6').addClass('black');
        $('.cycle7').addClass('black');
        $('.cycle8').addClass('black');
        $('.cycle9').addClass('black');
        $('.cycle10').addClass('black');
        $('.cycle11').addClass('black');
        $('.cycle12').addClass('black');
      }

      switch (animalType) {
        case 2:
          titleBlock.text('bird');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-vittroi.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 3:
          titleBlock.text('dairy');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-bosua.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 4:
          titleBlock.text('fish');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ca.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 5:
          titleBlock.text('dog');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-cho.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 6:
          titleBlock.text('sheep');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-cuu.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 7:
          titleBlock.text('goat');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-de.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 8:
          titleBlock.text('chicken');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ga.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 9:
          titleBlock.text('pig sow');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-heome.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 10:
          titleBlock.text('horse');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ngua.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 11:
          titleBlock.text('shrimp');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-tom.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 12:
          titleBlock.text('duck');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-vit.png) center center no-repeat;background-size: 100% 100%;');
          break;
        default:
          titleBlock.text('buffalo');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-trau.png) center center no-repeat;background-size: 100% 100%;');
      }
    }
  },
  details: function () {
    location.href = "/index.php/fsourcing/lifecycle_details";
  }
};
var productDetails = {
  showDesc:function (){
    $('.product-info .product-desc').show();
    $('.product-info .more').hide();
  },
  showLoremIpsum: function () {
    $('.product-info .product-desc').hide();
    $('.product-info .more').show();
  }
};
var lifecycle = {
  showed: false,
  showPill: function (element) {
    this.showed = !this.showed;
    if (this.showed) {
      $('.sourcingLifeCycleDetailsContainer .pill').attr('style', 'background:rgba(0,0,0,0.8)');
      $('.sourcingLifeCycleDetailsContainer .pill #pill-img').show();
    }else{
      $('.sourcingLifeCycleDetailsContainer .pill').attr('style', 'background:rgba(0,0,0,0)');
      $('.sourcingLifeCycleDetailsContainer .pill #pill-img').hide();
    }
  }
};

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
