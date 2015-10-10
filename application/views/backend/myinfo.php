<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Backend/doimatkhau')?>" class="btn btn-info pull-right"><?= $this->lang->line('myinfo_changepass')?></a>
    <a onclick="main.updateInfo(this)" class="btn btn-info pull-right m-r-10"><?= $this->lang->line('myinfo_edit')?></a>
    <h1><?= $this->lang->line('backend_myinfo')?></h1>
  </div>
  <div class="well">
    <?php echo validation_errors()?>
    <form class="" action="<?= site_url('Backend/myinfo')?>" method="post">
      <div class="form-group">
        <label for="username"><?= $this->lang->line('login_username')?></label>
        <input type="text" name="username" id="username" value="<?= $user[0]->username?>" readonly class="form-control">
      </div>
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('myinfo_fullname')?></label>
        <input type="text" name="ten" id="ten" value="<?= $user[0]->ten?>" readonly class="form-control">
      </div>
      <div class="form-group">
        <?php if ($user[0]->vaitro == isAdmin): ?>
          <label for="vaitro"><?= $this->lang->line('myinfo_role')?></label>
          <select class="form-control" name="vaitro" id="vaitro" disabled="">
            <option value="<?= isAdmin?>" <?= ($user[0]->vaitro == isAdmin) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt1')?></option>
            <option value="<?= isUser1?>" <?= ($user[0]->vaitro == isUser1) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt2')?></option>
            <option value="<?= isUser2?>" <?= ($user[0]->vaitro == isUser2) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt3')?></option>
          </select>
        <?php else: ?>
          <label for="vaitro"><?= $this->lang->line('myinfo_role')?></label>
          <input type="text" class="form-control" readonly value="<?= ($user[0]->vaitro == isUser1)? $this->lang->line('myinfo_role_opt2'): $this->lang->line('myinfo_role_opt3'); ?>">
          <input type="hidden" name="vaitro" value="<?= $user[0]->vaitro?>">
        <?php endif; ?>
      </div>
      <div class="form-group btnSubmit text-right">
      </div>
    </form>
  </div>
</div>
