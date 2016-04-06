<div class="welcome2">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <img src="/assets/images/welcome2-layer1.png" alt="" class="layer float"/>
    <img src="/assets/images/welcome2-layer3.png" alt="" class="layer left"/>
    <img src="/assets/images/welcome2-layer2.png" alt="" class="layer right"/>
    <img src="/assets/images/welcome2-layer-block2.png" alt="" class="layer layer2 right"/>
    <img src="/assets/images/welcome2-layer-block3.png" alt="" class="layer layer3 right"/>
    <img src="/assets/images/welcome2-layer-block4.png" alt="" class="layer layer4 right"/>
    <img src="/assets/images/welcome2-layer-block5.png" alt="" class="layer layer5 right"/>
    <img src="/assets/images/welcome2-layer-block6.png" alt="" class="layer layer6 right"/>
    <div class="texts">
      <div class="text1 layer1">“In pursuit of excellence”</div>
      <a href="<?= site_url('fsourcing/abc')?>" onmouseenter="welcome2Bg.hover(2)" onmouseleave="welcome2Bg.blur(2)"><div class="text2 pepsiFont"><div>Product<br>Details</div></div></a>
      <a onclick="welcome2.showVideoBlock('factory')" onmouseenter="welcome2Bg.hover(3)" onmouseleave="welcome2Bg.blur(3)"><div class="text3 pepsiFont"><div>Factory<br>virutal tour</div></div></a>
      <a href="<?= site_url('fhome')?>" onmouseenter="welcome2Bg.hover(4)" onmouseleave="welcome2Bg.blur(4)"><div class="text4 pepsiFont"><div>Enter the website</div></div></a>
      <a onclick="welcome2.showVideoBlock('whyUs')" onmouseenter="welcome2Bg.hover(5)" onmouseleave="welcome2Bg.blur(5)"><div class="text5 pepsiFont"><div>Why us</div></div></a>
      <a onclick="welcome2.showVideoBlock('welcomeVeterco')" onmouseenter="welcome2Bg.hover(6)" onmouseleave="welcome2Bg.blur(6)"><div class="text6 pepsiFont"><div>Welcome to<br><span>Veterco vietnam</span></div></div></a>
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
            <img src="/assets/images/welcome2-video-factory.jpg" alt="" style="display:block"/>
            <img src="/assets/images/welcome2-video-veterco.jpg" alt="" />
            <img src="/assets/images/welcome2-video-whyus.jpg" alt="" />
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
        <div class="block-right"></div>
      </div>
    </div>
  </div>
</div>
