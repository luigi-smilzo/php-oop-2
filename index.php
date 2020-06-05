<?php 
include_once __DIR__ . '/classes/Manifacturer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <h1>
        Products
    </h1>
    
    <div>
        <h3>
            <?php echo $manifacturer1->name; ?>
        </h3>
        <div>
            <h4>Dettagli:</h4>
            <?php echo $manifacturer1->manifacturerInfos(); ?>
        </div>
    </div>
    
    <div>
        <h3>
            <?php echo $manifacturer2->name; ?>
        </h3>
        <div>
            <h4>Dettagli:</h4>
            <?php echo $manifacturer2->manifacturerInfos(); ?>
        </div>
    </div>
    
</body>
</html>