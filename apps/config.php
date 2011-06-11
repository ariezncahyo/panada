<?php defined('THISPATH') or die('Can\'t access directly!');

/**
 * EN: Website base url.
 */
$CONFIG['base_url']                         = 'http://' .$_SERVER['SERVER_NAME'].'/'; /* Change this with your application domain and/or path. */
$CONFIG['index_file']                       = 'index.php/'; /* Remove this index.php if you wish an url without "index.php" */

/**
 * EN: Database configuration.
 */
$CONFIG['db']['default']['driver']          = 'mysql';
$CONFIG['db']['default']['host']            = ''; 
$CONFIG['db']['default']['user']            = ''; 
$CONFIG['db']['default']['password']        = ''; 
$CONFIG['db']['default']['database']        = '';
$CONFIG['db']['default']['charset']         = 'utf8';
$CONFIG['db']['default']['collate']         = 'utf8_general_ci';
$CONFIG['db']['default']['persistent']      = false;

/**
 * ID: Defenisikan library apa saja yang akan diload secara otomatis.
 */
$CONFIG['auto_loader'] = array();

/**
 * EN: Session configuration.
 */

$CONFIG['session']['expiration']    = 7200; /* 2 hour. */
$CONFIG['session']['name']          = 'PAN_SID';
$CONFIG['session']['cookie_expire'] = 0;
$CONFIG['session']['cookie_path']   = '/';
$CONFIG['session']['cookie_secure'] = false;
$CONFIG['session']['cookie_domain'] = '';
$CONFIG['session']['driver']        = 'native'; /* The option is 'native', 'cookie', cache or 'database' */
$CONFIG['session']['storage_name']  = 'sessions';

// MySQL Table structure for session table
/*

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(32) NOT NULL,
  `session_data` text NOT NULL,
  `session_expiration` int(11) NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `session_expiration` (`session_expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 */

/**
 * EN: Alias Controller configuration (eg: yoursite.com/username). Make sure the controller and the method are available.
 * ID: Konfigurasi Alias Controller (contoh: yoursite.com/username). Pastikan controller sudah tersedia, jika tidak akan menghasilkan error.
 *
 * array key => controller name
 * array value => controller's method
 */
$CONFIG['alias_controller'] = array();

/**
 * EN: Method name for 'hidden' method. Default is 'alias'. (eg: yoursite.com/CONTROLLER/username)
 * ID: Nama method untuk method 'tersembunyi'. Defaultnya adalah 'alias'. (contoh: yoursite.com/CONTROLLER/username)
 */
$CONFIG['alias_method'] = 'alias';

/**
 * EN:  GET Query filter type. See the option at http://www.php.net/manual/en/filter.filters.sanitize.php
 *      You can set the value to false, if you don't wanna filtering the query.
 */
$CONFIG['request_filter_type'] = FILTER_SANITIZE_STRING;

/**
 * EN:  Cache configuration
 */
$CONFIG['cache']['default']['driver']   = 'default'; /* The option is 'default', 'apc' or 'memcached' */
$CONFIG['cache']['default']['host']     = '';