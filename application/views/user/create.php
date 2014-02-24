<div class="bs-callout bs-callout-info"><h4>Create a New User</h4></div>
<? if ($message) : ?>
	<h3 class="message alert alert-info alert-dismissable">
  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?= $message; ?>
	</h3>
<? endif; ?>

<?= Form::open('user/create', array('role' => 'form')); ?>
<div class="form-group">
<?= Form::label('username', 'Username'); ?>
<?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('placeholder' => 'username', 'class' => 'form-control'));?>
</div>
<div class="text-danger">
	<?= Arr::get($errors, 'username'); ?>
</div>
<div class="form-group">
<?= Form::label('email', 'Email Address'); ?>
<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email')), array('placeholder' => 'email', 'class' => 'form-control'));?>
</div>
<div class="text-danger">
	<?= Arr::get($errors, 'email'); ?>
</div>

<div class="form-group">
<?= Form::label('password', 'Password'); ?>
<?= Form::password('password', '', array('class' => 'form-control')); ?>
</div>
<div class="text-danger">
	<?= Arr::path($errors, '_external.password'); ?>
</div>

<div class="form-group">
<?= Form::label('password_confirm', 'Confirm Password'); ?>
<?= Form::password('password_confirm', '', array('class' => 'form-control')); ?>
<div class="text-danger">
	<?= Arr::path($errors, '_external.password_confirm'); ?>
</div>
</div>

<div class="form-group">
<?= Form::submit('create', 'Create User', array('class' => 'btn btn-success')); ?>
<?= Form::close(); ?>
&nbsp; Or <?= HTML::anchor('user/login', 'login'); ?> if you have an account already.
</div>

