<?php
include 'init.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $birthdate = $_POST['birthdate'];

    if (addUser($name, $email, $status, $birthdate)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
