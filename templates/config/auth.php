<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'doctrine',
	'hash_method' => 'sha1',
	'salt_pattern' => '%1$s',
	'lifetime' => 1209600,
	'session_key' => 'auth_user'
);
