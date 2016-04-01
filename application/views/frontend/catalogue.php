<?php $this->load->view('frontend/home-header'); ?>

<div class="catalogueContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="links">
      <div class="title">Catalog</div>
      <ul>
        <li class="link1"><a href="">Nutrients</a></li>
        <li class="link2"><a href="">Antibiotics</a></li>
        <li class="link3"><a href="">Feed Additives</a></li>
      </ul>
    </div>
    <div class="dock">
      <div class="light default">
        <img src="/assets/images/catalogue-light.png" alt="" />
      </div>
      <div class="myPagination">
        <ul>
          <li class="p1">1</li>
          <li class="p2">2</li>
        </ul>
      </div>
      <div class="books item1">
        <div class="book item1">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('default', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book1-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page3"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page3"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book1.png" alt="" /></li>
            </ul>
          </a>
          <div class="desc">
            <div class="order">01</div>
            <div class="title color1">
              Horse
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
        <div class="book m-l-r-80 item2">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('move1', this)" onmouseout="catalogue.hideDiamond(this)">
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
          <div class="desc">
            <div class="order">02</div>
            <div class="title color2">
              Pet
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
        <div class="book item3">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('move2', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book3-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book3.png" alt="" /></li>
            </ul>
          </a>
          <div class="desc">
            <div class="order">03</div>
            <div class="title color3">
              Shrimp
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
      </div>
      <div class="books item2">
        <div class="book item4">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('default', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book4-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book4.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book4.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book4.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book4.png" alt="" /></li>
            </ul>
          </a>
          <div class="desc">
            <div class="order">04</div>
            <div class="title color4">
              Poultry
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
        <div class="book m-l-r-80 item5">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('move1', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book5-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book5.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book5.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book5.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book5.png" alt="" /></li>
            </ul>
          </a>
          <div class="desc">
            <div class="order">05</div>
            <div class="title color5">
              Daisy cow
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
        <div class="book item6">
          <a onclick="loginForm.show()" onmouseover="catalogue.moveLightTo('move2', this)" onmouseout="catalogue.hideDiamond(this)">
            <div class="diamond">
              <img src="/assets/images/catalogue-book6-diamond.png" alt="" />
            </div>
            <ul>
              <li class="page page3"><img src="/assets/images/catalogue-book6.png" alt="" /></li>
              <li class="page page2"><img src="/assets/images/catalogue-book6.png" alt="" /></li>
              <li class="page page1"><img src="/assets/images/catalogue-book6.png" alt="" /></li>
              <li class="cover"><img src="/assets/images/catalogue-book6.png" alt="" /></li>
            </ul>
          </a>
          <div class="desc">
            <div class="order">06</div>
            <div class="title color6">
              Fish
            </div>
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <div class="readMore">
              Read more
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
