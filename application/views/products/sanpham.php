<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('product_list')?></h1>
  </div>
  <div class="">
    <div class="form-group row">
      <div class="col-sm-3">
        <input type="text" name="filter" id="filter" value="" class="form-control" placeholder="<?= $this->lang->line('field_search')?>">
      </div>
      <div class="col-sm-3">
        <select class="form-control" name="" onchange="main.showProducts(this, '<?= site_url('Products/danhsach')?>')">
          <option value="0" <?= ($limit == 0) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select')?></option>
          <option value="100" <?= ($limit == 100) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_100')?></option>
          <option value="150" <?= ($limit == 150) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_150')?></option>
          <option value="200" <?= ($limit == 200) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_200')?></option>
          <option value="250" <?= ($limit == 250) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_250')?></option>
          <option value="300" <?= ($limit == 300) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_300')?></option>
          <option value="350" <?= ($limit == 350) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_350')?></option>
          <option value="400" <?= ($limit == 400) ? 'selected' : '' ; ?>><?= $this->lang->line('product_select_400')?></option>
        </select>
      </div>
      <div class="col-sm-6 text-right">
        <a href="<?= site_url('Products/tao')?>" class="btn btn-info"><?= $this->lang->line('button_add')?></a>
        <a href="<?= site_url('Products/uploadExcel')?>" class="btn btn-info"><?= $this->lang->line('product_upload_excel')?></a>
      </div>
    </div>
    <table class="footable" data-pagination=".pagination" data-page-size="10" data-filter="#filter">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th class="actionTabName">
            <?= $this->lang->line('field_name')?>
          </th>
          <th class="actionTab2">
            <?= $this->lang->line('button_composition')?>
          </th>
          <th>
            <?= $this->lang->line('button_productlist')?>
          </th>
          <th>
            <?= $this->lang->line('field_dosage')?>
          </th>
          <th class="actionTab">
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dong as $key => $value): ?>
        <tr>
          <td>
            <?= $key + 1?>
          </td>
          <td>
            <?= $value->tensp?>
          </td>
          <td>
            <?php foreach ($value->thanhphan as $key2 => $value2): ?>
            <div class="row">
              <div class="col-sm-8 no-p-r">
                <?= $value2->ten?>:
              </div>
              <div class="col-sm-4 no-p-l">
                <?= $value2->soluong?> <?= $value2->donvi?>
              </div>
            </div>
            <?php endforeach; ?>
            <?php if ($value->khoiluong): ?>
            <div class="row myHr">
              <div class="col-sm-7 no-p-l">
                Exp
              </div>
              <div class="col-sm-5 exp-p">
                <?= $value->khoiluong?>
              </div>
            </div>
            <?php endif; ?>
          </td>
          <td>
            <?= $value->tenNhom?>
          </td>
          <td>
            <?= $value->lieudung?>
          </td>
          <td>
            <a href="<?= site_url('Products/xemChitiet/'.$value->spID)?>" class="btn btn-primary"><?= $this->lang->line('button_details')?></a>
            <a href="<?= site_url('Products/sua/'.$value->spID)?>" class="btn btn-warning"><?= $this->lang->line('button_edit')?></a>
            <a href="<?= site_url('Products/xoa/'.$value->spID)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><?= $this->lang->line('button_delete')?></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot class="hide-if-no-paging">
        <tr>
          <td colspan="6">
            <div class="pagination"></div>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
