<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'loginphp';

// Set up connection
$dsn = 'mysql:host=' . $host .'; dbname=' . $dbname;

// Create a PDO instance - connection, user and password
$pdo = new PDO($dsn, $user, $password);

// Grabs PDO instance and sets attribute to default - to grab by object name.
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>