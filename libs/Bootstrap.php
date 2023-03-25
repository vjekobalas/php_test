<?php

namespace Core;

class Bootstrap
{
    public static function loadConfig()
    {
        
        define('CONFIG', ROOT . '/config'); 
        //load db config
        require CONFIG . '/config.php';
    }
}

