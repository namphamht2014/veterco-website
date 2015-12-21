var welcome2 = {
  blockHover: function (className) {
    $('.'+className+' #active').attr('style', 'opacity:1');
  },
  blockUnhover: function (className) {
    $('.'+className+' #active').attr('style', 'opacity:0');
  },
  hideVideoBlock: function () {
    $('.video-block .block-right iframe').attr('style', 'opacity:0');
    setTimeout(function() {
      $('.video-block .block-right').attr('style', 'width: 0%');
    }, 500);
    setTimeout(function() {
      $('.video-block').hide();
    }, 1000);
  },
  showVideoBlock: function (eleID) {
    $('.video-block .top .title').removeClass('whyUs welcomeVeterco');
    $('.video-link').removeClass('active');

    $('.video-block').show();
    var titleEle = $('.video-block .top .title');
    var currEle = $('.video-block .bottom #'+eleID);
    var blockEle = $('.video-block .top');
    blockEle.removeClass('video1 video2 video3');
    var videoEle = $('.video-block .block-right');
    if (eleID == 'whyUs') {
      titleEle.addClass('whyUs');
      titleEle.html('WHY US?');
      currEle.addClass('active');

      blockEle.addClass('video2');
      videoEle.html('<iframe src="https://www.youtube.com/embed/wPTL9ZLsPgA" frameborder="0" allowfullscreen></iframe>');
    }else if (eleID == 'welcomeVeterco') {
      titleEle.addClass('welcomeVeterco');
      titleEle.html('Welcome to<br> Veterco <br>Vietnam');
      currEle.addClass('active');

      blockEle.addClass('video3');
      videoEle.html('<iframe src="https://www.youtube.com/embed/W4NCrwQZrTE" frameborder="0" allowfullscreen></iframe>');
    }else{
      titleEle.html('Factory <br>virtual tour');
      currEle.addClass('active');

      blockEle.addClass('video1');
      videoEle.html('<iframe src="https://www.youtube.com/embed/OmXuqDsESMM" frameborder="0" allowfullscreen></iframe>');
    }
    setTimeout(function() {
      videoEle.attr('style', 'width: 75%');
    }, 500);
    setTimeout(function() {
      $('.video-block .block-right iframe').attr('style', 'opacity:1');
    }, 1000);
  },
  videoChange: function (videoName, currentEle) {
    $('.video-link').removeClass('active');
    currentEle.childNodes[1].className += ' active';
    var titleEle = $('.video-block .top .title');
    var blockEle = $('.video-block .top');
    blockEle.removeClass('video1 video2 video3');
    var videoEle = $('.video-block .block-right');
    titleEle.removeClass('whyUs welcomeVeterco');
    if (videoName == 'whyUs') {
      titleEle.addClass('whyUs');
      titleEle.html('WHY US?');

      blockEle.addClass('video2');
      videoEle.html('<iframe src="https://www.youtube.com/embed/wPTL9ZLsPgA" frameborder="0" allowfullscreen></iframe>');
    }else if (videoName == 'welcomeVeterco') {
      titleEle.addClass('welcomeVeterco');
      titleEle.html('Welcome to<br> Veterco <br>Vietnam');

      blockEle.addClass('video3');
      videoEle.html('<iframe src="https://www.youtube.com/embed/W4NCrwQZrTE" frameborder="0" allowfullscreen></iframe>');
    }else{
      titleEle.html('Factory <br>virtual tour');

      blockEle.addClass('video1');
      videoEle.html('<iframe src="https://www.youtube.com/embed/OmXuqDsESMM" frameborder="0" allowfullscreen></iframe>');
    }
    $('.video-block .block-right iframe').attr('style', 'opacity:1');
  }
};

jQuery(window).load(function () {
  var winWidth = $(window).width();
  $('.block-right .text').removeClass('biggest big small');
  $('.block-big .text').removeClass('biggest big small');
  $('.block-1 .text').removeClass('biggest big small');
  $('.block-2 .text').removeClass('biggest big small');
  $('.block-3 .text').removeClass('biggest big small');
  $('.block-4 .text').removeClass('biggest big small');
  $('.video-block .video-link').removeClass('biggest big small');
  $('.video-block .content .block-left .top .title').removeClass('biggest big small');
  $('.video-block .block-back .title').removeClass('biggest big small');
  $('.block-big img').removeClass('small');
  $('.block-1 img').removeClass('small');
  $('.block-2 img').removeClass('small');
  $('.block-3 img').removeClass('small');
  $('.block-4 img').removeClass('small');
  $('.blocks #line-bottom').removeClass('small');
  $('.blocks #line-top').removeClass('small');

  if(winWidth >= 2764){
    $('.block-right .text').addClass('biggest');
    $('.block-big .text').addClass('biggest');
    $('.block-1 .text').addClass('biggest');
    $('.block-2 .text').addClass('biggest');
    $('.block-3 .text').addClass('biggest');
    $('.block-4 .text').addClass('biggest');
    $('.video-block .video-link').addClass('biggest');
    $('.video-block .content .block-left .top .title').addClass('biggest');
    $('.video-block .block-back .title').addClass('biggest');
  }else if (winWidth >= 2304 && winWidth < 2764) {
    $('.block-right .text').addClass('big');
    $('.block-big .text').addClass('big');
    $('.block-1 .text').addClass('big');
    $('.block-2 .text').addClass('big');
    $('.block-3 .text').addClass('big');
    $('.block-4 .text').addClass('big');
    $('.video-block .video-link').addClass('big');
    $('.video-block .content .block-left .top .title').addClass('big');
    $('.video-block .block-back .title').addClass('big');
  }else if (winWidth >= 1920 && winWidth < 2304) {}else {
    $('.block-right .text').addClass('small');
    $('.block-big .text').addClass('small');
    $('.block-1 .text').addClass('small');
    $('.block-2 .text').addClass('small');
    $('.block-3 .text').addClass('small');
    $('.block-4 .text').addClass('small');
    $('.video-block .video-link').addClass('small');
    $('.video-block .content .block-left .top .title').addClass('small');
    $('.video-block .block-back .title').addClass('small');
    $('.block-big img').addClass('small');
    $('.block-1 img').addClass('small');
    $('.block-2 img').addClass('small');
    $('.block-3 img').addClass('small');
    $('.block-4 img').addClass('small');
    $('.blocks #line-bottom').addClass('small');
    $('.blocks #line-top').addClass('small');
  }

  $('.loadingPage').css('opacity', '0');
  setTimeout(function() {
    $('.loadingPage').hide();
  }, 500);

  var lastX = 0;
  var count = 0;
  $('div.myContainer').mousemove(function(e){
    count++;
    if (count % 8 === 0) {
      if (lastX === 0) {
        lastX = e.pageX;
      }

      if (e.pageX > lastX) {
        $('#fly1').css('left', '+=1');
        $('#fly2').css('left', '+=1');
        $('#fly3').css('left', '+=1');
        $('#fly4').css('left', '+=1');
        $('#fly5').css('left', '+=1');
        $('#fly6').css('left', '+=1');
      }else{
        $('#fly1').css('left', '-=1');
        $('#fly2').css('left', '-=1');
        $('#fly3').css('left', '-=1');
        $('#fly4').css('left', '-=1');
        $('#fly5').css('left', '-=1');
        $('#fly6').css('left', '-=1');
      }
      lastX = e.pageX;
    }
  });
});
