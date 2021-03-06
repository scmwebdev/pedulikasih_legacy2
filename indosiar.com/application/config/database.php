<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include (BASEPATH.'../env.php');

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = $env_config['db_host'];
$db['default']['username'] = $env_config['db_user'];
$db['default']['password'] = $env_config['db_pass'];
$db['default']['database'] = "indosiar_www";
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = FALSE;
$db['default']['stricton'] = FALSE;

$db['dbwrite']['hostname'] = $env_config['db_host'];
$db['dbwrite']['username'] = $env_config['db_user'];
$db['dbwrite']['password'] = $env_config['db_pass'];
$db['dbwrite']['database'] = "indosiar_www"; 
$db['dbwrite']['dbdriver'] = "mysql";
$db['dbwrite']['dbprefix'] = '';
$db['dbwrite']['pconnect'] = FALSE;
$db['dbwrite']['db_debug'] = FALSE;
$db['dbwrite']['cache_on'] = FALSE;
$db['dbwrite']['cachedir'] = '';
$db['dbwrite']['char_set'] = 'utf8';
$db['dbwrite']['dbcollat'] = 'utf8_general_ci';
$db['dbwrite']['swap_pre'] = '';
$db['dbwrite']['autoinit'] = FALSE;
$db['dbwrite']['stricton'] = FALSE;

/*
$db['dbtools']['hostname'] = "192.168.7.97";
$db['dbtools']['username'] = "flamboyan";
$db['dbtools']['password'] = "By5nQgUse";
$db['dbtools']['database'] = "liputan6_tools";
$db['dbtools']['dbdriver'] = "mysql";
$db['dbtools']['dbprefix'] = '';
$db['dbtools']['pconnect'] = FALSE;
$db['dbtools']['db_debug'] = TRUE;
$db['dbtools']['cache_on'] = FALSE;
$db['dbtools']['cachedir'] = '';
$db['dbtools']['char_set'] = 'utf8';
$db['dbtools']['dbcollat'] = 'utf8_general_ci';
$db['dbtools']['swap_pre'] = '';
$db['dbtools']['autoinit'] = FALSE;
$db['dbtools']['stricton'] = FALSE;
*/
