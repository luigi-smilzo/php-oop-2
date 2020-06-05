<?php 
include_once __DIR__ . '/classes/Product.php';
$product1 = new Product('Taglierba', 'Giardinaggio', 300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Products
    </h1>

    <div>
        <?php echo $product1->printInfos(); ?>
    </div>
</body>
</html>