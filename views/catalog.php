<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Каталог товаров</h1>
<div class="container mt-4">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?= $product['image_url']; ?>" class="card-img-top" alt="<?= $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name']; ?></h5>
                        <p class="card-text"><?= $product['price']; ?> ₽</p>
                        <a href="product.php?id=<?= $product['id']; ?>" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>


</body>
</html>
