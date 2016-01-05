<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="title">
      Sourcing By
    </div>
    <a href="<?= site_url('fsourcing/abc')?>" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block1-bg">
      </div>
      <div class="block1">
        <div class="block-title">
          ABC
        </div>
      </div>
    </a>
    <a href="" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block2-bg">
      </div>
      <div class="block2">
        <div class="block-title">
          <div class="">
              Pathology
          </div>
          <div class="">
            ---
          </div>
          <div class="">
            Diseases
          </div>
        </div>
      </div>
    </a>
    <a href="" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block3-bg">
      </div>
      <div class="block3">
        <div class="block-title">
          Product series
        </div>
      </div>
    </a>
    <a href="" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block4-bg">
      </div>
      <div class="block4">
        <div class="block-title">
          Product form
        </div>
      </div>
    </a>
    <a href="" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block5-bg">
      </div>
      <div class="block5">
        <div class="block-title">
          Category
        </div>
      </div>
    </a>
    <a href="<?= site_url('fsourcing/animal_type')?>" onmouseover="block.hover(this)" onmouseout="block.unhover(this)">
      <div class="block6-bg">
      </div>
      <div class="block6">
        <div class="block-title">
          Animal type
        </div>
      </div>
    </a>
  </div>
  <?php $this->load->view('frontend/footer');?>
</div>
