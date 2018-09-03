<?php

//DB Configuartions
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'ahpc');
define('DB_PORT', '3306');


//site constants
define('SITENAME', 'AHPC');
define('FOOTER', '© '.date('Y'));
define('APPROOT', dirname(dirname( __FILE__ )));
define('URLROOT', 'http://localhost:8088');
define('JSVARS',serialize(array(
	'urlroot' => URLROOT
)));
define('USERNAME', 'postmaster@mg.myfinancecoach.com');
define('PASSWORD', '0015e89b20ad6cbc5e3961b951595ffd');
define('MFCEMAIL', 'mymentor@myfinancecoach.org');
//define('MFCEMAIL', 'cassandra.sarfo@yahoo.com');
define('MFCSENDEREMAIL', 'volunteering@myfinancecoach.com');