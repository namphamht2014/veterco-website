<?php $this->load->view('frontend/home-header'); ?>
<div class="promotionalContainer listItems">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div id="myCarousel" class="carousel slide h-full" data-ride="carousel" data-interval="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner h-full" role="listbox">
        <div class="item h-full active">
          <div class="grids">
            <div class="myblocks block1">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item10.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item5.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item3.png" alt="" /></div></a>
            </div>
            <div class="myblocks block2">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item4.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item9.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item7.png" alt="" /></div></a>
            </div>
            <div class="myblocks block3">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item11.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item13.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item6.png" alt="" /></div></a>
            </div>
            <div class="myblocks block4">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item1.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item2"><img src="/assets/images/distributor-item12.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item8.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item2.png" alt="" /></div></a>
            </div>
          </div>
        </div>

        <div class="item h-full">
          <div class="grids">
            <div class="myblocks block1">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item10.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item5.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item3.png" alt="" /></div></a>
            </div>
            <div class="myblocks block2">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item4.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item9.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item7.png" alt="" /></div></a>
            </div>
            <div class="myblocks block3">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item11.png" alt="" /></div></a>
              <div class="items item2"></div>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item13.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item6.png" alt="" /></div></a>
            </div>
            <div class="myblocks block4">
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item1"><img src="/assets/images/distributor-item1.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item2"><img src="/assets/images/distributor-item12.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item3"><img src="/assets/images/distributor-item8.png" alt="" /></div></a>
              <a href="<?= site_url('fdistributor/promotional_item_details')?>"><div class="items item4"><img src="/assets/images/distributor-item2.png" alt="" /></div></a>
            </div>
          </div>
        </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="nav-bg"></span>
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="nav-bg"></span>
        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
