<?php $this->load->view('frontend/home-header'); ?>
<div class="talkContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="block-left">
      <div class="block-title">
        <img class="t4" src="/assets/images/talk-title4.png" alt="" />
        <img class="t3" src="/assets/images/talk-title3.png" alt="" />
        <img class="t2" src="/assets/images/talk-title2.png" alt="" />
        <img class="t1" src="/assets/images/talk-title1.png" alt="" />
        <img class="t5" src="/assets/images/talk-title5.png" alt="" />
      </div>
      <div class="block-left-desc text-justify">
          We believe great drug begins with great conversation.<br>
          It's always been our pleasure to hear from you. Whether it is Distribution Inquiry or General Inquiry, reach out to us and we'll respond as soon as we can.

      </div>
      <div class="talk-form">
        <form class="" action="" method="post">
          <div class="line">
            <div class="name">
              <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="name" value="What is your name?">
            </div>
            <div class="email">
              <input type="email" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="email" value="Where can we email you back?">
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="line">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="company" value="What company are you form?">
          </div>
          <div class="line">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="website" value="What is your company's website? So we get to know about you">
          </div>
          <div class="line">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="website" value="Subject of this message">
          </div>
          <div class="line">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" name="website" value="What's on your mind?">
          </div>
          <div class="bottom-block">
            <div class="txt text-justify">
              This space is specially for customer who look forward to be our company's Distributor. Please provide these below information, we will soon get you updated with our Comprehensive Product Portfolio and Distributor benefits. Thank you again for being interested in Veterco Vietnam, we can't wait to be a part of your Distribution Network.
            </div>
            <div class="country">
              <div class="my-label">
                What country are you from?
              </div>
              <div class="my-field">
                <input type="text" name="country" value="">
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="viber">
              <div class="my-label">
                Whatsapp or Viber
              </div>
              <div class="my-field">
                <input type="text" name="viber" value="">
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <button type="submit" name="submit" class="btn-submit">Send It</button>
        </form>
      </div>
    </div>
    <div class="block-right">

      <div class="pink-block"></div>

      <div class="map">
        <div class="">
          <img class="location" src="/assets/images/talk-map.png" alt="" />
          <img class="marker" src="/assets/images/talk-location-marker.png" alt="" />
        </div>
      </div>

      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>

      <div class="black-block">
        <div class="content">
          <div class="row">
            <div class="title">
              CALL US
            </div>
            <div class="desc">
              <div class="left">
                Domestic:
              </div>
              <div class="right">
                +84918408666
              </div>
            </div>
            <div class="desc">
              <div class="left">
                International:
              </div>
              <div class="right">
                +84918158874
              </div>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="title">
              EMAIL US
            </div>
            <div class="desc">
              <div class="left">
                Domestic:
              </div>
              <div class="right">
                vetercovn@gmail.com
              </div>
            </div>
            <div class="desc">
              <div class="left">
                International:
              </div>
              <div class="right">
                veterco@gmail.com
              </div>
            </div>
          </div>
          <div class="row m-t-20">
            <div class="title">
              MAIL US
            </div>
            <div class="desc">
              77B Pham Ngu Lao Street,
            </div>
            <div class="desc">
              Thoi Binh Ward, Ninh Kieu District
            </div>
            <div class="desc">
              Can Tho City,
            </div>
            <div class="desc">
              Vietnam
            </div>
          </div>
        </div>
      </div>

      <div class="pink-text">
        <div class="title">
          FIND US
        </div>
        <div class="txt1">
          GET IN TOUCH WITH US
        </div>
        <div class="txt2">
          TO GET THE BALL ROLLING...
        </div>
      </div>

      <img src="/assets/images/talk-red-block1.png" class="block-red1" alt="" />
      <img src="/assets/images/talk-red-block2.png" class="block-red2" alt="" />
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
