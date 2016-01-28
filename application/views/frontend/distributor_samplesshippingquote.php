<?php $this->load->view('frontend/home-header'); ?>
<div class="samplesContainer">
  <div class="loadingPage">
    <img src="/assets/images/waiting.gif" alt="" />
    <div class="text">
      Loading...
    </div>
  </div>
  <div class="content">
    <div class="title">
      <div class="number">02</div>
      <div class="txt">Sample Shipping Quote</div>
    </div>
    <div class="desc">
      <b>Hello Distributor!</b> For your Product Customization, please kindly submit Product Information into the below form, we will get back to you in 24 hours with Preliminary Quotation.
    </div>
    <div class="myForm">
      <form class="" action="" method="post">
        <div class="line">
          <div class="myLabel">
            Product Name
          </div>
          <div class="myField">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)"  name="productName" value="Please add comma for multiple item selection!">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Pack Size
          </div>
          <div class="myField">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)"  name="productName" value="Please be specific on the pack size you require!">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Quantity Per Item
          </div>
          <div class="myField">
            <input type="text" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)"  name="productName" value="How many of each do you need?">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Address
          </div>
          <div class="myField">
            <input type="text" name="productName" value="">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Country
          </div>
          <div class="myField">
            <input type="text" name="productName" value="">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Shipping Method
          </div>
          <div class="myField">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                DHL Express Shipping
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a >DHL Express Shipping</a></li>
                <li><a >Regular Shipping</a></li>
              </ul>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="line">
          <div class="myLabel">
            Special Preference
          </div>
          <div class="myField">
            <!-- <input type="text" name="productName" value=""> -->
            <textarea name="name" onfocus="myField.onFocus(this)" onblur="myField.onBlur(this)" rows="2" cols="40">Is there anything else we need to know in term of custom clearance or eles?</textarea>
          </div>
          <div class="clearfix"></div>
        </div>
        <button id="btnSubmit" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('frontend/footer');?>
