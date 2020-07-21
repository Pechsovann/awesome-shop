<?php

    include '../database/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Online Shop</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="bg-light navbar-light">
    <div class="d-flex">
        <div class="p-2 flex-grow-1 bd-highlight"><h3>Awesome <span class="text-success">Shop</span></h3></div>
        <div class="p-2 bd-highlight"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
        <div class="p-2 bd-highlight"><a href="#">Need Help</a></div>
        <div class="p-2 "><a href="login.php" class="border border-dark p-1 rounded bg-primary text-dark">Join</a></div>
    </div>
</nav>
    <!-- Feature Section -->
    <?php
            include 'feature.php';
        ?>

        <!-- promotion -->
        <?php
            include 'promotion.php';
        ?>
    

            <!-- category section -->
            <?php
    
    $categories = query("select * FROM categories; ");
    $ca = $categories -> fetch_array(MYSQLI_NUM);
    $count = 1;
?>
        <div class="row ">
            <div class="col-3 ">   
                <ul class="nav flex-column nav-tabs ">
                    <?php
                        foreach($categories as $cate_icon):
                            if($count == 1){
                                echo '
                           
                                    <li class="nav-item mb-1 text_category active" id="'.$cate_icon['name'].'" >
                                        <a class="nav-link" href="#"><img class="category-icon" src="/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }else {
                                echo '
                           
                                    <li class="nav-item mb-1 text_category" id="'.$cate_icon['name'].'" >
                                        <a class="nav-link" href="/"><img class="category-icon" src="/assets/icons/'.$cate_icon['icon'].'" alt="laptop">'.$cate_icon['name'].'</a>
                                    </li>  
                             ';
                            }
                            $count++;
                        endforeach;
                    ?>
                </ul>
            </div>

                   

            <!-- product Section -->
            <div class="col-md background">
                <div class="row">
                    <?php
                   // include './includes/products.php';
                    ?>
                    <div class="row border border-secondary mt-5">
                        <?php
                    $products = "select * from products p join assets a on p.id = a.product_id where p.id= ".$_GET["id"];
                    $pros = query($products);
                
                foreach($pros as $pro_detail):
                    $dis_count = ((100 - $pro_detail['discount']) * $pro_detail['price']/100);
                    echo '
                <div class="col-sm-5">
                    <div class="d-flex flex-column bd-highlight mb-3">
                        <div class="p-2 bd-highlight ">
                            <h5 class="position-absolute title-detail bg-warning">'.$pro_detail['discount'].'% </h5>
                            <img class="detail-img1" src="'.$pro_detail['resource_path'].'" alt="detail">
                        </div>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="1"></div>
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="2"></div>
                        <div class=" bd-highlight"><img class="detail-img2" src="'.$pro_detail['resource_path'].'" alt="3"></div>
                    </div>
                    
                </div>
                    <!-- right-side -->
                <div class="col-sm-5 border-left ml-5">

                        <?php
                                
                        ?>
                        <div class="d-flex">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <h5>'.$pro_detail['name'].'</h5>
                            </div>
                            <div class="p-2 bd-highlight text-danger"><del>$'.$pro_detail['price'].'</del></div>
                            <div class="p-2 bd-highlight">
                                <h5>$'.$dis_count.'</h5>
                            </div>
                        </div>

                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight d-block">'.$pro_detail['description'].'</div>
                        </div><br>

                        <div class="d-flex bd-highlight">
                            <div class="p-2 bd-highlight ">
                                <a href="#" class="btn btn-white border border-dark"><img class="cart-img"
                                        src="awesomeshop/assets/icons/cart.png" alt="cart"> Cart</a>
                            </div>
                        </div><br>
                        ';
                    endforeach;

                    ?>
                    <?php   
                    $tag = 'select * from product_tag pt join tags t on pt.tag_id = t.id where pt.tag_id ='.$_GET['id'];
                    $t = query ($tag);    
                    foreach ($t as $tg):
                        echo '
                        <div class="d-flex bd-highlight">
                            <div class="p-2 col-6">
                                <a href="#" class="btn btn-secondary border border-dark">'.$tg['name'].'</a>
                            </div>
                            <div class="p-2 col-6">
                                <a href="#" class="btn btn-secondary border border-dark">Ony one </a>
                            </div>
                        </div>';
                    endforeach;
                    ?>
                </div>
                    <!-- Big-row -->
            </div>

                <!-- row -->
            </div><br>
            <hr>
            <!-- reviewer -->
            <?php include './review.php'; ?>
            <!-- wrap-row    -->
        </div>
        <!-- container        -->
    </div>

</body>

</html>