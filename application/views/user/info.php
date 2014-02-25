<div class="bs-callout bs-callout-info">
	<h4>User Info</h4>
	<div class="lead">
		You are logged in as <?= ($is_admin==1)? 'admin' : 'general' ?> user with name: <kbd> "<?= $user->username;?>".</kbd> &nbsp; <?= HTML::anchor('user/logout', 'Logout');?>
	</div>
</div>

<p class="lead">
	Email: <?= $user->email; ?> <br/>
	Number of logins: <?= $user->logins; ?><br/>
	Last Login: <?= Date::fuzzy_span($user->last_login); ?><br/>
</p>