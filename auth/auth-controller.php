<?php

session_start();

require '../users/users-model.php';

switch ($_REQUEST['method']) {
    case 'loginview':
        require 'views/login.view.php';
        break;
    case 'registerview':
        require 'views/register.view.php';
        break;
    case 'register':
            if ($_POST['name'] && $_POST['email'] && $_POST['password']) {
            $userId = createUser($_POST['email'], $_POST['password'], $_POST['name']);
            if ($userId) {
                $_SESSION['id'] = $userId;
                header('Location: ../index.php');
                exit();
                echo 'Siz registratsiyadan o\'tdingiz';
            } else {
                echo 'Ro\'yxatdan o\'tishda xatolik yuz berdi';
            }
        } else {
            echo 'malumotlar kiritilmagan';
        }
        break;
    case 'login':
        if ($_POST['email'] && $_POST['password']) {
            if ($user = checkUser($_POST['email'], $_POST['password'])) {
                $_SESSION['id'] = $user['id'];
                echo 'Siz login qildingiz';
                header('Location: ../index.php');
                exit();
            } else {
                echo 'Login yoki parol xato';
            }
        } else {
            echo 'malumotlar kiritilmagan';
        }
        break;
    case 'logout':
        unset($_SESSION['id']);
        header('Location: ../index.php');
        break;
}
