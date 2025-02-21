<?php
// Função para listar usuários
function listUsers()
{
    $sql = "SELECT * FROM users";
    return executeQuery($sql)->fetchAll(PDO::FETCH_ASSOC);
}

// Função para buscar usuário por ID
function getUserById($id)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    return executeQuery($sql, [$id])->fetch(PDO::FETCH_ASSOC);
}

// Função para adicionar usuário
function addUser($name, $email, $status, $birthdate)
{
    $sql = "INSERT INTO users (name, email, status, birthdate) VALUES (?, ?, ?, ?)";
    return executeQuery($sql, [$name, $email, $status, $birthdate]);
}

// Função para editar usuário
function updateUser($id, $name, $email, $status, $birthdate)
{
    $sql = "UPDATE users SET name = ?, email = ?, status = ?, birthdate = ? WHERE id = ?";
    return executeQuery($sql, [$name, $email, $status, $birthdate, $id]);
}

// Função para remover usuário
function deleteUser($id)
{
    $sql = "DELETE FROM users WHERE id = ?";
    return executeQuery($sql, [$id]);
}
