<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('pline_list')?></h1>
  </div>
  <div class="">
    <div class="form-group row">
      <div class="col-sm-3">
        <input type="text" name="filter" id="filter" value="" class="form-control" placeholder="<?= $this->lang->line('field_search')?>">
      </div>
      <div class="col-sm-9 text-right">
        <a href="<?= site_url('Dongsp/tao')?>" class="btn btn-info"><?= $this->lang->line('button_add')?></a>
      </div>
    </div>
    <table class="footable" data-pagination=".pagination" data-page-size="10" data-filter="#filter">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            <?= $this->lang->line('field_name')?>
          </th>
          <th>
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
            <?= $value->ten?>
          </td>
          <td>
            <a href="<?= site_url('Dongsp/sua/'.$value->id)?>" class="btn btn-warning"><?= $this->lang->line('button_edit')?></a>
            <a href="<?= site_url('Dongsp/xoa/'.$value->id)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><?= $this->lang->line('button_delete')?></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot class="hide-if-no-paging">
        <tr>
          <td colspan="3">
            <div class="pagination"></div>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
