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
<div class="container mt-3">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class="row">
        <div class="col-10">
          <h1>Kategoriyalar</h1>
        </div>
        <div class="col-2">
          <a class="btn btn-success" href="category-controller.php?method=create">Qo'shish</a>
        </div>
      </div>
      <div class="row">
        <table class="table table-striped table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
          </tr>
            <?php foreach ($categories as $category) : ?>
              <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['name'] ?></td>
                <td>
                  <a class="btn btn-sm btn-warning" href="category-controller.php?method=edit&id=<?= $category['id'] ?>">Edit</a>
                  <a class="btn btn-sm btn-danger" href="category-controller.php?method=delete&id=<?= $category['id'] ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
        </table>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>
</body>
</html>