<?php $this->load->view('frontend/home-header'); ?>
<div class="myContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="blocks">
    <img class="bground" src="/assets/images/distributor-blocks.png" alt="" />
    <div class="title1">
      We believe great drug begins with great
    </div>
    <div class="title2">
      conversation!
    </div>
    <div class="be-the-first">
      <div class="text">
        Be the first!
      </div>
    </div>
    <div class="order-status">
      <div class="text">
        Order Status!
      </div>
    </div>
    <div class="product-customization">
      <div class="text">
        Product customization
      </div>
    </div>
    <div class="samples">
      <div class="text">
        Samples <br>
        Shipping Quote
      </div>
    </div>
    <div class="promotional">
      <div class="text">
        Promotional<br>
        Items Selection
      </div>
    </div>
    <div class="why-us">
      <div class="text">
        Why Us
      </div>
    </div>

    <a href=""><div class="samples-block"></div></a>
    <a href=""><div class="order-status-block"></div></a>
    <a href="<?= site_url('fdistributor/whyUs')?>"><div class="why-us-block"></div></a>
    <a href=""><div class="be-the-first-block"></div></a>
    <a href=""><div class="product-customization-block"></div></a>
    <a href=""><div class="promotional-block"></div></a>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
