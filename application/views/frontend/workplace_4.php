<?php $this->load->view('frontend/home-header'); ?>
<div class="workplaceContainer child4">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <a href="<?= site_url('workplace')?>">
      <div class="row1"><img src="/assets/images/workplace-back-btn.png" alt="" />WORKING IN COLLABORATION</div>
    </a>
    <div class="row2">
      <div class="block1">
        <img src="/assets/images/workplace4-img1.jpg" alt="" />
        <span>Partner<br>Friendly</span>
      </div>
      <div class="block2">
        <img src="/assets/images/workplace4-img2.jpg" alt="" />
      </div>
    </div>
    <div class="row3">
      <div class="block1">
        <img src="/assets/images/workplace4-img3.jpg" alt="" />
      </div>
      <div class="block2">
        <img src="/assets/images/workplace4-img4.png" alt="" />
        <span>&nbsp;&nbsp;&nbsp;&nbsp;No company, large or small, can succeed alone in the world of breakthrough animal health products. Powerful partnerships combine complementary talents, expertise and passion with the organizational capacity to deliver innovative products globally and to advance science and improved care of animals.<br><br>
        	&nbsp;&nbsp;We seek to complement our partner’s skills and technologies for mutual success through creative and flexible working arrangements. We join forces with partners throughout the animal health, pharmaceuticals, biotechnology, and agribusiness industries and collaborate with current and emerging leaders in academia, public and private institutions who are focused on improving the health and wellbeing of animals and the people who care for them.
        </span>
      </div>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
