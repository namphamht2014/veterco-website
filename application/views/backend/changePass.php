<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('myinfo_changepass')?></h1>
  </div>
  <div class="well">
    <?php echo validation_errors()?>
    <form class="" action="<?= site_url('Backend/doimatkhau')?>" method="post">
      <div class="form-group">
        <label for="oldpw"><?= $this->lang->line('changepass_old').$this->lang->line('field_required')?></label>
        <input type="password" name="oldpw" id="oldpw" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="newpw"><?= $this->lang->line('changepass_new').$this->lang->line('field_required')?></label>
        <input type="password" name="newpw" id="newpw" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="repeat-newpw"><?= $this->lang->line('changepass_repeat').$this->lang->line('field_required')?></label>
        <input type="password" name="repeat-newpw" id="repeat-newpw" value="" class="form-control">
      </div>
      <div class="form-group text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_update')?></button>
      </div>
    </form>
  </div>
</div>
