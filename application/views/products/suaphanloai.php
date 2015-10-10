<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Phanloai')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('class_edit')?></h1>
  </div>
  <div class="well">
    <?= validation_errors()?>
    <form class="" action="<?= site_url('Phanloai/sua/'.$nhom[0]->id)?>" method="post">
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('field_name')?></label>
        <input type="text" name="ten" class="form-control" value="<?= $nhom[0]->ten?>">
      </div>
      <div class="text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_update')?></button>
      </div>
    </form>
  </div>
</div>
