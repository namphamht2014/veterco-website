<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingProductDetailsContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="diamond-block"></div>
    <div class="diamond">
      <div class="desc">
        <div class="title"><?= $productObj->tensp?></div>
        <div class="subtitle"><?= $productObj->tenNhom?></div>
        <div class="product-info-group">
          <div class="product-info">
            <div class="weight"><?= $productObj->khoiluong?></div>
            <div class="form"><?= $productObj->formsp?></div>
            <div class="product-desc">
              <div class="title">
                <span>Description:</span> <?= $productObj->mota?>
              </div>
              <div class="title">
                <span>Indication:</span> <?= $productObj->chidinh?>
              </div>
              <div class="title">
                <span>Contra-Indication:</span> <?= $productObj->chongchidinh?>
              </div>
              <div class="title">
                <span>Dosage and Administration:</span> <?= $productObj->lieudung?>
              </div>
              <div class="title">
                <span>Withdrawal period:</span> <?= $productObj->cachdung?>
              </div>
            </div>
            <div class="more">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <div class="buttons">
            <div class="line1" class="m-b-5">
              <a onclick="productDetails.showLoremIpsum()"><div><div class="blackCircle"></div></div></a>
              <a onclick="productDetails.showLoremIpsum()" class="m-l-5"><div class="paper"></div></a>
            </div>
            <div class="line2" class="m-b-5">
              <a onclick="productDetails.showLoremIpsum()"><div><div class="blackArrow"></div></div></a>
              <a onclick="productDetails.showLoremIpsum()" class="m-l-5"><div class="pointer"></div></a>
            </div>
            <div class="line3">
              <a onclick="productDetails.showDesc()"><div>Description</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottle"></div>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
