<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('user_edit')?></h1>
  </div>
  <div class="well">
    <?php echo validation_errors()?>
    <form class="" action="<?= site_url('Users/sua/'.$user[0]->id)?>" method="post">
      <div class="form-group">
        <label for="username"><?= $this->lang->line('login_username')?></label>
        <input type="text" name="username" value="<?= $user[0]->username?>" readonly class="form-control">
      </div>
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('myinfo_fullname')?></label>
        <input type="text" name="ten" value="<?= $user[0]->ten?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="vaitro"><?= $this->lang->line('myinfo_role')?></label>
        <select class="form-control" name="vaitro">
          <option value="<?= isAdmin?>" <?= ($user[0]->vaitro == isAdmin) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt1')?></option>
          <option value="<?= isUser1?>" <?= ($user[0]->vaitro == isUser1) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt2')?></option>
          <option value="<?= isUser2?>" <?= ($user[0]->vaitro == isUser2) ? 'selected' : '' ; ?>><?= $this->lang->line('myinfo_role_opt3')?></option>
        </select>
      </div>
      <div class="form-group text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_update')?></button>
      </div>
    </form>
  </div>
</div>
