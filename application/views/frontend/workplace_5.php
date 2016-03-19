<?php $this->load->view('frontend/home-header'); ?>
<div class="workplaceContainer child5">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <a href="<?= site_url('workplace')?>">
      <div class="row1"><img src="/assets/images/workplace-back-btn.png" alt="" />OUR R&D TEAM IS PASSIONATE ABOUT THEIR WORK</div>
    </a>
    <div class="row2">
      <div class="mySlider">
        <img src="/assets/images/workplace5-img5.jpg" class="items active" id="item1" alt="" />
        <img src="/assets/images/workplace5-img6.jpg" class="items" id="item2" alt="" />
          <img src="/assets/images/workplace5-img4.jpg" class="items" id="item3" alt="" />
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
        <img src="/assets/images/workplace5-img3.jpg" class="block" alt="" />
        <span>Center of<br>Research<br>and<br>Development<br>-R&D</span>
        <div class="buttons">
          <a class="btnPlus"><img src="/assets/images/workplace-btn-plus.jpg" alt="" /></a>
          <a class="btnMinus">
            <img src="/assets/images/workplace-btn-plus-black.jpg" alt="" />
          </a>
        </div>
      </div>
    </div>
    <div class="row3">
      <div class="block1">
        <img src="/assets/images/workplace5-img2.png" alt="" />
        <span>The Veterco R&D team is comprised of scientific experts across numerous disciplines in science and veterinary medicine.  These experts leverage state-of-the-art research facilities, the latest technologies and innovative approaches to deliver complete health solutions to veterinarians and livestock producer.<br><br>
              Our R&D for existing products focuses on broadening and enhancing our existing portfolio through the addition of new species or claims, securing approvals in additional countries, or creating new combinations and reformulations that extend Veterco innovations to a growing range of those who raise and care for animals worldwide.
        </span>
      </div>
      <div class="block2">
        <img src="/assets/images/workplace5-img1.jpg" alt="" />
      </div>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
