<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Thanhphan')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('compo_add')?></h1>
  </div>
  <div class="well">
    <?= validation_errors()?>
    <form class="" action="<?= site_url('Thanhphan/tao')?>" method="post">
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('field_name')?></label>
        <input type="text" name="ten" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="donvi"><?= $this->lang->line('field_unit')?></label>
        <input type="text" name="donvi" class="form-control" value="">
      </div>
      <div class="text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_add')?></button>
      </div>
    </form>
  </div>
</div>
