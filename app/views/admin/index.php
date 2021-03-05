<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= baseurl ?>/assets/images/logo.png">
    <link rel="stylesheet" type="text/css"
        href="<?=baseurl ?>/assets/login-assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?=baseurl ?>/assets/login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=baseurl ?>/assets/login-assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?=baseurl ?>/assets/login-assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=baseurl ?>/assets/login-assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=baseurl ?>/assets/login-assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=baseurl ?>/assets/login-assets/css/main.css">
    <title><?= $data['title']?></title>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--===============================================================================================-->
</head>

<body>
    <?php Flasher::flash() ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?=baseurl ?>/assets/login-assets/images/img-01.png" alt="IMG">
                </div>

                <form action="<?= baseurl ?>/admin/index" class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        Admin Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="login-admin">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="<?=baseurl ?>/assets/login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=baseurl ?>/assets/login-assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?=baseurl ?>/assets/login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=baseurl ?>/assets/login-assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=baseurl ?>/assets/login-assets/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="<?=baseurl ?>/assets/login-assets/js/main.js"></script>

</body>

</html>