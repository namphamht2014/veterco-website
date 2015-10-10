<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('cus_list')?></h1>
  </div>
  <div class="row">
    <div class="row form-group">
      <div class="col-sm-3">
        <input type="text" id="filter" name="filter" class="form-control" placeholder="<?= $this->lang->line('field_search')?>" value="">
      </div>
      <div class="col-sm-9 text-right">
        <a href="<?= site_url('Customers/tao')?>" class="btn btn-info"><?= $this->lang->line('button_add')?></a>
      </div>
    </div>
    <table class="footable" data-filter="#filter" data-pagination=".pagination" data-page-size="10">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            <?= $this->lang->line('cus_representative')?>
          </th>
          <th>
            <?= $this->lang->line('cus_companyname')?>
          </th>
          <th>
            <?= $this->lang->line('cus_address')?>
          </th>
          <th>
            <?= $this->lang->line('cus_email')?>
          </th>
          <th>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($customers as $key => $value): ?>
          <tr>
            <td><?= $key + 1?></td>
            <td><?= $value->ngdaidien?></td>
            <td><?= $value->tenCty?></td>
            <td><?= $value->diachi?></td>
            <td><?= $value->email?></td>
            <td>
              <a href="<?= site_url('Customers/xem/'.$value->id)?>" class="btn btn-info"><?= $this->lang->line('button_details')?></a>
              <a href="<?= site_url('Customers/sua/'.$value->id)?>" class="btn btn-warning"><?= $this->lang->line('button_edit')?></a>
              <a href="<?= site_url('Customers/xoa/'.$value->id)?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><?= $this->lang->line('button_delete')?></a>
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
