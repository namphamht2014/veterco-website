<?php $this->load->view('frontend/home-header'); ?>
<div class="whyUsContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <a href="<?= site_url('FDistributor/whyUs/Details/friendly')?>">
    <div class="block1">
      <div class="active"></div>
      <div class="text">distributor friendly</div>
    </div>
  </a>
  <a href="<?= site_url('FDistributor/whyUs/Details/benefit')?>">
    <div class="block2">
      <div class="active"></div>
      <div class="text">yearly incentive benefit</div>
    </div>
  </a>
  <a href="<?= site_url('FDistributor/whyUs/Details/ongoing')?>">
    <div class="block3">
      <div class="active"></div>
      <div class="text">on-going technical training</div>
    </div>
  </a>
  <a href="<?= site_url('FDistributor/whyUs/Details/website')?>">
    <div class="block4">
      <div class="active"></div>
      <div class="text">website</div>
    </div>
  </a>
  <a href="<?= site_url('FDistributor/whyUs/details/monopoly')?>">
    <div class="block5">
      <div class="active"></div>
      <div class="text">monopoly + vip pricing margin</div>
    </div>
  </a>
  <a href="<?= site_url('FDistributor/whyUs/Details')?>">
    <div class="block6">
      <div class="active"></div>
      <div class="text">highest performaning and innovative products</div>
    </div>
  </a>
</div>
<?php $this->load->view('frontend/footer');?>
