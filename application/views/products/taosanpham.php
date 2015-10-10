<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Products/danhsach')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('product_add')?></h1>
  </div>
  <div class="well">
    <?= validation_errors()?>
    <form class="" action="<?= site_url('Products/tao')?>" method="post">
      <div class="form-group">
        <label for="ten"><?= $this->lang->line('field_name')?> <span class="text-danger">*</span></label>
        <input type="text" name="ten" class="form-control" value="">
      </div>
      <div class="row form-group">
        <div class="col-sm-4">
          <label for="dong"><?= $this->lang->line('button_productline')?></label>
          <select class="form-control" name="dong">
            <?php foreach ($dong as $key => $value): ?>
            <option value="<?= $value->id?>"><?= $value->ten?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-sm-4">
          <label for="nhom"><?= $this->lang->line('button_productlist')?></label>
          <select class="form-control" name="nhom">
            <?php foreach ($nhom as $key => $value): ?>
            <option value="<?= $value->id?>"><?= $value->ten?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-sm-4">
          <label for="phanloai"><?= $this->lang->line('classification')?></label>
          <select class="form-control" name="phanloai">
            <?php foreach ($phanloai as $key => $value): ?>
            <option value="<?= $value->id?>"><?= $value->ten?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-3">
          <label for="mota"><?= $this->lang->line('field_desc')?> <span class="text-danger">*</span></label>
          <textarea name="mota" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
          <label for="chidinh"><?= $this->lang->line('field_indication')?> <span class="text-danger">*</span></label>
          <textarea name="chidinh" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
          <label for="chongchidinh"><?= $this->lang->line('field_contra_indication')?></label>
          <textarea name="chongchidinh" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-sm-3">
          <label for="lieudung"><?= $this->lang->line('field_dosage')?> <span class="text-danger">*</span></label>
          <textarea name="lieudung" rows="3" class="form-control"></textarea>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-3">
          <label for="cachdung"><?= $this->lang->line('field_withdraw')?></label>
          <input type="text" name="cachdung" class="form-control" value="">
        </div>
        <div class="col-sm-3">
          <label for="nhomthu"><?= $this->lang->line('button_animalspecies')?></label>
          <select class="form-control nhomthu" name="nhomthu" onchange="main.updateLoaithu()">
            <?php foreach ($nhomthu as $key => $value): ?>
              <?php if ($key == 0): ?>
              <option value="<?= $value->id?>" selected=""><?= $value->ten?></option>
              <?php else: ?>
              <option value="<?= $value->id?>"><?= $value->ten?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-sm-3">
          <label for="loaithu"><?= $this->lang->line('button_animal')?></label>
          <select class="form-control loaithu" name="loaithu">
          </select>
        </div>
          <div class="col-sm-3">
            <label for="khoiluong"><?= $this->lang->line('field_exp')?></label>
            <input type="text" name="khoiluong" class="form-control" value="">
          </div>
      </div>
      <div class="form-group">
        <label for="thanhphan"><?= $this->lang->line('button_composition')?>:  <span class="text-danger">*</span><button type="button" name="button" class="btn btn-info btn-xs m-l-10" onclick="main.themline('')"><?= $this->lang->line('button_add_line')?></button></label>
      </div>
      <div class="text-right btnsubmit">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_add')?></button>
      </div>
    </form>
  </div>
</div>
