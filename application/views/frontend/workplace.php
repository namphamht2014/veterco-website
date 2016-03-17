<?php $this->load->view('frontend/home-header'); ?>
<div class="workplaceContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="row1">WORKPLACE</div>
    <a href="<?= site_url('workplace/who_we_are')?>">
      <div class="row2">
        <img src="/assets/images/workplace-row2.png" alt="" />
        <span>WHO<br>WE ARE?</span>
      </div>
    </a>
    <div class="row3 w-full">
      <img src="/assets/images/workplace-row3-2.png" alt="" class="floatImg"/>
      <span class="floatText">OUR R&D<br>TEAM IS PASSIONATE<br>ABOUT THEIR WORK</span>
      <a href="<?= site_url('workplace/core_beliefs_at_work_place')?>">
        <img src="/assets/images/workplace-row3.jpg" alt="" />
        <span>CORE<br>BELIEFS<br>AT<br>WORK PLACE</span>
      </a>
    </div>
    <div class="row4 w-full">
      <img src="/assets/images/workplace-row4.png" alt="" />
      <span>WORKING<br>IN<br>COLLABORATION</span>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
