<?php

function getAllProducts() {
    $db = require "../db_connect.php";

    $sql = "SELECT * FROM `products`";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getProduct($id) {
    $db = require "../db_connect.php";

    $sql = "SELECT * FROM `products` WHERE `id` = $id LIMIT 1";
    $result = mysqli_query($db, $sql);

    return mysqli_fetch_assoc($result);
}

function createProduct($name, $price, $category_id)
{
    $db = require '../db_connect.php';
    mysqli_query($db, "INSERT INTO `products` (`name`, `price`, `category_id`) 
            VALUES ('$name', '$price', '$category_id')");
    return mysqli_insert_id($db);
}

function updateProduct($id, $name, $price, $category_id) {
    $db = require '../db_connect.php';
    $sql = "UPDATE `products` SET 
                   `name` = '$name',
                   `price` = '$price',
                   `category_id` = '$category_id'
            WHERE `products`.`id` = $id;";
    return mysqli_query($db, $sql);
}

function deleteProduct($id) {
    $db = require '../db_connect.php';
    return mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id` = $id");
}