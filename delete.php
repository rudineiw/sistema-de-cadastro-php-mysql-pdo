<?php
include 'init.php';
include 'functions.php';

$id = $_GET['id'];

if (deleteUser($id)) {
    header('Location: index.php');
    exit;
} else {
    echo "Erro ao remover usuário.";
}
