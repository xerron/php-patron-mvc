<?php

/*
 * Ejemplos de dsn
 *
 * MySQL     > "mysql:host=hostname;dbname=mysql"
 * PosgreSQL > "pgsql:dbname=pdo;host=localhost"
 * SQLite    > "sqlite:/path/to/database.sdb" , username = null , password = null.
 *             "sqlite::memory"
 */

/*
    'options' => array(PDO::ATTR_PERSISTENT => true , PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
*/

return array(
    'db' => array(
        'dsn' => 'mysql:host=localhost;dbname=testdb',
        'username' => 'root',
        'password' => 'root',
        'prefix' => null,
        'collation' => 'utf8',
        'options' => array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    ),
    'db2' => array(
        'dsn' => 'mysql:host=localhost;dbname=testdb2',
        'username' => 'root',
        'password' => '',
        'prefix' => null,
        'collation' => 'utf8',
        'options' => array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    ),
    'otro' => null,
    'mas_conf' => null
);
