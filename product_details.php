<?php
$page_title = 'product details';
include 'header.php';
?>

<body>
    <?php
    include 'nav.php';
    include 'db_connect.php';
    $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $queryString = parse_url($currentURL, PHP_URL_QUERY);
    parse_str($queryString, $query);
    $id = isset($query['id']) ? $query['id'] : null;
    $sql = "SELECT * FROM product WHERE product_id = $id";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $product = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <section class="bg-success">
        <div class="container bg-success vh-100 d-flex align-items-center">
            <div class="card border-0 h-75">
                <div class="row mt-3">
                    <div class="col-lg-4 ms-3">
                        <img class="img-fluid" src="<?php echo "assets/products/" . $product[0]['image_path']; ?>"
                            alt="">

                        <div class="row w-75 , mt-3">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="col-3">
                                    <img class="img-fluid w-50"
                                        src="<?php echo "assets/products/" . $product[0]['image_path']; ?>" alt="">
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <p><?php echo $product[0]['product_name']; ?></p>
                        <p><?php echo "UGX. " . $product[0]['price']; ?></p>
                        <button class="btn btn-success">Add to cart</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>

</html>