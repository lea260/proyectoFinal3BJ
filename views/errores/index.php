<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/main.css">
    <title>Document</title>
</head>
<body>

    <?php require 'views/header4log.php';?>

    <div id="main">
        <h1 class="center error">
        <?php echo $this->mensaje; ?>
        </h1>
    </div>

    <?php require 'views/footer.php';?>
</body>
</html>
