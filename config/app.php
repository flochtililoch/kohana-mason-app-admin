<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'cl' => array(
		'cvs_export' => 'svn export http://192.168.0.50:8000/public/skeleton/trunk %1$s 2>&1',
		'i18n' => array(
			'container' => 'mkdir %1$s/i18n/%2$s',
			'lc_messages' => 'mkdir %1$s/i18n/%2$s/LC_MESSAGES'
		),
		'pack' => 'cd %1$s && tar -czf ../%2$s.zip .  && rm ../%3$s -rf'
		
	)
);