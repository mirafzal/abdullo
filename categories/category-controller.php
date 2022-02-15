<?php

require 'categories-model.php';

switch ($_REQUEST['method']) {
    case 'index':
        $categories = getAllCategories();
        require 'views/index.category.view.php';
        break;
    case 'create':
        require 'views/create.category.view.php';
        break;
    case 'store':
        if ($_POST['name']) {
            $result = createCategory($_POST['name']);
            if ($result) {
                header('Location: category-controller.php?method=index');
                exit();
            }
            header('Location: views/create.category.view.php?message=Kategoriya yaratishda xatolik yuz berdi.');
            exit();
        }
        header('Location: views/create.category.view.php?message=Kategoriya nomini kiriting!');
        exit();
        break;
    case 'edit':
        $category = getCategory($_REQUEST['id']);
        if (!$category) {
            header('Location: category-controller.php?method=index');
            exit();
        }
        require 'views/edit.category.view.php';
        break;
    case 'update':
        if ($_POST['id'] && $_POST['name']) {
            if (updateCategory($_POST['id'], $_POST['name'])) {
                header('Location: category-controller.php?method=index');
                exit();
            }
            header('Location: views/edit.category.view.php?message=Kategoriya o\'zgartirishda xatolik yuz berdi.');
            exit();
        }
        header('Location: views/edit.category.view.php?message=Kategoriya nomini kiriting!');
        exit();
        break;
    case 'delete':
        deleteCategory($_REQUEST['id']);
        header('Location: category-controller.php?method=index');
        exit();
        break;
}
