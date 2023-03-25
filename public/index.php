<?php

use Core\Bootstrap;

define('ROOT', realpath(__DIR__ . '/../'));
require ROOT . '/vendor/autoload.php';



Bootstrap::loadConfig();

$database = Core\Database::getInstance();
$pdoconnection = $database->getConnection();
$dbquery = $pdoconnection->query('SELECT * FROM offices');
$queryresult = $dbquery->fetchAll();


foreach ($queryresult as $row) {
    echo $row['officeCode'] . ': ' . $row['city'] . '<br>';
}

