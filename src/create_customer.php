<?php

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'root');
// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

include 'templates/create_customer.php';