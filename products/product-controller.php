<?php

require 'products-model.php';
require '../categories/categories-model.php';

switch ($_REQUEST['method']) {
    case 'index':
        $products = getAllProducts();
        require 'views/index.product.view.php';
        break;
    case 'create':
        $categories = getAllCategories();
        require 'views/create.product.view.php';
        break;
    case 'store':
        if ($_POST['name'] && $_POST['price'] && $_POST['category_id']) {
            $result = createProduct($_POST['name'], $_POST['price'], $_POST['category_id']);
            if ($result) {
                header('Location: product-controller.php?method=index');
                exit();
            }
            header('Location: views/create.product.view.php?message=Produkt yaratishda xatolik yuz berdi.');
            exit();
        }
        header('Location: views/create.product.view.php?message=Produkt nomini kiriting!');
        exit();
        break;
    case 'edit':
        $product = getProduct($_REQUEST['id']);
        $categories = getAllCategories();
        if (!$product) {
            header('Location: product-controller.php?method=index');
            exit();
        }
        require 'views/edit.product.view.php';
        break;
    case 'update':
        if ($_POST['id'] && $_POST['name'] && $_POST['price'] && $_POST['category_id']) {
            if (updateProduct($_POST['id'], $_POST['name'], $_POST['price'], $_POST['category_id'])) {
                header('Location: product-controller.php?method=index');
                exit();
            }
            header('Location: views/edit.product.view.php?message=Produkt o\'zgartirishda xatolik yuz berdi.');
            exit();
        }
        header('Location: views/edit.product.view.php?message=Produkt nomini kiriting!');
        exit();
        break;
    case 'delete':
        deleteProduct($_REQUEST['id']);
        header('Location: product-controller.php?method=index');
        exit();
        break;
}
