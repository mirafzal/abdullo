<?php

function getAllUsers()
{
    $db = require "db_connect.php";

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getUser($id)
{
    $db = require "db_connect.php";

    $sql = "SELECT * FROM `users` WHERE `id` = $id LIMIT 1";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($result);
}

function createUser($email, $password, $name)
{
    $db = require '../db_connect.php';
    $stmt = mysqli_prepare($db, "INSERT INTO users (name, email, password) VALUES(?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password);
    mysqli_stmt_execute($stmt);
    return mysqli_insert_id($db);
}

function editUser($id, $email, $password, $name = "")
{
    $db = require 'db_connect.php';
    $sql = "UPDATE `users` SET 
                   `name` = '$name',
                   `email` = '$email', 
                   `password` = '$password' 
            WHERE `users` . `id` = $id;";
    return mysqli_query($db, $sql);
}

function deleteUser($id)
{
    $db = require 'db_connect.php';
    return mysqli_query($db, "DELETE FROM `users` WHERE `users` . `id` = $id");
}

function checkUser($email, $password)
{
    $db = require '../db_connect.php';
    $stmt = mysqli_prepare($db, "SELECT * FROM `users` WHERE `email` = ? and `password` = ? LIMIT 1");
    mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}