<?php
// data base configuration
define('dbuser','root'); // database user
define('dbserver','localhost'); // database server adress
define('dbname','auguste'); // database name
define('CFG_DB_DSN', 'mysql://'.dbuser.'@'.dbserver.'/'.dbname); // DSN varchar for doctrine

define('SecurityManager','YES'); // activation du module de sécurité 'NO' pour désactiver.



?>