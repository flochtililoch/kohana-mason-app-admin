<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	// Cache driver
	'cache_driver' => 'ApcCache',
	
	// DB connection settings
	'connection_options' => array(
		Kohana::DEVELOPMENT => array(
			'driver' => 'pdo_mysql',
			'host' => '127.0.0.1',
			'dbname' => 'admin',
			'user' => 'root',
			'password' => ''
			),
		Kohana::STAGING => array(
			'driver' => 'pdo_mysql',
			'host' => '127.0.0.1',
			'dbname' => 'admin',
			'user' => 'root',
			'password' => ''
			),
		Kohana::TESTING => array(
			'driver' => 'pdo_mysql',
			'host' => '127.0.0.1',
			'dbname' => 'admin',
			'user' => 'root',
			'password' => ''
			),
		Kohana::PRODUCTION => array(
			'driver' => 'pdo_mysql',
			'host' => '127.0.0.1',
			'dbname' => 'admin',
			'user' => 'root',
			'password' => ''
			)
		),
	
	// Path to proxies classes
	'paths' => array(
		'proxies' => CACHEPATH.'classes/proxies'
	)
);