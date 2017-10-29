<?php
    require_once 'Classes/DbConnect.php';
    $dbc = new DbConnect();
    $db = $dbc->getDb();

    require_once 'Classes/Address.php';
    $address = new Address($db);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Challenge</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>