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
          <h1>Produkt o'zgartirish</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
            <?= $_REQUEST['message'] ?? '' ?>
        </div>
      </div>
      <div class="row">
        <form action="product-controller.php" method="post">
          <input type="text" name="method" value="update" hidden>
          <input type="text" name="id" value="<?= $product['id'] ?>" hidden>
          <div class="mb-3">
            <label for="name" class="form-label">Nomi</label>
            <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Narxi</label>
            <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Kategoriyasi</label>
            <select name="category_id"  class="form-select" aria-label="Default select example">
                <?php foreach ($categories as $category) : ?>
                  <option <?php if ($product['category_id'] == $category['id']) echo 'selected'?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">O'zgartirish</button>
        </form>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>

</body>
</html>