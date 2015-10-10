<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('user_add')?></h1>
  </div>
  <div class="well">
    <?php echo validation_errors()?>
    <form class="" action="<?= site_url('Users/tao')?>" method="post">
      <div class="form-group">
        <label for="username"><?= $this->lang->line('login_username')?></label>
        <input type="text" name="username" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="password"><?= $this->lang->line('login_password')?></label>
        <input type="password" name="password" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('myinfo_fullname')?></label>
        <input type="text" name="ten" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="vaitro"><?= $this->lang->line('myinfo_role')?></label>
        <select class="form-control" name="vaitro">
          <option value="<?= isAdmin?>"><?= $this->lang->line('myinfo_role_opt1')?></option>
          <option value="<?= isUser1?>"><?= $this->lang->line('myinfo_role_opt2')?></option>
          <option value="<?= isUser2?>"><?= $this->lang->line('myinfo_role_opt3')?></option>
        </select>
      </div>
      <div class="form-group text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_add')?></button>
      </div>
    </form>
  </div>
</div>
