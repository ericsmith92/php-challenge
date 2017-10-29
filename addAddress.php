<?php

require_once 'includes/header.php';

if(isset($_POST['submit'])){

    $address->addAddress($_POST['address']);

    header('Location: index.php');
}

