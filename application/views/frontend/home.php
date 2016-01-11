<!-- side menus -->
<?php $this->load->view('frontend/home-side-menus'); ?>
<!-- header -->
<?php $this->load->view('frontend/home-header'); ?>

<div class="myContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <article class="first-article">
    <div class="animals">
      <div class="logo-block">
          <img src="<?= base_url()?>assets/images/logo-path1.png" alt="" id="logo1" />
          <img src="<?= base_url()?>assets/images/logo-path2.png" alt="" id="logo2" />
          <img src="<?= base_url()?>assets/images/logo-path3.png" alt="" id="logo3" />
          <img src="<?= base_url()?>assets/images/logo-path4.png" alt="" id="logo4" />
          <img src="<?= base_url()?>assets/images/logo-path7.png" alt="" id="logo7" />
          <img src="<?= base_url()?>assets/images/logo-path6.png" alt="" id="logo6" />
          <img src="<?= base_url()?>assets/images/logo-path5.png" alt="" id="logo5" />
      </div>
    </div>
    <div class="title-block">
      <div class="text-center">
        <b>GLOBAL LEADING VET</b>
      </div>
      <div class="text-center">
        <b>MEDICINE</b>
      </div>
      <div class="text-center">
        <b>MANUFACTURER</b>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 menu1">
        <a href="#" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>WORKPLACE</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
          <div class="desc-content">
            We don't define it as Factory or Company. We define it as Creative Corner.
          </div>
        </div>
      </div>
      <div class="col-md-6 menu2">
        <a href="#" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>LIFE CYCLES</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6 menu3">
        <a href="<?= site_url('fchairman')?>" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>CHAIRMAN'S WORDS</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6 menu4">
        <a href="<?= site_url('fsourcing')?>" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>PRODUCT SOURCING</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6 menu5">
        <a href="<?= site_url('fcatalogue')?>" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>CATALOGUE</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6 menu6">
        <a href="#" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>TALK TO US</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6 menu7">
        <div class="text-center">
          <a href="#" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>INNOVATION AND</b><br><b>TECHNOLOGY CENTER</b></a>

          <div class="menu-desc" style="padding-left: 150px">
            <div class="desc-line"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 menu8">
        <a href="<?= site_url('fdistributor')?>" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>DISTIBUTOR SUPPORT</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
      <div class="col-md-6">
      </div>
      <div class="col-md-6 menu9">
        <a href="#" onmouseover="menus.hover(this)" onmouseout="menus.unhover(this)"><b>OUR STORY</b></a>
        <div class="menu-desc">
          <div class="desc-line"></div>
        </div>
      </div>
    </div>
  </article>
</div>
<!-- Search -->
<div class="myContainer">
  <article class="search-article">
    <div class="search-form-bg"></div>
    <div class="search-form">
      <div class="title">
        Advanced search
      </div>
      <div class="sub-title">
        Find a product or information
      </div>
      <div class="fields">
        <div class="row">
          <div class="col-xs-6">
            <div class="dropdown">
              <button class="btn btn-default m-l-10 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Animal Type
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu m-l-23">
                <li><a onclick="dropdown.changed('dropdownMenu1', 'Action')">Action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu1', 'Another action')">Another action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu1', 'Something else here')">Something else here</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu1', 'Separated link')">Separated link</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="dropdown">
              <button class="btn btn-default m-l-minus-20 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Product Category
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu m-l-8">
                <li><a onclick="dropdown.changed('dropdownMenu2', 'Action')">Action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu2', 'Another action')">Another action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu2', 'Something else here')">Something else here</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu2', 'Separated link')">Separated link</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row m-t-38">
          <div class="col-xs-6">
            <div class="dropdown">
              <button class="btn m-l-10 btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Purpose
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu m-l-23">
                <li><a onclick="dropdown.changed('dropdownMenu3', 'Action')">Action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu3', 'Another action')">Another action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu3', 'Something else here')">Something else here</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu3', 'Separated link')">Separated link</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="dropdown">
              <button class="btn btn-default m-l-minus-20 dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Specification
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu m-l-8">
                <li><a onclick="dropdown.changed('dropdownMenu4', 'Action')">Action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu4', 'Another action')">Another action</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu4', 'Something else here')">Something else here</a></li>
                <li><a onclick="dropdown.changed('dropdownMenu4', 'Separated link')">Separated link</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row m-t-75">
          <div class="col-xs-12">
            <button type="submit" name="search" class="btn-search">SEARCH</button>
          </div>
        </div>
      </div>
    </div>
  </article>
</div>
<!-- Hello -->
<div class="myContainer">
  <article class="hello-article">
    <div class="desc">
       We are looking forward to Business Cooperation opportunities and would like to take the chance to not only introduce our high-end quality products but offer one-of-a-kind partnership with expertise and friendliness.
       <br><br>
       Vietnam is the new, promissing land of Asia with vitality and fresh energy. Here we strengthen our company to be competitive in the tough market worldwide and on top of everything, striving for the best quality and affordability. Now, Veterco Vietnam has been the Nation's most influential Veterinary Medicine Importers with GMP-WHO standard and professional dedication.
       <br><br>
       Thanks to our company's amazing team with technical and professional specialization in manufacturing, selling, negotiating. We guarantee a future of reliable products, trusted partnership, and mutual benefit.
    </div>
    <a onclick="hello.move()">
      <div class="myDiamond">
        <div class="title">
          <b>Hello</b>
        </div>
        <div class="white-arrow"></div>
        <div class="boxAnimate"></div>
        <div class="boxAnimate2"></div>
      </div>
    </a>
  </article>
</div>
<!-- lab -->
<div class="myContainer">
  <article class="lab-article">
    <div class="title">
      <div class="">
        <b>23 TH Aniversary of</b>
      </div>
      <div class="">
        <b>branding</b>
      </div>
    </div>
  </article>
</div>
<!-- lab2 -->
<div class="myContainer">
  <article class="lab2-article">
    <div class="block-container">
      <div class="red-dot"></div>
      <div class="block1">
        <img src="<?= base_url()?>assets/images/lab-block3.png" alt="" />
        <div class="title">
          Excellent products
        </div>
      </div>
      <div class="block2">
        <img src="<?= base_url()?>assets/images/lab-block4.png" alt="" />
        <div class="title">
          International standard
        </div>
      </div>
      <div class="block3">
        <img src="<?= base_url()?>assets/images/lab-block2.png" alt="" />
        <div class="title">
          Premium customer service
        </div>
        <div class="desc">
          We enhance and respect the relationship between our staff and each of the customers; listen to the customer to impove product standards and service quality.
        </div>
      </div>
      <div class="block4">
        <img src="<?= base_url()?>assets/images/lab-block1.png" alt="" />
        <div class="title">
          Friendly exporter
        </div>
      </div>
    </div>
  </article>
</div>
<!-- lab3 -->
<div class="myContainer">
  <article class="lab-img-article">
    <img src="<?= base_url()?>assets/images/lab-bg.png"/>
  </article>
</div>
<!-- Served -->
<div class="myContainer served-container">
  <article class="served-article">
    <div class="circle">
      <div class="circle-inner">
        <div class="served-title text-center">
          WE SERVED
        </div>
        <div class="circle-number1 text-center">
          332
        </div>
        <div class="circle-number1-underline"></div>
        <div class="circle-content text-center">
          <b>PRODUCTS</b> WITH <b>IMPRESSIVE FORMULAS</b>
        </div>
        <div class="circle-text-indent">
          <div class="row">
            <div class="col-sm-6">
              <div class="circle-number2">
                720,000
              </div>
              <div class="circle-content2 circle-content2-left">
                <b class="circle-text-bold">HOURS</b> OF
              </div>
              <div class="circle-content2 circle-content2-right">
                 R&D FARM TESTING
              </div>
            </div>
            <div class="col-sm-6">
              <div class="circle-number3">
                5,000
              </div>
              <div class="circle-content3 circle-content3-left">
                <b class="circle-text-bold">ANIMAL</b>
              </div>
              <div class="circle-content3 circle-content3-right">
                NUTRITION STUDIES
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</div>
<!-- distribution -->
<div class="myContainer">
  <article class="distribution-article">
    <div class="distribution-title">
      <b>DISTRIBUTION NETWORK</b>
    </div>
  </article>
</div>
<!-- Vietnam -->
<div class="myContainer">
  <article class="vietnam-article">
    <div class="vietnam-logo">
    </div>
  </article>
</div>
<!-- leading -->
<div class="myContainer">
  <article class="leading-article">
    <div class="leading-bg">
      <div class="white-rec"></div>
      <div class="content1">
        <div class="light-text">
          leading
        </div>
        <div class="bold-text">
          Animal
        </div>
        <div class="bold-text">
          health products
        </div>
        <div class="light-text">
          exporter
        </div>
      </div>
      <div class="content2">

      </div>
    </div>
  </article>
</div>
<!-- Value -->
<div class="myContainer value-article-container">
  <article class="value-article">
    <div class="value-title text-center">
      <b>VETERCO VALUE</b>
    </div>
    <div class="flipContainer">
      <ul class="flip secondPlay">
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">NEW PRODUCER APP</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">NEW PRODUCER APP</div>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">1</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">1</div>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">2</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">2</div>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">3</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">3</div>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">4</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">4</div>
                  </div>
              </a>
          </li>
          <li>
              <a href="#">
                  <div class="up">
                      <div class="shadow"></div>
                      <div class="inn">5</div>
                  </div>
                  <div class="down">
                      <div class="shadow"></div>
                      <div class="inn">5</div>
                  </div>
              </a>
          </li>
      </ul>
    </div>
  </article>
</div>
<div class="myContainer">
  <article class="thank-article">
    <div class="thank-title text-center">
      <b>THANK YOU!</b>
    </div>
    <div class="thank-content text-center">
      YOU ARE NOW BEING A PART OF OUR COMPANY'S SUCCESS.
    </div>
    <div class="thank-content text-center">
      CLICK SUBSCRIBE TO GET OUR COMPANY'S LATEST NEWS,
    </div>
    <div class="thank-content text-center">
      PROMOTIONAL AND NEW ARRIVAL.
    </div>
  </article>
</div>
<footer class="footer">
  <div class="copyright">
    All rights reversed &copy; <?= date('Y')?>
  </div>
</footer>
