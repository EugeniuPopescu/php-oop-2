<?php
require __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body class="bg-primary-subtle">
    <div class="container">
        <div class="row py-2">
            <h2 class="d-flex justify-content-center">Pet Product's</h2>
        </div>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4 py-3">
                    <div class="card h-100 py-3">
                        <div class="card-body">
                            <!-- img -->
                            <div class="d-flex justify-content-center">
                                <img class="prdImg" src="<?= $product->productImg ?>" alt="">
                            </div>
                            <!-- title -->
                            <h5 class="card-title">
                                <?= $product->productName ?>
                            </h5>
                            <!-- price -->
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $product->productPrice ?>
                            </h6>
                            <!-- description -->
                            <p class="card-text">
                                <?= $product->productDescription ?>
                            </p>
                            <!-- category -->
                            <span class="card-subtitle mb-2 text-muted">
                                Categoria:
                            </span>
                            <span class="card-text">
                                <?= $product->category->typeAnimal ?>
                            </span>
                            <!-- nome della classe  -->
                            <p>
                                ( <?= get_class($product) ?> )
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>