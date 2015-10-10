<div class="container">
  <div class="page-header">
    <a href="<?= site_url('Products/danhsach')?>" class="btn btn-default pull-right"><?= $this->lang->line('button_back')?></a>
    <h1><?= $this->lang->line('product_upload_excel')?></h1>
  </div>
  <div class="well">
    <?php if (isset($error)): ?>
      <div class="alert alert-danger">
        <?= $error?>
      </div>
    <?php endif; ?>
    <?php if (isset($succ)): ?>
      <div class="alert alert-success">
        <?= $succ?>
      </div>
    <?php endif; ?>
    <?php echo form_open_multipart('Products/do_upload');?>
      <div class="form-group">
        <label for=""><?= $this->lang->line('product_choose_file')?> <span class="text-danger">*</span></label>
        <input type="file" name="file" value="">
      </div>
      <div class="form-group">
        <a href="<?= base_url().'assets/demo-file.xls'?>"><?= $this->lang->line('product_download_file')?></a>
      </div>
      <div class="form-group text-right">
        <button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('button_upload')?></button>
      </div>
    </form>
  </div>
</div>
