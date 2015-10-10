<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Products/danhsach')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('product_details')?></h1>
  </div>
  <div class="well row">
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_name')?></h4>
          <p>
            <?= $dong[0]->ten?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('button_productlist')?></h4>
          <p>
            <?= $dong[0]->tennhom?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('button_productline')?></h4>
          <p>
            <?= $dong[0]->tendong?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('classification')?></h4>
          <p>
            <?= $dong[0]->tenphanloai?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_desc')?></h4>
          <p>
            <?= $dong[0]->mota?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_indication')?></h4>
          <p>
            <?= $dong[0]->chidinh?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_contra_indication')?></h4>
          <p>
            <?= $dong[0]->chongchidinh?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_dosage')?></h4>
          <p>
            <?= $dong[0]->lieudung?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('field_withdraw')?></h4>
          <p>
            <?= $dong[0]->cachdung?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h4><?= $this->lang->line('button_animalspecies')?></h4>
          <p>
            <?= $dong[0]->tennhomthu?>
          </p>
        </div>
        <div class="col-sm-6">
          <h4><?= $this->lang->line('button_animal')?></h4>
          <p>
            <?= $dong[0]->tenthu?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <h4><?= $this->lang->line('button_composition')?></h4>
          <?php foreach ($dong[0]->thanhphan as $key => $value): ?>
          <div class="row">
            <div class="col-sm-1">
              <?= $key + 1?>.
            </div>
            <div class="col-sm-3">
              <?= $value->ten?>
            </div>
            <div class="col-sm-8">
              <?= $value->soluong?> <?= $value->donvi?>
            </div>
          </div>
          <?php endforeach; ?>
          <?php if ($dong[0]->khoiluong): ?>
          <div class="row myHr2">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-3">
              Exp
            </div>
            <div class="col-sm-8">
              <?= $dong[0]->khoiluong?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
