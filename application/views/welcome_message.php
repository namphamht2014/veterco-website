<div class="container">
	<form class="login-form" action="<?=site_url('Welcome')?>" method="post">
		<h2><?= $this->lang->line('login')?></h2>
		<?php echo validation_errors();?>
		<div class="form-group">
			<label for="username"><?= $this->lang->line('login_username')?></label>
			<input type="text" name="username" value="" class="form-control">
		</div>
		<div class="form-group">
			<label for="password"><?= $this->lang->line('login_password')?></label>
			<input type="password" name="password" value="" class="form-control">
		</div>
		<div class="form-group text-right">
			<button type="submit" name="submit" class="btn btn-info"><?= $this->lang->line('login')?></button>
		</div>
	</form>
</div>
