<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" type="image/jpg" href="./views/assets/fav.ico" />
    <?php 
        for ($i=0; $i < count($styles); $i++) { 
            ?>
    <link rel='stylesheet' href='<?php echo $styles[$i] ?>'>
    <?php
        }
    ?>
</head>