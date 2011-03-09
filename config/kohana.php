<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'timezone'		=> 'Europe/Paris',			// Server Timezone
	'i18n_source'	=> 'en-gb',					// Default language used in templates
	'debug'			=> Kohana::DEBUG_JSON,		// Set level of debug (FALSE = disabled, Kohana::DEBUG_JSON, Kohana::DEBUG_HTML)
	'caching'		=> array(					// Caching status per env.
		Kohana::DEVELOPMENT => FALSE,
		Kohana::TESTING => TRUE,
		Kohana::STAGING => FALSE,
		Kohana::PRODUCTION => TRUE
		),
		'cache_life'	=> 0,
		'cache_dir'		=> APPPATH.'var/cache',
	'profile'		=> array(					// Profiling status per env.
		Kohana::DEVELOPMENT => TRUE,
		Kohana::TESTING => FALSE,
		Kohana::STAGING => FALSE,
		Kohana::PRODUCTION => FALSE
		),
	'logging'		=> array(					// Logging status per env.
		Kohana::DEVELOPMENT => TRUE,
		Kohana::TESTING => TRUE,
		Kohana::STAGING => TRUE,
		Kohana::PRODUCTION => FALSE
		),
		'log_dir'		=> APPPATH.'var/log',
	'errors'		=> array(					// Display errors per env.
		Kohana::DEVELOPMENT => TRUE,
		Kohana::TESTING => TRUE,
		Kohana::STAGING => TRUE,
		Kohana::PRODUCTION => FALSE
		)
);