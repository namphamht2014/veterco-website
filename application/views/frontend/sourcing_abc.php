<?php $this->load->view('frontend/home-header'); ?>
<div class="sourcingAbcContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="banner">
      <!-- <div class="title">
        Enzyme & Probiotic
      </div> -->
      <div class="images">
        <img src="/assets/images/showcase-banner2.jpg" alt="" />
        <img src="/assets/images/showcase-banner1.jpg" alt="" />
      </div>
      <div class="myClearfix"></div>
    </div>
    <div class="blocks">
      <div class="block-left height<?= $blockHeight?>">
        <section class="search">
          <input type="text" name="name" value="" class="tfSearch">
        </section>
        <section class="view">
          <div class="title">
            view
          </div>
          <div class="items">
            <a onclick="grid.show(this, 4)"><div class="item1 active">4</div></a>
            <a onclick="grid.show(this, 6)"><div class="item2">6</div></a>
            <div class="clearfix"></div>
          </div>
        </section>
        <section class="sortBy">
          <div class="title">
            sort by
          </div>
          <div class="items">
            <a onclick="productSearch.doSort('newest')"><div class="odd<?= ($sortBy == 'newest')? ' active': ''; ?>">new arrival</div></a>
            <a href="#"><div class="even">best featured</div></a>
            <div class="myClearfix"></div>
          </div>
          <div class="items">
            <a onclick="productSearch.doSort('name')"><div class="even<?= ($sortBy == 'name')? ' active': ''; ?>">name</div></a>
            <div class="odd">price hight to low</div>
            <div class="myClearfix"></div>
          </div>
          <div class="items">
            <div class="odd"></div>
            <div class="even">price low to hight</div>
            <div class="myClearfix"></div>
          </div>
        </section>
        <section class="filterBy">
          <div class="title">
            Filter by
          </div>
          <div id="cssmenu">
            <ul>
               <li class='active has-sub <?= ($filterBy['animal'] != '') ? ' open': '';?>'><a href='#'><span>animal type</span></a>
                  <ul style="<?= ($filterBy['animal'] != '') ? 'display:block;': '';?>">
                     <li class="<?= ($filterBy['animal'] == 'pig') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'pig')" class="odd"><div>pig</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'poultry') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'poultry')" class="even"><div>poultry</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'camel') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'camel')" class="even"><div>camel</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'horse') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'horse')" class="odd"><div>horse</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'cattle') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'cattle')" class="odd"><div>cattle</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'fish') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'fish')" class="even"><div>fish</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'pet') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'pet')" class="even"><div>pet</div></a></li>
                     <li class="<?= ($filterBy['animal'] == 'shrimp') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'animal', 'shrimp')" class="odd"><div>shrimp</div></a></li>
                   </ul>
               </li>
               <li class='active has-sub'><a href='#'><span>pathology | deseases</span></a>
                  <ul>
                     <li><a href='#' class="odd"><div>pig</div></a></li>
                     <li><a href='#' class="even"><div>poultry</div></a></li>
                     <li><a href='#' class="even"><div>camel</div></a></li>
                     <li><a href='#' class="odd"><div>horse</div></a></li>
                     <li><a href='#' class="odd"><div>cattle</div></a></li>
                     <li><a href='#' class="even"><div>fish</div></a></li>
                     <li><a href='#' class="even"><div>pet</div></a></li>
                     <li><a href='#' class="odd"><div>shrimp</div></a></li>
                  </ul>
               </li>
               <li class='active has-sub<?= ($filterBy['category'] != '') ? ' open': '';?>'><a href='#'><span>Category</span></a>
                  <ul style="<?= ($filterBy['category'] != '') ? 'display:block;': '';?>">
                     <div class="sub-title">aquatic</div>
                     <li class="<?= ($filterBy['category'] == 'antiparasitics') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'antiparasitics')" class="odd"><div>Antiparasitics</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'environmental treatment') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'environmental treatment')" class="even"><div>environmental treatment</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'enzyme-probiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'enzyme-probiotic')" class="even"><div>enzyme-probiotic</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'multi-entibiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'multi-entibiotic')" class="odd"><div>multi-entibiotic</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'nutriton & supplement') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'nutriton & supplement')" class="odd"><div>nutriton & supplement</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'single-antibiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'single-antibiotic')" class="even"><div>single-antibiotic</div></a></li>
                  </ul>
                  <ul style="<?= ($filterBy['category'] != '') ? 'display:block;': '';?>">
                     <div class="sub-title">animal</div>
                     <li class="<?= ($filterBy['category'] == 'antibiotic-herbal') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'antibiotic-herbal')" class="odd"><div>antibiotic-herbal</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'antibiotic & vitamin') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'antibiotic & vitamin')" class="even"><div>antibiotic & vitamin</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'antiparasitics') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'antiparasitics')" class="even"><div>antiparasitics</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'enzyme-probiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'enzyme-probiotic')" class="odd"><div>enzyme-probiotic</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'multi-antibiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'multi-antibiotic')" class="odd"><div>multi-antibiotic</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'mycotoxin') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'mycotoxin')" class="even"><div>mycotoxin</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'nutriton & supplement') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'nutriton & supplement')" class="even"><div>nutriton & supplement</div></a></li>
                     <li class="<?= ($filterBy['category'] == 'single-entibiotic') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'category', 'single-entibiotic')" class="odd"><div>single-entibiotic</div></a></li>
                  </ul>
               </li>
               <li class='active has-sub<?= ($filterBy['serie'] != '') ? ' open': '';?>'><a href='#'><span>product series</span></a>
                  <ul style="<?= ($filterBy['serie'] != '') ? 'display:block;': '';?>">
                     <li class="<?= ($filterBy['serie'] == 'dr. t') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'dr. t')" class="odd"><div>dr. t</div></a></li>
                     <li class="<?= ($filterBy['serie'] == 'pro-react') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'pro-react')" class="even"><div>pro-react</div></a></li>
                     <li class="<?= ($filterBy['serie'] == 'wsp antimax') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'wsp antimax')" class="even"><div>wsp antimax</div></a></li>
                     <li class="<?= ($filterBy['serie'] == 'wsp pro-react') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'wsp pro-react')" class="odd"><div>wsp pro-react</div></a></li>
                     <li class="<?= ($filterBy['serie'] == 'wsp pro-support') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'wsp pro-support')" class="odd"><div>wsp pro-support</div></a></li>
                     <li class="<?= ($filterBy['serie'] == 'wsp pro-bio') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'serie', 'wsp pro-bio')" class="odd"><div>wsp pro-bio</div></a></li>
                  </ul>
               </li>
               <li class='active has-sub last<?= ($filterBy['form'] != '') ? ' open': '';?>'><a href='#'><span>product form</span></a>
                  <ul style="<?= ($filterBy['form'] != '') ? 'display:block;': '';?>">
                     <li class="<?= ($filterBy['form'] == 'powder') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'form', 'powder')" class="odd"><div>powder</div></a></li>
                     <li class="<?= ($filterBy['form'] == 'oitment') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'form', 'oitment')" class="even"><div>oitment</div></a></li>
                     <li class="<?= ($filterBy['form'] == 'liquid') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'form', 'liquid')" class="even"><div>liquid solution</div></a></li>
                     <li class="<?= ($filterBy['form'] == 'salt block') ? ' active': '';?>"><a onclick="productSearch.doFilter(this,'form', 'salt block')" class="odd"><div>salt block</div></a></li>
                  </ul>
               </li>
            </ul>
          </div>
        </section>
        <section class="watch">
          <div class="title">
            You watch this
          </div>
          <div class="products">
            <a href="">
              <img src="/assets/images/sourcing-new-product1.png" alt="" />
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
              <img src="/assets/images/sourcing-new-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
            </a>
          </div>
        </section>
      </div>
      <div class="block-right">
        <div class="redLine"></div>
        <div class="product-list">
          <?php foreach ($products as $key => $value): ?>
          <a href="<?= site_url('fsourcing/product_details/'.$value->spID)?>">
            <div class="product">
              <img src="/assets/images/sourcing-new-product4.png" alt="" />
              <div class="product-name"><?= $value->tensp?></div>
              <div class="product-form-details">
                <span class="big"><?= $value->tenNhom?></span><br>
                <span class="small"><?= $value->formsp?></span>
              </div>
            </div>
          </a>
          <?php endforeach; ?>
          <!-- line 1 -->
          <!-- <a href="<?= site_url('fsourcing/product_details/4')?>">
            <div class="product">
              <img src="/assets/images/sourcing-new-product4.png" alt="" />
              <div class="product-name">ade bc complex</div>
              <div class="product-form-details">
                <span class="big">antiparasitics</span><br>
                <span class="small">Powder</span>
              </div>
            </div>
          </a>
          <a href="<?= site_url('fsourcing/product_details/3')?>">
            <div class="product">
              <img src="/assets/images/sourcing-new-product3.png" alt="" />
              <div class="product-name">ampi cotrim oral</div>
              <div class="product-form-details">
                <span class="big">antiparasitics</span><br>
                <span class="small">Powder</span>
              </div>
            </div>
          </a>
          <a href="<?= site_url('fsourcing/product_details/1')?>">
            <div class="product">
              <img src="/assets/images/sourcing-new-product1.png" alt="" />
              <div class="product-name">Flumequil</div>
              <div class="product-form-details">
                <span class="big">antiparasitics</span><br>
                <span class="small">Powder</span>
              </div>
            </div>
          </a>
          <a href="<?= site_url('fsourcing/product_details/2')?>">
            <div class="product">
              <img src="/assets/images/sourcing-new-product2.png" alt="" />
              <div class="product-name">enzymsubtyl</div>
              <div class="product-form-details">
                <span class="big">antiparasitics</span><br>
                <span class="small">Powder</span>
              </div>
            </div>
          </a> -->

          <div class="myClearfix"></div>
        </div>
      </div>
      <div class="myClearfix"></div>
    </div>
  </div>

  <!-- <?php $this->load->view('frontend/footer');?> -->
</div>
