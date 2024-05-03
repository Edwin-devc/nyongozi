<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="icon" href="assets/logo.png">
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap 5.0.2 css file -->
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom form css -->
    <link rel="stylesheet" href="assets/css/nyongozi.form.css">
    <title>sign up | nyongozi</title>
</head>
<body>
    <!-- create account -->
    <section class="col-lg-6 mx-auto p-3 pt-5">
        <div class="container">
            <!-- form header -->
            <header class="text-center">
                <img src="assets/nyongozi-logo-sm.png" alt="" width="150px">
                <h4 class="pt-4">Create your account</h4>
                <p>Get started by creating your account</p>
            </header>
            <!-- registration form -->

            <div class="card p-4 bg-light border-0">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first-name" class="form-label">First name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="first name" required />
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="last-name" class="form-label">Last name</label>
                                <input class="form-control form-control-sm" type="text" placeholder="last name" required />
                            </div>
                        </div>

                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control form-control-sm" type="email" placeholder="email address" required />
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control form-control-sm " type="password" placeholder="password" required />
                    </div>
                    <div class="form-group mt-2">
                        <label for="confirm-password" class="form-label">Confirm password</label>
                        <input class="form-control form-control-sm" type="password" placeholder="confirm password" required />
                    </div>
                    <div class="pt-3">
                        <input type="reset" class="btn btn-secondary btn-sm me-2" value="cancel">
                        <input type="submit" class="btn btn-success btn-sm" value="sign up">
                    </div>
                </form>
                <div class="mt-2">
                    Already have an account? <a href="sign-in-customer.php">Sign in</a>
                </div>
            </div>
            <div>
                <p class="text-center">For any support needed, visit our <a href="#"> Help Center</a></p>
            </div>
        </div>
    </section>
    <footer class="text-center mt-2 bg-light py-2">
        <p>Copyright © 2024 nyongozi. All Rights Reserved.</p>
    </footer>
    <!-- bootstrap js script -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js-->
    <script src="assets/js/nyongozi.main.js"></script>
</body>
</html>