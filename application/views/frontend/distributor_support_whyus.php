<?php $this->load->view('frontend/home-header'); ?>
<div class="whyUsContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <a href="<?= site_url('Fdistributor/whyUs/Details/friendly')?>">
    <div class="blocks block1">
      <div class="active"></div>
      <div class="text">distributor friendly</div>
    </div>
  </a>
  <a href="<?= site_url('Fdistributor/whyUs/Details/benefit')?>">
    <div class="blocks block2">
      <div class="active"></div>
      <div class="text">yearly incentive benefit</div>
    </div>
  </a>
  <a href="<?= site_url('Fdistributor/whyUs/Details/ongoing')?>">
    <div class="blocks block3">
      <div class="active"></div>
      <div class="text">on-going technical training</div>
    </div>
  </a>
  <a href="<?= site_url('Fdistributor/whyUs/Details/website')?>">
    <div class="blocks block4">
      <div class="active"></div>
      <div class="text">website</div>
    </div>
  </a>
  <a href="<?= site_url('Fdistributor/whyUs/details/monopoly')?>">
    <div class="blocks block5">
      <div class="active"></div>
      <div class="text">monopoly + vip pricing margin</div>
    </div>
  </a>
  <a href="<?= site_url('Fdistributor/whyUs/Details')?>">
    <div class="blocks block6">
      <div class="active"></div>
      <div class="text">highest performaning and innovative products</div>
    </div>
  </a>
</div>
<?php $this->load->view('frontend/footer');?>
