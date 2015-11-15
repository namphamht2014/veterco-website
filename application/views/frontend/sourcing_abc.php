<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingAbcContainer">
  <div class="content">
    <div class="banner">
      <div class="title">
        Enzyme & Probiotic
      </div>
    </div>
    <div class="blocks">
      <div class="block-left">
        <section class="view">
          <div class="title">
            view
          </div>
          <div class="items">
            <a onclick="grid.show(this, 4)"><div class="item1 active">4</div></a>
            <a onclick="grid.show(this, 6)"><div class="item2">6</div></a>
          </div>
        </section>
        <section class="sortBy">
          <div class="title">
            sort by
          </div>
          <div class="items">
            <a href=""><div class="odd active">new arrival</div></a>
            <a href="#"><div class="even">best featured</div></a>
          </div>
          <div class="items">
            <div class="even">name</div>
            <div class="odd">price hight to low</div>
          </div>
          <div class="items">
            <div class="odd"></div>
            <div class="even">price low to hight</div>
          </div>
        </section>
        <section class="filterBy">
          <div class="title">
            Filter by
          </div>
          <div id="cssmenu">
            <ul>
               <li class='active has-sub open'><a href='#'><span>animal type</span></a>
                  <ul style="display: block;">
                     <li><a href='#' class="odd"><div>pig</div></a></li
                     ><li><a href='#' class="even"><div>aquatics</div></a></li
                     ><li><a href='#' class="even"><div>poultry</div></a></li
                     ><li><a href='#' class="odd"><div>pets</div></a></li
                     ><li><a href='#' class="odd"><div>chicken</div></a></li
                     ><li><a href='#' class="even"><div>catle</div></a></li>
                   </ul>
               </li>
               <li class='active has-sub'><a href='#'><span>pathology | deseases</span></a>
                  <ul>
                     <li><a href='#' class="odd"><span>Product 1</span></a></li
                     ><li><a href='#' class="even"><span>Product 2</span></a></li>
                  </ul>
               </li>
               <li><a href='#'><span>Category</span></a></li>
               <li><a href='#'><span>product series</span></a></li>
               <li class='last'><a href='#'><span>product form</span></a></li>
            </ul>
          </div>
        </section>
        <section class="watch">
          <div class="title">
            You watch this
          </div>
          <div class="products">
            <a href="">
              <img src="/assets/images/sourcing-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
        </section>
        <section class="recommend">
          <div class="title">
            We recommend these
          </div>
          <div class="products">
            <a href="">
              <img src="/assets/images/sourcing-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
        </section>
      </div>
      <div class="block-right">
        <div class="redLine"></div>
        <div class="product-list">
          <!-- line 1 -->
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/4')?>">
              <img src="/assets/images/sourcing-product4.png" alt="" />
              <div class="product-name">ade bc complex</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/3')?>">
              <img src="/assets/images/sourcing-product3.png" alt="" />
              <div class="product-name">ampi cotrim oral</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/1')?>">
              <img src="/assets/images/sourcing-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/2')?>">
              <img src="/assets/images/sourcing-product2.png" alt="" />
              <div class="product-name">enzymsubtyl</div>
            </a>
          </div>
          <!-- line 2 -->
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/5')?>">
              <img src="/assets/images/sourcing-product5.png" alt="" />
              <div class="product-name">erytracin-c</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/6')?>">
              <img src="/assets/images/sourcing-product2.png" alt="" />
              <div class="product-name">enzymsubtyl</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/7')?>">
              <img src="/assets/images/sourcing-product6.png" alt="" />
              <div class="product-name">anti-stress</div>
            </a>
          </div>
          <div class="product">
            <a href="<?= site_url('fsourcing/product_details/8')?>">
              <img src="/assets/images/sourcing-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
          <!-- line 3 -->
          <div class="product">
            <a href="">
              <img src="/assets/images/sourcing-product4.png" alt="" />
              <div class="product-name">ade bc complex</div>
            </a>
          </div>
          <div class="product">
            <a href="">
              <img src="/assets/images/sourcing-product3.png" alt="" />
              <div class="product-name">ampi cotrim oral</div>
            </a>
          </div>
          <div class="product">
            <a href="">
              <img src="/assets/images/sourcing-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
          <div class="product">
            <a href="">
              <img src="/assets/images/sourcing-product2.png" alt="" />
              <div class="product-name">enzymsubtyl</div>
            </a>
          </div>
        </div>
      </div>
      <div class="clear-both"></div>
    </div>
  </div>
</div>

<?php $this->load->view('frontend/footer');?>
