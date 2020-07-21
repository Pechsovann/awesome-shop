<?php

    include './database/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./assets/links/bootstrap.min.js.download"></script>
    <script src="./assets/links/jquery.min.js.download"></script>
    <script src="./assets/links/popper.min.js.download"></script>
    <script src="./assets/javascript/main.js"></script>
    <link rel="stylesheet" href="./assets/links/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Online Shop</title>
</head>

<body>

    <!-- Navbar -->
    <?php include './includes/nav_bar.php'; ?>
    <!-- Feature Section -->
    <?php
            include './includes/feature.php';
        ?>
        <!-- promotion -->
        <?php
            include './includes/promotion.php';
        ?>
    
            <!-- category section -->
            <?php
                include './includes/category.php';
            ?>

            <!-- product Section -->
            <div class="col-md-9 background">
                <div class="row" id="item">
                    <?php
                        include './includes/products.php';
                        ?>

                </div>
</body>

</html>