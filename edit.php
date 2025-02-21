<?php
include 'init.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $birthdate = $_POST['birthdate'];

    if (updateUser($id, $name, $email, $status, $birthdate)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Erro ao editar usuário.";
    }
}
