<div class="myContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="video-block">
    <div class="content">
      <div class="block-left">
        <a onclick="welcome2.hideVideoBlock()">
          <div class="block-back">
            <div class="title">
              Back
            </div>
          </div>
        </a>
        <div class="top video1">
          <div class="title">
            Factory <br>Virtual Tour
          </div>
        </div>
        <div class="bottom">
          <a onclick="welcome2.videoChange('factory', this)">
            <div id="factory" class="video-link active">
              Factory virtual tour
            </div>
          </a>
          <a onclick="welcome2.videoChange('whyUs', this)">
            <div id="whyUs" class="video-link">
              Why Us?
            </div>
          </a>
          <a onclick="welcome2.videoChange('welcomeVeterco', this)">
            <div id="welcomeVeterco" class="video-link">
              Welcome to Veterco Vietnam
            </div>
          </a>
        </div>
      </div>
      <div class="block-right">
        <iframe src="https://www.youtube.com/embed/OmXuqDsESMM" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="logo">
    <img src="/assets/images/welcome-logo.png" alt="" />
  </div>
  <div class="flies">
    <img src="/assets/images/welcome-fly-shape.png" id="fly1" alt="" />
    <img src="/assets/images/welcome-fly-shape-2.png" id="fly2" alt="" />
    <img src="/assets/images/welcome-fly-shape-3.png" id="fly3" alt="" />
    <img src="/assets/images/welcome-fly-shape-4.png" id="fly4" alt="" />
    <img src="/assets/images/welcome-fly-shape-5.png" id="fly5" alt="" />
    <img src="/assets/images/welcome-fly-shape-6.png" id="fly6" alt="" />
  </div>
  <div class="blocks">
    <img src="/assets/images/welcome-line-top.png" id="line-top" alt="" />
    <img src="/assets/images/welcome-line-bottom.png" id="line-bottom" alt="" />
    <div class="block-big">
      <img src="/assets/images/welcome-block-big.png" alt="" />
      <img src="/assets/images/welcome-block-big-active.png" id="active" alt="" />
      <img src="/assets/images/welcome-white-logo.png" id="white-logo" alt="" />
      <div class="text">
        Enter the website
      </div>
      <a href="<?= site_url('fhome')?>" onmouseover="welcome2.blockHover('block-big')" onmouseout="welcome2.blockUnhover('block-big')">
        <img src="/assets/images/welcome-plus-btn.png" id="btn-plus" alt="" />
      </a>
    </div>
    <div class="block-1">
      <img src="/assets/images/welcome-block-1.png" alt="" />
      <img src="/assets/images/welcome-block-1-active.png" id="active" alt="" />
      <div class="text">
        Factory <br>vitual tour
      </div>
      <a onclick="welcome2.showVideoBlock('factory')" onmouseover="welcome2.blockHover('block-1')" onmouseout="welcome2.blockUnhover('block-1')">
        <img src="/assets/images/welcome-play-btn.png" id="btn-play" alt="" />
      </a>
    </div>
    <div class="block-2">
      <img src="/assets/images/welcome-block-4.png" alt="" />
      <img src="/assets/images/welcome-block-4-active.png" id="active" alt="" />
      <div class="text">
        Product<br> detail
      </div>
      <a href="<?= site_url('fsourcing/abc')?>" onmouseover="welcome2.blockHover('block-2')" onmouseout="welcome2.blockUnhover('block-2')">
        <img src="/assets/images/welcome-play-btn.png" id="btn-play" alt="" />
      </a>
    </div>
    <div class="block-3">
      <img src="/assets/images/welcome-block-3.png" alt="" />
      <img src="/assets/images/welcome-block-3-active.png" id="active" alt="" />
      <div class="text">
        Welcome to <br>Veterco Vietnam
      </div>
      <a onclick="welcome2.showVideoBlock('welcomeVeterco')" onmouseover="welcome2.blockHover('block-3')" onmouseout="welcome2.blockUnhover('block-3')">
        <img src="/assets/images/welcome-play-btn.png" id="btn-play" alt="" />
      </a>
    </div>
    <div class="block-4">
      <img src="/assets/images/welcome-block-2.png" alt="" />
      <img src="/assets/images/welcome-block-2-active.png" id="active" alt="" />
      <div class="text">
        Why us
      </div>
      <a onclick="welcome2.showVideoBlock('whyUs')" onmouseover="welcome2.blockHover('block-4')" onmouseout="welcome2.blockUnhover('block-4')">
        <img src="/assets/images/welcome-play-btn.png" id="btn-play" alt="" />
      </a>
    </div>
    <div class="block-right">
      <img src="/assets/images/welcome-right-arrow.png" alt="" />
      <div class="text">
        “In pursuit of excellence”
      </div>
    </div>
  </div>
</div>
