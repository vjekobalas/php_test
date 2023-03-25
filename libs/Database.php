<?php

namespace Core;

use PDOException;

class Database {

    private static $instance;
    private $pdo;
    
    private function __construct() {
        try {
        
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            $this->pdo = new \PDO($dsn, DB_USER, DB_PASSWORD);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    
    
// singleton pattern
    public static function getInstance() {
        
        if (self::$instance === null) {
            self::$instance = new self();
        }
 //       if (!self::$instance) {
 //           self::$instance = new self();
        
        return self::$instance;
        
    }

    public function getConnection() {
        return $this->pdo;
    }
    
  
}



