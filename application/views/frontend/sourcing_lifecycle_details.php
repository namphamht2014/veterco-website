<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingLifeCycleDetailsContainer">
  <div class="pill">
    <img src="/assets/images/lifecycle-details-bo-pill.png" id="pill-img" alt="" />
    <a onclick="lifecycle.showPill()">
      <img src="/assets/images/lifecycle-vienthuoc.png" id="icon" alt="" />
    </a>
  </div>
  <div class="content">
    <?php $this->load->view('frontend/sourcing_lifecycle_trau'); ?>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
