<div class="bs-callout bs-callout-info">
	<h4>Login</h4>
	<div id="message"></div>
</div>
<? if ($message) : ?>
	<h3 class="alert alert-info alert-dismissable">
  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?= $message; ?>
	</h3>
<? endif; ?>

<?= Form::open('user/login', array('role' => 'form', 'id' => 'form-login')); ?>
<div class="form-group">
<?= Form::label('username', 'Username'); ?>
<?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('placeholder' => 'username', 'class' => 'form-control')); ?>
</div>

<div class="form-group">
<?= Form::label('password', 'Password'); ?>
<?= Form::password('password', '',  array('class' => 'form-control')); ?>
</div>

<div class="form-group">
<?= Form::label('remember', 'Remember Me'); ?>
&nbsp;
<!--it will send value 1 in $_POST['remember'] only when checked-->
<?= Form::checkbox('remember', '1', FALSE); ?>
<p class="help-block">(Remember Me keeps you logged in for 2 weeks)</p>
</div>

<div class="form-group">
<?= Form::submit('login', 'Login', array('class' => 'btn btn-success'/*, 'id' => 'do-login'*/)); ?> <!-- enable commented 'id' => 'do-login' to make ajax call (main.js) work ->
<?= Form::close(); ?>
&nbsp; Or <?= HTML::anchor('user/create', 'create a new account'); ?>
</div>

