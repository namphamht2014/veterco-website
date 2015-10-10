
    <?php if ($this->session->userdata('loggedIn')): ?>
    <footer class="footer">
      <div class="container text-center">
        <p class="text-muted"><?= $this->lang->line('footer_copyright').' '.$this->lang->line('footer_mailto')?></p>
      </div>
    </footer>
    <?php endif; ?>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php if (isset($footers)): ?>
      <?php foreach ($footers as $key => $value): ?>
        <script type="text/javascript" src="<?= $value?>"></script>
      <?php endforeach; ?>
    <?php endif; ?>
    <script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
    <?php if (isset($script)): ?>
        <script type="text/javascript">
        <?= $script?>
        </script>
    <?php endif; ?>
  </body>
</html>
