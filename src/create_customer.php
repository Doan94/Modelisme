<?php

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'root');

// Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
$pdo->exec('SET NAMES UTF8');

if(empty($_POST))
    {
        // Récupération de tous les clients du site.
        $query1 =
        '
            SELECT
                employeeNumber,
                lastName,
                firstName
            FROM
                employees
        ';
        $resultSet1 = $pdo->query($query1);
        $employees = $resultSet1->fetchAll();

    }
    else
    {
         // Ajout d'un article du blog.

         $query3 =
         '
             INSERT INTO
                 customers
                 (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
             VALUES
                 (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
         ';
         $resultSet3=$pdo->prepare($query3);
         //print_r($_POST['orderNumber']);
         //print_r($_POST['customer']);
         $resultSet3->execute([$_POST['customerNumber'], $_POST['customerName'], $_POST['customerLastName']]);
         //$resultSet3->execute(array('10427', 'commentaire', '456'));
 
                 // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
        header('Location: index.php');
        exit();
    }


include 'templates/create_customer.php';