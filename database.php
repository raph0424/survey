<?php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn' => '',
	'hostname' => 'eu-cdbr-west-02.cleardb.net',
	'username' => 'bea67d61987f37',
	'password' => 'test',
	'database' => 'heroku_80ea0adee5731ce',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'striction' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
