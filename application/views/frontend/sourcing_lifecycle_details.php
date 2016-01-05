<?php if (file_exists(APPPATH.'views/frontend/sourcing_lifecycle_'.$animalName.'.php')): ?>
  <?php $this->load->view('frontend/home-header'); ?>
  <div class="sourcingLifeCycleDetailsContainer">
    <div class="loadingPage">
      <img src="/assets/images/waiting.gif" alt="" />
      <div class="text">
        Loading...
      </div>
    </div>
    <div class="pill">
      <img src="/assets/images/lifecycle-details-bo-pill.png" id="pill-img" alt="" />
      <div class="pill-text">
        Medication for <?= $animalEngName?>
      </div>
      <a onclick="lifecycle.showPill()">
        <img src="/assets/images/lifecycle-vienthuoc.png" id="icon" alt="" />
      </a>
    </div>
    <div class="content">
      <?php $this->load->view('frontend/sourcing_lifecycle_'.$animalName); ?>
    </div>
  </div>
  <?php $this->load->view('frontend/footer');?>
<?php else: ?>
  <?php show_404(); ?>
<?php endif; ?>
