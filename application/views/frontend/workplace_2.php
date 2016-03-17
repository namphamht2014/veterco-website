<?php $this->load->view('frontend/home-header'); ?>
<div class="workplaceContainer child2">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <a href="<?= site_url('workplace')?>">
      <div class="row1"><img src="/assets/images/workplace-back-btn.png" alt="" />WHO WE ARE?</div>
    </a>
    <div class="row2">
      <div class="mySlider">
        <img src="/assets/images/workplace2-row2-img.jpg" class="items active" id="item1" alt="" />
        <img src="/assets/images/workplace2-row2-img.jpg" class="items" id="item2" alt="" />
        <div class="controls">
          <a>
            <div class="btnPrev">
                <img src="/assets/images/workplace-btn-pre.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-pre-black.jpg" class="unhover" alt="" />
            </div>
          </a>
          <a>
            <div class="btnNext">
                <img src="/assets/images/workplace-btn-next.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-next-black.jpg" class="unhover" alt="" />
            </div>
          </a>
        </div>
      </div>
      <div class="block">
        <img src="/assets/images/workplace2-row2-img2.jpg" class="block" alt="" />
        <span>customer<br>care<br>department</span>
        <div class="buttons">
          <a class="btnPlus"><img src="/assets/images/workplace-btn-plus.jpg" alt="" /></a>
          <a class="btnMinus">
            <!-- <img src="/assets/images/workplace-btn-minus.jpg" alt="" /> -->
            <img src="/assets/images/workplace-btn-plus-black.jpg" alt="" />
          </a>
        </div>
      </div>
      <img src="/assets/images/workplace2-row2-img3.png" class="block2" alt="" />
      <span>At Veterco, we realize that our strength and competitive advantage lie with our people. We support our employees in a number of ways to create a healthy working environment - meaningful work, diversity, mobility, networking and work-life balance. We are an equal opportunity employer. </span>
    </div>
    <div class="row3 w-full">
      <div class="block-float">
        <img src="/assets/images/workplace2-row3-img3.jpg" class="block" alt="" />
        <span>Center of<br>Research<br>and<br>Development<br>-R&D</span>
        <div class="buttons">
          <a class="btnPlus"><img src="/assets/images/workplace-btn-plus.jpg" alt="" /></a>
          <a class="btnMinus">
            <!-- <img src="/assets/images/workplace-btn-minus.jpg" alt="" /> -->
            <img src="/assets/images/workplace-btn-plus-black.jpg" alt="" />
          </a>
        </div>
      </div>
      <div class="block">
        <img src="/assets/images/workplace2-row3-img2.jpg" class="block" alt="" />
        <span>Design<br>department</span>
        <div class="buttons">
          <a class="btnPlus"><img src="/assets/images/workplace-btn-plus.jpg" alt="" /></a>
          <a class="btnMinus">
            <!-- <img src="/assets/images/workplace-btn-minus.jpg" alt="" /> -->
            <img src="/assets/images/workplace-btn-plus-black.jpg" alt="" />
          </a>
        </div>
      </div>
      <div class="mySlider">
        <img src="/assets/images/workplace2-row3-img.jpg" class="items active" id="item1" alt="" />
        <img src="/assets/images/workplace2-row3-img.jpg" class="items" id="item2" alt="" />
        <div class="controls">
          <a>
            <div class="btnPrev">
                <img src="/assets/images/workplace-btn-pre.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-pre-black.jpg" class="unhover" alt="" />
            </div>
          </a>
          <a>
            <div class="btnNext">
                <img src="/assets/images/workplace-btn-next.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-next-black.jpg" class="unhover" alt="" />
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row4 w-full">
      <div class="mySlider mySlider-float">
        <img src="/assets/images/workplace2-row3-img4.jpg" class="items active" id="item1" alt="" />
        <img src="/assets/images/workplace2-row3-img4.jpg" class="items" id="item2" alt="" />
        <div class="controls">
          <a>
            <div class="btnPrev">
                <img src="/assets/images/workplace-btn-pre.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-pre-black.jpg" class="unhover" alt="" />
            </div>
          </a>
          <a>
            <div class="btnNext">
                <img src="/assets/images/workplace-btn-next.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-next-black.jpg" class="unhover" alt="" />
            </div>
          </a>
        </div>
      </div>
      <div class="mySlider alone">
        <img src="/assets/images/workplace2-row4-img.png" class="items active" id="item1" alt="" />
        <img src="/assets/images/workplace2-row4-img.png" class="items" id="item2" alt="" />
        <div class="controls">
          <a>
            <div class="btnPrev">
                <img src="/assets/images/workplace-btn-pre.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-pre-black.jpg" class="unhover" alt="" />
            </div>
          </a>
          <a>
            <div class="btnNext">
                <img src="/assets/images/workplace-btn-next.jpg" class="hover" alt="" />
                <img src="/assets/images/workplace-btn-next-black.jpg" class="unhover" alt="" />
            </div>
          </a>
        </div>
      </div>
      <div class="block">
        <img src="/assets/images/workplace2-row4-img2.png" class="block" alt="" />
        <span>Production<br>Areas</span>
        <div class="buttons">
          <a class="btnPlus"><img src="/assets/images/workplace-btn-plus.jpg" alt="" /></a>
          <a class="btnMinus">
            <!-- <img src="/assets/images/workplace-btn-minus.jpg" alt="" /> -->
            <img src="/assets/images/workplace-btn-plus-black.jpg" alt="" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
