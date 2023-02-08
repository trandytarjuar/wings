<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?= view("layouts/wrapper") ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?= view("layouts/navbar") ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="row">
                <?php foreach ($product as $row) : ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXz8/O6urr39/e1tbXv7+/Z2dnf39+8vLzW1tbExMTNzc3Hx8fi4uLc3Nzq6urBwcHR0dE7I9AnAAAEcklEQVR4nO2d6ZKrIBBGFYz7kvd/2ompVGZuaKWbaLrJ/c6vqalAPBGQpcGiAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvgsnRfuChbii7UrPpxymIitHd/GlEF+OGSm6Xiy4Ol6yUXRtiuBNMZu7WKUJ3sjE0F1TBf2Uh6JrUg3LIQ/DIrmQlk0ehunVMJeKCEMY2geGMLTPlxreRrDVg/kNw2cmfIqPDJ5ddW3+DGfTEQyanzTX6nTH1OHSUfj2ZMW0Ae+hiv2piglTFscrnjs/oC94UzzRz7XadndOrIqu05a7051oqO324ERDC9XwVhFhCEMYqgNDGMJQHxjCEIb6wBCGMHzn0g6YZjVr6H0ztNM4r4xTOzRvaBo09L6vqz8BbeufVd2nSpoz9F1NLTjc/lV3aRnaMvTDvLme4tw8pGRpydB38/7luFl+H00Z1vGLcXW+hn5gBZK6QlhUzRjyF8KES3ZWDCUBlm4U5WzD0EeamJecJevlNgxlgjJFE4byGGBBQbVgmBIf6yZ27gYMk9baXZ+PYWJ0LDfiWN/Qz4n5M1sbfcPrdk97f1sQMzBe33BLb770S9M0S3+ptiSzMNyId3HT8hzxer/QXXJevI62IXkL3dj8m9Y39BOT8wXahlR/mwoWI8O3WBE7yoa+IhIuVEK/EJ/kRKwqG1J7YZaNzxKKbrBu6MMmZOeiw5/D1Yzv0DUME+20j1S7a91wCb59t2aFtdZtFWkrhkF/JtKfDhpURr9G1dDXQaL9NGGpjldEXcPXTneslxLWxHj3W9cwSBILSQ2DRW0bhiPDWJLwN4mOElUNg6Y0WubCch1tTFUNgzIXnV/y4+uXREOtVQ2DTkq0ZQxa33i/DYanGn5/Kf3+liZ4WsQ3MMhTGHvix2pVOICy/cQPy1xkrj6c/7feawsHwMKeN2MIbG30tD8akn5e3zAcAe9PEIbfYX0ETAzad4odUagZk23KhuHK4fbOWmLKlLOKqDybSGwOdBvRJJ6YeeRscTQ4I0wrUoI5zAiTa2tUwAwZbsNaX9M2JDciB+FrWwFvWaw90aFQaxji7+raQPvxtlKrG5JrM2vqYmz7ruv6dtyKd+OdJKJuuBOJETn7khmNoW+YemQgN2hI33BrJT8KM3cLhkkH6nGWDs0Yppyxwg8ytWBIdaljeTOWRi0ZilsbSQytDUPhXRTcQTOGopNyZCf7WDEUnHckPJvJjGFZLqyTuVwVn7iwarg+NWJX4+Snh1ky3Axf+83yNeAtN8M1tmvc2dk1kvFgeRmu97Gl4kmdq1r5/TNpuF7T0s7Fc9x0/2NuU26fWcPyHjXbt1M9jmM9tf3yzl5go4YPzQM2Ops2PAYYwhCG+sAQhjDUB4YwhKE+MITh/22o7fbgRMPvP7HcwIsDZAsicrTt7pzoJ1sEOwn54qtMUfkVJWkL6DLFutR09JzTw95VLC6iV8ceSdldPvIaWvHrf4/kA34AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCJ/ACOOkzj4tSV3wAAAABJRU5ErkJggg==" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="ecom-product-detail.html"><?= $row->product_name ?></a></h4>
                                        
                                        <input type="hidden" value="<?=$row->currency?>" id="currency" />
                                       
                                        <input type="hidden" value="<?=$row->unit?>" id="unit" />
                                        <?php $discount = $row->discount;
                                                $harga = $row->price;
                                                $total_diskon = $harga *($discount/100);
                                                $hasil = $harga-$total_diskon?>
                                        
                                           <?php if(empty($row->discount)){ ?>
                                            <span class="price"><?= $row->currency ?><?= $row->price ?></span>
                                            <?php }else {?>
                                                <h4><?= $row->currency ?><strike><?=$row->price?></strike></h4>
                                            <span class="price" ><?= $row->currency ?><?= $hasil ?></span>
                                            <input type="hidden" value="<?=$hasil?>" id="price" />
                                            <?php } ?>
                                       
                                            <!-- <span class="price"><?= $row->currency ?><?= $hasil ?></span> -->
                                       
                                        
                                    </div>
                                    <div class="shopping-cart  mb-2 me-3">
                                        <a onclick="buy(<?=$row->product_code?>)"class="btn btn-primary" ><i class="fa fa-shopping-basket me-2"></i>Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/2.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">Striped Dress</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$159.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/3.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">BBow polka-dot</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$357.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/4.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">Z Product 360</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                    </ul>
                                    <span class="price">$654.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/5.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">Chair Grey</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$369.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/6.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">fox sake withe</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$245.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/7.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">Back Bag</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$364.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="images/product/1.jpg" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4><a href="ecom-product-detail.html">FLARE DRESS</a></h4>
                                    <ul class="star-rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                    </ul>
                                    <span class="price">$548.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?= view("layouts/script") ?>
    <?=view("js/index")?>

</body>

</html>