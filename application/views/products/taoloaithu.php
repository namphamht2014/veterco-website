<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Loaithu')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('animal_add')?></h1>
  </div>
  <div class="well">
    <?= validation_errors()?>
    <form class="" action="<?= site_url('Loaithu/tao')?>" method="post">
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('field_name')?></label>
        <input type="text" name="ten" class="form-control" value="">
      </div>
      <div class="form-group">
        <label for="nhom"><?= $this->lang->line('animal_species')?></label>
        <select class="form-control" name="nhom">
          <?php foreach ($nhomThu as $key => $value): ?>
          <option value="<?= $value->id?>"><?= $value->ten?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_update')?></button>
      </div>
    </form>
  </div>
</div>
