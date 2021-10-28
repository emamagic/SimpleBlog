<?php

$username = 'root';
$dbname = 'php_project';
$password = '';
global $pdo;

try {

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];
$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password, $options);
return $pdo;

} catch (PDOException $e) {
    echo 'error ' . $e->getMessage();
    exit;
}