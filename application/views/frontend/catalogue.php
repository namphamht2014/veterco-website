<?php $this->load->view('frontend/home-header'); ?>
<div class="catalogueContainer">
  <div class="content">
    <div class="dock">
      <div class="light default">
        <img src="/assets/images/catalogue-light.png" alt="" />
      </div>
      <div class="books">
        <div class="book">
          <a href="#" onmouseover="catalogue.moveLightTo('default', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book2-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
            </ul>
          </a>
        </div>
        <div class="book m-l-r-80">
          <a href="#" onmouseover="catalogue.moveLightTo('move1', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book2-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book2.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book2.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book2.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book2.png" alt="" /></li>
            </ul>
          </a>
        </div>
        <div class="book">
          <a href="#" onmouseover="catalogue.moveLightTo('move2', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book2-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
            </ul>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
