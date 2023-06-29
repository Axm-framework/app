<?php

return
    [
        'DB' =>
        [
            'DSN'      => '',
            'hostname' => 'localhost',
            'username' => 'axiomatr_axiomatr',
            'password' => 'X1omarit@@',
            'database' => 'axiomatr_db',
            'DBDriver' => 'MySQLi',    //SQLite3
            'DBPrefix' => 'db_',
            'pConnect' => false,
            'charset'  => 'utf8',
            'DBCollat' => 'utf8_general_ci',
            'swapPre'  => '',
            'encrypt'  => false,
            'compress' => false,
            'strictOn' => false,
            'failover' => [],
            'port'     => 3306
        ]
    ];

    // CREATE USER 'axiomatr_axiomatr'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'axiomatr_axiomatr'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `axiomatr\_db`.* TO 'axiomatr_axiomatr'@'%'; 
