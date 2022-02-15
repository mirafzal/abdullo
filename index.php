<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php if ($_SESSION['id']) : ?>
  <a class="btn btn-primary" href="categories/category-controller.php?method=index">Kategoriyalar</a>
  <a class="btn btn-primary" href="products/product-controller.php?method=index">Produktlar</a>
  <a class="btn btn-primary" href="auth/auth-controller.php?method=logout">Chiqish</a>
<?php else: ?>
  <a class="btn btn-primary" href="auth/auth-controller.php?method=registerview">Registratsiya</a>
  <a class="btn btn-primary" href="auth/auth-controller.php?method=loginview">Login</a>
<?php endif; ?>
</body>
</html>
