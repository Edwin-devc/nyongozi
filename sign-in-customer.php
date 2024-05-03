<?php
    $page_title = "Sign in";
    include 'header.php';
?>
<body>
<!-- create account -->
<section class="col-lg-6 mx-auto p-3 pt-5">
    <div class="container">
        <!-- form header -->
        <header class="text-center">
            <img src="assets/nyongozi-logo-sm.png" alt="" width="150px">
            <h4 class="pt-4">Log in to your account</h4>
            <p>Type your email and password to log in</p>
        </header>
        <!-- log in form -->

        <div class="card p-4 bg-light border-0">
            <form action="" method="POST">
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control form-control-sm" type="email" placeholder="email address" required />
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control form-control-sm " type="password" placeholder="password" required />
                </div>
                <div class="pt-3">
                    <input type="reset" class="btn btn-secondary btn-sm me-2" value="cancel">
                    <input type="submit" class="btn btn-success btn-sm" value="sign in">
                </div>
            </form>
            <div class="mt-2">
                <p class="mb-0"><a href="forgot-password.php">Forgot password</a></p>
                <p class="m-0">New to nyongozi? <a href="register-customer.php">Sign up</a></p>
            </div>
        </div>
        <div>
            <p class="text-center">For any support needed, visit our <a href="#"> Help Center</a></p>
        </div>
    </div>
</section>
<footer class="text-center mt-2 bg-light py-2">
    <p>Copyright © 2022 nyongozi. All Rights Reserved.</p>
</footer>
<!-- bootstrap js script -->
<script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<!-- custom js-->
<script src="assets/js/nyongozi.main.js"></script>
</body>
</html>