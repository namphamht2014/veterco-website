<div class="container">
  <div class="page-header">
    <h2><?= $this->lang->line('cus_details')?></h2>
  </div>
  <div class="well row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('login_username')?></h4>
          <p>
            <?= $customer[0]->username?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_email')?></h4>
          <p>
            <?= $customer[0]->email?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_hotline')?></h4>
          <p>
            <?= $customer[0]->hotline?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_ngaytao')?></h4>
          <p>
            <?= $customer[0]->ngaytao?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_ngayupdate')?></h4>
          <p>
            <?= $customer[0]->ngayupdate?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_companyname')?></h4>
          <p>
            <?= $customer[0]->tenCty?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_representative')?></h4>
          <p>
            <?= $customer[0]->ngdaidien?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_businessno')?></h4>
          <p>
            <?= $customer[0]->sodkkd?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_bank')?></h4>
          <p>
            <?= $customer[0]->bankinfo?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_address')?></h4>
          <p>
            <?= $customer[0]->diachi?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('cus_shipinfo')?></h4>
          <p>
            <?= $customer[0]->thongtingoihang?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
