<?php

function getAllCategories() {
    $db = require "../db_connect.php";

    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getCategory($id) {
    $db = require "../db_connect.php";

    $sql = "SELECT * FROM `categories` WHERE `id` = $id LIMIT 1";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($result);
}

function createCategory($name)
{
    $db = require '../db_connect.php';
    mysqli_query($db, "INSERT INTO `categories` (`name`) 
            VALUES ('$name')");
    return mysqli_insert_id($db);
}

function updateCategory($id, $name) {
    $db = require '../db_connect.php';
    $sql = "UPDATE `categories` SET 
                   `name` = '$name'
            WHERE `categories`.`id` = $id;";
    return mysqli_query($db, $sql);
}

function deleteCategory($id) {
    $db = require '../db_connect.php';
    return mysqli_query($db, "DELETE FROM `categories` WHERE `categories`.`id` = $id");
}