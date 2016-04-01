<?php $this->load->view('frontend/home-header'); ?>
<div class="whyUsDetailsContainer blocks">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="right-block <?= $section?>"></div>
  <div class="small-block <?= $section?>">
    <img src="/assets/images/distributor-why-us-details-<?= $section?>-icon.png" alt="" />
  </div>
  <div class="white-block <?= $section?>">
    <div class="text"><?= $white_text?></div>
  </div>
  <div class="center-block <?= $section?>">
    <div class="text">
      <?= $content_text?>
    </div>
  </div>
  <div class="above-arrow-block"></div>
  <div class="arrow-block <?= $section?>">
    <a href="<?= site_url('Fdistributor/whyUs')?>">
      <div class="text">
        Why Us
      </div>
    </a>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
