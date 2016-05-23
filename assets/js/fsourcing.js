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
      item.css('width', 'calc(16.6% - 10px)');
    }else {
      item.css('width', 'calc(25% - 10px)');
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
          this.animalName = "vittroi";
          titleBlock.text('bird');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-vittroi.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 3:
          this.animalName = "bosua";
          titleBlock.text('dairy');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-bosua.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 4:
          this.animalName = "ca";
          titleBlock.text('fish');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ca.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 5:
          this.animalName = "cho";
          titleBlock.text('dog');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-cho.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 6:
          this.animalName = "cuu";
          titleBlock.text('sheep');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-cuu.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 7:
          this.animalName = "de";
          titleBlock.text('goat');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-de.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 8:
          this.animalName = "ga";
          titleBlock.text('chicken');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ga.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 9:
          this.animalName = "heo";
          titleBlock.text('pig sow');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-heome.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 10:
          this.animalName = "ngua";
          titleBlock.text('horse');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-ngua.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 11:
          this.animalName = "tom";
          titleBlock.text('shrimp');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-tom.png) center center no-repeat;background-size: 100% 100%;');
          break;
        case 12:
          this.animalName = "vit";
          titleBlock.text('duck');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-vit.png) center center no-repeat;background-size: 100% 100%;');
          break;
        default:
          this.animalName = "trau";
          titleBlock.text('buffalo');
          outter_cycle.attr('style', 'background: url(/assets/images/sourcing-animal-trau.png) center center no-repeat;background-size: 100% 100%;');
      }
    }
  },
  animalName: "trau",
  details: function () {
    location.href = "/index.php/fsourcing/lifecycle_details/"+this.animalName;
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
      $('.sourcingLifeCycleDetailsContainer .pill').attr('style', 'background:rgba(0,0,0,0.8);z-index: 9;');
      $('.sourcingLifeCycleDetailsContainer .pill .pill-text').attr('style', 'opacity: 1;');
      $('.sourcingLifeCycleDetailsContainer .pill #icon').attr('style', 'opacity: 1;');
      $('.sourcingLifeCycleDetailsContainer .pill #pill-img').show();
    }else{
      $('.sourcingLifeCycleDetailsContainer .pill').attr('style', 'background:rgba(0,0,0,0);z-index: 0;');
      $('.sourcingLifeCycleDetailsContainer .pill .pill-text').attr('style', 'opacity: 0;');
      $('.sourcingLifeCycleDetailsContainer .pill #icon').attr('style', 'opacity: 0.6;');
      $('.sourcingLifeCycleDetailsContainer .pill #pill-img').hide();
    }
  },
  choInit: function () {
    if($('body').height() <= 835){
      $('.block1 .desc').addClass('cho-small small');
      $('.block2 .desc').addClass('small');
      $('.block3 .desc').addClass('cho-small small');
      $('.block4 .desc').addClass('cho-small small');
    }else{
      $('.block1 .desc').removeClass('cho-small small').addClass('cho-big');
      $('.block2 .desc').removeClass('small');
      $('.block3 .desc').removeClass('cho-small small').addClass('cho-big');
      $('.block4 .desc').removeClass('cho-small small').addClass('cho-big');
    }
  },
  gaInit: function () {
    $('.block1 .desc').addClass('ga-small small');
    $('.block2 .desc').addClass('small');
    $('.block3 .desc').addClass('ga-small small');
    $('.block4 .desc').addClass('ga-small small');
    $('.block5 .desc').addClass('ga-small small');
    $('.block6 .desc').addClass('ga-small small');
    $('.block7 .desc').addClass('ga-small small');
    if($('body').height() <= 835){
      $('.block2 .desc').addClass('ga-small');
      $('.block3 .desc').addClass('ga-small');
    }else{
      $('.block2 .desc').removeClass('ga-small');
      $('.block3 .desc').removeClass('ga-small');
    }
  },
  tomInit: function () {
    if($('body').height() <= 835){
      $('.block1 .desc').addClass('small');
      $('.block2 .desc').addClass('small');
      $('.block3 .desc').addClass('small');
      $('.block4 .desc').addClass('tom-small small');
      $('.block5 .desc').addClass('tom-small small');
      $('.block6 .desc').addClass('tom-small small');
      $('.block7 .desc').addClass('tom-small small');
      $('.block8 .desc').addClass('tom-small small');
    }else{
      $('.block1 .desc').addClass('big');
      $('.block2 .desc').addClass('big');
      $('.block3 .desc').addClass('big');
      $('.block4 .desc').addClass('tom-big big');
      $('.block5 .desc').addClass('tom-big big');
      $('.block6 .desc').addClass('tom-big big');
      $('.block7 .desc').addClass('tom-big big');
      $('.block8 .desc').addClass('tom-big big');

      // $('.block2-4').attr('style', 'top: 450%;');
      // $('.block4').attr('style', 'top: 330%;');
      // $('.block5').attr('style', 'top: 590%;');
      // $('.block3-5').attr('style', 'height: 350px;top: 210%');
      // $('.block7').attr('style', 'top: 530%;');

      // $('.block2-6').attr('style', 'top: 850%;');
      // $('.block2-6 .arrow-left').attr('style', 'height: 150px;top: -150px;');
    }
  },
};
var catalogue = {
  moveLightTo: function (className, element) {
    var light = $('.dock .light');
    light.removeClass();
    light.addClass('light '+className);
    element.childNodes[1].style.opacity = 1;
    element.nextElementSibling.style.display = 'block';
  },
  hideDiamond: function (element) {
    element.childNodes[1].style.opacity = 0;
    element.nextElementSibling.style.display = 'none';
  }
};

( function( $ ) {
$( document ).ready(function() {
  var prevX = -1;
  var item1 = $('.item1');
  var item2 = $('.item2');
  $('.myPagination .p1').attr('style', 'font-size: 18px;');

  $('.books').draggable({
      drag: function(e) {
          if(prevX == -1) {
              prevX = e.pageX;
              return false;
          }
              // console.log(prevX +' > '+ e.pageX);
          // dragged left
          if(prevX > e.pageX) {
            if (!item1.hasClass('active')) {
              item1.addClass('active');
              item1.attr('style', 'left: 50%;');
              item2.removeClass('active');
              item2.attr('style', 'left: 200%;');
              $('.myPagination .p1').attr('style', 'font-size: 18px;');
              $('.myPagination .p2').attr('style', 'font-size: 14px;');
            }
          }
          else if(prevX < e.pageX) { // dragged right
            if (!item2.hasClass('active')) {
              item2.addClass('active');
              item2.attr('style', 'left: 50%;');
              item1.removeClass('active');
              item1.attr('style', 'left: -200%;');
              $('.myPagination .p2').attr('style', 'font-size: 18px;');
              $('.myPagination .p1').attr('style', 'font-size: 14px;');
            }
          }
          prevX = e.pageX;
          return false;
      }
  });

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

var productSearch = {
  defaultUrl: '/index.php/fsourcing/abc',
  doSort: function (sortType) {
    var newUrl = productSearch.defaultUrl+'?';
    var params = [];

    params.push('sort='+sortType);
    sessionStorage.sortBy = sortType;

    if (sessionStorage.animalType) {
      params.push('animaltype='+sessionStorage.animalType);
    }
    if (sessionStorage.category) {
      var filterStr = sessionStorage.category.replace('&', 'AND');
      params.push('category='+filterStr);
    }
    if (sessionStorage.serie) {
      params.push('serie='+sessionStorage.serie);
    }
    if (sessionStorage.form) {
      params.push('form='+sessionStorage.form);
    }

    window.location.href = newUrl+params.join('&');
  },
  doFilter: function (element, filterBy, filterStr) {
    var theParent = $(element).parent();

    var newUrl = productSearch.defaultUrl+'?';
    var params = [];
    if (sessionStorage.sortBy) {
      params.push('sort='+sessionStorage.sortBy);
    }

    if (filterBy == 'animal') {
      if (theParent.hasClass('active')) {
        theParent.removeClass('active');
        delete sessionStorage.animalType;
      }else{
        params.push('animaltype='+filterStr);
        sessionStorage.animalType = filterStr;
      }
    }else if (sessionStorage.animalType) {
      params.push('animaltype='+sessionStorage.animalType);
    }

    if (filterBy == 'category') {
      if (theParent.hasClass('active')) {
        theParent.removeClass('active');
        delete sessionStorage.category;
      }else{
        sessionStorage.category = filterStr;
        filterStr = filterStr.replace('&', 'AND');
        params.push('category='+filterStr);
      }
    }else if (sessionStorage.category) {
      var filterStr2 = sessionStorage.category.replace('&', 'AND');
      params.push('category='+filterStr2);
    }

    if (filterBy == 'serie') {
      if (theParent.hasClass('active')) {
        theParent.removeClass('active');
        delete sessionStorage.serie;
      }else{
        sessionStorage.serie = filterStr;
        params.push('serie='+filterStr);
      }
    }else if (sessionStorage.serie) {
      params.push('serie='+sessionStorage.serie);
    }
    if (filterBy == 'form') {
      if (theParent.hasClass('active')) {
        theParent.removeClass('active');
        delete sessionStorage.form;
      }else{
        sessionStorage.form = filterStr;
        params.push('form='+filterStr);
      }
    }else if (sessionStorage.form) {
      params.push('form='+sessionStorage.form);
    }

    window.location.href = newUrl+params.join('&');
  }
};

jQuery(window).load(function () {
  var winWidth = $(window).width();
  //abc showcase
  // var mainBlocks = $('.sourcingAbcContainer .block-left, .sourcingAbcContainer .block-right');
  // mainBlocks.removeClass('small big biggest');
  // if(winWidth >= 2738){
  //   mainBlocks.addClass('biggest');
  // }else if (winWidth >= 2282 && winWidth < 2738) {
  //   mainBlocks.addClass('big');
  // }else if (winWidth >= 1902 && winWidth < 2282) {}else {
  //   mainBlocks.addClass('small');
  // }

  var blockLeft = $('.sourcingAbcContainer .block-left');
  var blockRight = $('.sourcingAbcContainer .block-right');
  // if (blockLeft.height() < blockRight.height()) {
  //   blockLeft.height(blockRight.height());
  // }

  //product details
  var detailBlock = $('.sourcingProductDetailsContainer');
  detailBlock.removeClass('small big biggest');
  if(winWidth >= 2738){
    detailBlock.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    detailBlock.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    detailBlock.addClass('small');
  }

  //Animal
  var animalBlock = $('.sourcingAnimalContainer');
  animalBlock.removeClass('small big biggest');
  if(winWidth >= 2738){
    animalBlock.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    animalBlock.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    animalBlock.addClass('small');
  }

  //lifecycle details
  var lifecycleBlock = $('.sourcingLifeCycleDetailsContainer');
  lifecycleBlock.removeClass('small big biggest');
  if(winWidth >= 2738){
    lifecycleBlock.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    lifecycleBlock.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    lifecycleBlock.addClass('small');
  }

  //lifecycle details
  var catalogueBlock = $('.catalogueContainer');
  catalogueBlock.removeClass('small big biggest');
  if(winWidth >= 2738){
    catalogueBlock.addClass('biggest');
  }else if (winWidth >= 2282 && winWidth < 2738) {
    catalogueBlock.addClass('big');
  }else if (winWidth >= 1902 && winWidth < 2282) {}else {
    catalogueBlock.addClass('small');
  }

  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  //product item hover
  $('.sourcingAbcContainer .block-right .product').mouseenter(function () {
    $(this).find('.product-form-details').show();
  });
  $('.sourcingAbcContainer .block-right .product').mouseleave(function () {
    $(this).find('.product-form-details').hide();
  });

  // var filterPaddingTop = 66;
  // var searchSection = $('.sourcingAbcContainer .block-left .search');
  // $(window).scroll(function(){
  //   var st = $(window).scrollTop();
  //
  //   var checkResult = 66 - st;
  //   if (checkResult <= 5) {
  //     searchSection.css('padding-top', '5px');
  //   }else{
  //     searchSection.css('padding-top', checkResult+'px');
  //   }
  // });
});
