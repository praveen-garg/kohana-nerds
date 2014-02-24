<div class="bs-callout bs-callout-info">
	<h4>User Info</h4>
</div>
You are logged in as : <kbd> "<?= $user->username;?>".</kbd> &nbsp; <?= HTML::anchor('user/logout', 'Logout');?>
<br/>
<p class="lead">
	Email: <?= $user->email; ?> <br/>
	Number of logins: <?= $user->logins; ?><br/>
	Last Login: <?= Date::fuzzy_span($user->last_login); ?><br/>
</p>