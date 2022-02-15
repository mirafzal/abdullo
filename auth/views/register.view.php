<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Registratsiya</h1>
<form action="auth-controller.php" method="post">
  <input type="text" name="method" value="register" hidden>
  <input type="text" name="name"><br>
  <input type="email" name="email"><br>
  <input type="text" name="password"><br>
  <button>Submit</button>
</form>
</body>
</html>