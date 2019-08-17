<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'axyonnet_db',
		'password' => 'r6KnZEQrWA',
		'database' => 'axyonnet_db',
		'prefix' => '',
		'encoding' => 'utf8'
	);

	var $test = array(
		'driver' => 'mysqli',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => '',
		'prefix' => '',
		'encoding' => 'utf8'
	);
}
