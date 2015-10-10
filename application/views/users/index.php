<div class="container">
  <div class="page-header">
    <h1><?= $this->lang->line('user_list')?></h1>
  </div>
  <div class="row">
    <div class="row form-group">
      <div class="col-sm-3">
        <input type="text" id="filter" name="filter" class="form-control" placeholder="<?= $this->lang->line('field_search')?>" value="">
      </div>
      <div class="col-sm-9 text-right">
        <a href="<?= site_url('Users/tao')?>" class="btn btn-info"><?= $this->lang->line('button_add')?></a>
      </div>
    </div>
    <table class="footable" data-filter="#filter" data-pagination=".pagination" data-page-size="10">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            <?= $this->lang->line('login_username')?>
          </th>
          <th>
            <?= $this->lang->line('myinfo_fullname')?>
          </th>
          <th>
            <?= $this->lang->line('myinfo_role')?>
          </th>
          <th>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $key => $value): ?>
          <tr>
            <td><?= $key + 1?></td>
            <td><?= $value->username?></td>
            <td><?= $value->ten?></td>
            <?php if ($value->vaitro == isUser1): ?>
            <td>
              User 1
            </td>
            <?php elseif($value->vaitro == isUser2): ?>
            <td>
              User 2
            </td>
            <?php else: ?>
            <td>
              Admin
            </td>
            <?php endif; ?>
            <td>
              <a href="<?= site_url('Users/sua/'.$value->id)?>" class="btn btn-warning"><?= $this->lang->line('button_edit')?></a>
              <a onclick="main.xoaUser('<?= site_url('Users/xoa/'.$value->id)?>')" class="btn btn-danger"><?= $this->lang->line('button_delete')?></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot class="hide-if-no-paging">
        <tr>
          <td colspan="5">
            <div class="pagination"></div>
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
