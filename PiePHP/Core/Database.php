<?php

namespace Core;


class Database {
    
    public static function connect() {
        
        $config = json_decode (file_get_contents("config.json"));
        extract((array) $config);
        
        $instance = new \PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8", $db_user, $db_pass);
        $instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT); 
        
        return $instance;
    }
}