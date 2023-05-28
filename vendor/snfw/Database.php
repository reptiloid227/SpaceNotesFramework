<?php

namespace SNFW;

use RedBeanPHP\R;

class Database
{
    use TSingleton;

    private function __construct()
    {
        $db = require_once CONFIG . '/database.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
        if(!R::testConnection()){
            throw new \Exception('Не удалось соединиться с базой данных', 500);
        }
        R::freeze(true);
        if(DEBUG_MODE){
            R::debug(true, 3);
        }

    }

}