<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingAnimalContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="shine"></div>
    <div class="outter-cycle">
      <div class="inner-cycle">
        <div class="title">
          Veterco - Vietnam <br>
          <span>Buffalo</span>
        </div>
      </div>
      <a onclick="animal.details()"><div class="white-cycle"></div></a>
      <div class="small-cycle">
        <a onclick="animal.changed(this, 1, 1)"><div class="cycle1 active"></div></a>
        <a onclick="animal.changed(this, 2, 1)"><div class="cycle2"></div></a>
        <a onclick="animal.changed(this, 3, 0)"><div class="cycle3"></div></a>
        <a onclick="animal.changed(this, 4, 1)"><div class="cycle4"></div></a>
        <a onclick="animal.changed(this, 5, 1)"><div class="cycle5"></div></a>
        <a onclick="animal.changed(this, 6, 1)"><div class="cycle6"></div></a>
        <a onclick="animal.changed(this, 7, 1)"><div class="cycle7"></div></a>
        <a onclick="animal.changed(this, 8, 0)"><div class="cycle8"></div></a>
        <a onclick="animal.changed(this, 9, 1)"><div class="cycle9"></div></a>
        <a onclick="animal.changed(this, 10, 1)"><div class="cycle10"></div></a>
        <a onclick="animal.changed(this, 11, 1)"><div class="cycle11"></div></a>
        <a onclick="animal.changed(this, 12, 1)"><div class="cycle12"></div></a>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
