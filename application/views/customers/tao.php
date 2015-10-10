<div class="container">
  <div class="page-header">
    <h2><?= $page_header?></h2>
  </div>
  <div class="well row">
    <form class="col-sm-12" action="<?= $action?>" method="post">
      <div class="row form-group">
        <label for="username"><?= $this->lang->line('login_username')?></label>
        <input type="text" name="username" value="<?= $username?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="password"><?= $this->lang->line('login_password')?></label>
        <input type="password" name="password" value="<?= $password?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="ngdaidien"><?= $this->lang->line('cus_representative')?></label>
        <input type="text" name="ngdaidien" value="<?= $ngdaidien?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="tencty"><?= $this->lang->line('cus_companyname')?></label>
        <input type="text" name="tencty" value="<?= $tencty?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="sodkkd"><?= $this->lang->line('cus_businessno')?></label>
        <input type="text" name="sodkkd" value="<?= $sodkkd?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="diachi"><?= $this->lang->line('cus_address')?></label>
        <textarea name="diachi" class="form-control" rows="8" cols="40"><?= $diachi?></textarea>
      </div>
      <div class="row form-group">
        <label for="hotline"><?= $this->lang->line('cus_hotline')?></label>
        <input type="text" name="hotline" value="<?= $hotline?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="email"><?= $this->lang->line('cus_email')?></label>
        <input type="email" name="email" value="<?= $email?>" class="form-control">
      </div>
      <div class="row form-group">
        <label for="bankinfo"><?= $this->lang->line('cus_bank')?></label>
        <textarea name="bankinfo" class="form-control" rows="8" cols="40"><?= $bankinfo?></textarea>
      </div>
      <div class="row form-group">
        <label for="shipinfo"><?= $this->lang->line('cus_shipinfo')?></label>
        <textarea name="shipinfo" class="form-control" rows="8" cols="40"><?= $shipinfo?></textarea>
      </div>
      <div class="row form-group text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $submit_text?></button>
    </div>
    </form>
  </div>
</div>
