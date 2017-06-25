<?php

$connection = new PDO('mysql:host=192.168.1.145;dbname=app', 'appuser', '1234');
$statement  = $connection->query('SELECT email FROM users');

echo $statement->fetchColumn();
?>
