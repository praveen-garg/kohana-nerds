<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'ORM',  // Don't use orm that will not work on Linux; for more convention stuff: http://kohanaframework.org/3.3/guide/kohana/conventions
	'hash_method'  => 'SHA1',
	'hash_key'     => 'bLah123',
	'lifetime'     => 1209600, //14*24*60*60
	'session_key'  => 'auth_user'
);