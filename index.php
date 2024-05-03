<?php
$page_title = 'Home';
include 'header.php'
    ?>

<body>
    <?php include 'nav.php' ?>
    <section class="bg-success p-5 py-3">
        <div class="container">
            <!-- categories menu -->
            <div class="d-flex justify-content-between">
                <nav class="bg-light w-25 me-4 rounded-1 main-menu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="fa-solid fa-apple-whole"></span>
                                Groceries
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="fa-solid fa-shirt"></span>
                                Fashion
                            </a>
                        </li>
                        <div class="li nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-tv"></i>
                                Electronics
                            </a>
                        </div>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-mobile-screen"> </i>
                                Mobile Devices
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-computer"></i>
                                Computing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-gamepad"></i>
                                Gaming
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-chair"></i>
                                Furniture
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-helmet-safety"></i>
                                Construction
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-book"></i>
                                Stationery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-ellipsis"></i>
                                Other Categories
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="w-75">
                    <img class="img-fluid img-menu rounded-1"
                        src="https://www.aliontimer.com/wp-content/uploads/2021/10/basics-of-household-appliances.jpg"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- recommended products -->
    <section class="p-5 py-1 bg-success">
        <div class="container">
            <div class="card text-center border-0">
                <div class="card-header">
                    <h5 class="card-title text-start">
                        Recommended For You
                    </h5>
                </div>

                <div class="row">

                    <!-- fetch data -->
                    <?php

                    include 'db_connect.php';
                    $sql = "SELECT * FROM product";
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $products = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($products as $product) {
                        ?>
                        <!-- recommended item-->
                        <div class="col-lg-3 scale-1">
                            <a href="<?php echo "product_details.php?id=" . $product['product_id'] ?>">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="card-img">
                                            <img class="img-fluid"
                                                src="<?php echo "assets/products/" . $product['image_path'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product-short-detail">
                                        <h6><?php echo $product['product_name'] ?></h6>
                                        <h6><?php echo "UGX. " . $product['price'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  end of recommended product item -->

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- recommended products end -->

    <!-- Top deals -->
    <section class="p-5 py-1 bg-success">
        <div class="container">
            <div class="card text-center border-0">
                <div class="card-header">
                    <h5 class="card-title text-start">
                        Top Deals
                    </h5>
                </div>

                <div class="row">
                    <?php foreach ($products as $product) { ?>
                        <!-- top deels item-->
                        <div class="col-lg-3 scale-1">
                            <a href="<?php echo "product_details.php?id=" . $product['product_id'] ?>">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="card-img">
                                            <img class="img-fluid"
                                                src="<?php echo "assets/products/" . $product['image_path'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product-short-detail">
                                        <h6><?php echo $product['product_name'] ?></h6>
                                        <h6><?php echo "UGX. " . $product['price'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  top deal item ends here -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Top deals end -->

    <!-- New to nyongozi -->
    <section class="p-5 pt-1 bg-success">
        <div class="container">
            <div class="card text-center border-0">
                <div class="card-header">
                    <h5 class="card-title text-start">
                        New Here!
                    </h5>
                </div>

                <div class="row">

                    <?php foreach ($products as $product) { ?>
                        <!-- New item start -->
                        <div class="col-lg-3 scale-1">
                            <a href="<?php echo "product_details.php?id=" . $product['product_id'] ?>">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <div class="card-img">
                                            <img class="img-fluid"
                                                src="<?php echo "assets/products/" . $product['image_path'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="product-short-detail">
                                        <h6><?php echo $product['product_name'] ?></h6>
                                        <h6><?php echo "UGX. " . $product['price'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--  New item end -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- New to nyongozi end -->

    <!-- footer -->
    <section class="footer p-5 pt-0 text-white">
        <div class="container">
            <div class="row">
                <!-- Subscribe to our newsletter start -->
                <div class="col-lg-4">
                    <div class="logo m-0">
                        <img src="assets/nyongozi_logo.png" alt="logo" class="imf-fluid" width="140px">
                    </div>
                    <div>
                        <p class="fs-6 m-0">Join our Newsletter</p>
                        <p><small>Get the updates on our latest offers</small></p>
                        <form action="#" method="post">
                            <div class="input-group">
                                <input class="form-control form-control-sm" type="email" required />
                                <input class="btn bg-success text-white btn-sm" type="submit" value="Subscribe" />
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Subscribe to our newsletter end -->

                <!-- help start -->
                <div class="col-lg-3">
                    <h6 class="pt-5">Need Help?</h6>
                    <nav class="d-flex flex-column">
                        <a href="">Help Center</a>
                        <a href="">Contact us</a>
                        <a href="">How to buy on nyongozi</a>
                        <a href="">Delivery</a>
                        <a href="">Return Policy</a>
                        <a href="">Refund Policy</a>
                    </nav>
                </div>
                <!-- help end -->

                <!-- About start -->
                <div class="col-lg-3">
                    <h6 class="pt-5">About nyongozi</h6>
                    <nav class="d-flex flex-column">
                        <a href="">About US</a>
                        <a href="">Careers</a>
                        <a href="">Privacy Policy</a>
                        <a href="">Terms & Conditions</a>
                        <a href="">Top Deals</a>
                    </nav>
                </div>
                <!-- About end -->


                <div class="col-lg-2">
                    <!-- socials start -->
                    <h6 class="pt-5">Follow Us</h6>
                    <div>
                        <a href="" class="me-2"><i class="fab fa-twitter fs-5"></i></a>
                        <a href="" class="me-2"><i class="fab fa-facebook fs-5"></i></a>
                        <a href="" class="me-2"><i class="fab fa-instagram fs-5"></i></a>
                        <a href="" class="me-2"><i class="fab fa-linkedin fs-5"></i></a>
                    </div>
                    <!-- socials end -->

                    <!-- payment methods start -->
                    <h6 class="pt-3">Payment Methods</h6>
                    <div class="d-flex">
                        <a href="" class="me-2 bg-white"><img class="img-fluid w-100"
                                src="assets/images/airtel-money.webp" alt=""></a>
                        <a href="" class="me-2"><img class="img-fluid w-100" src="assets/images/mtn-momo.png"
                                alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- bootstrap js script -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js-->
    <script src="assets/js/nyongozi.main.js"></script>
</body>

</html>