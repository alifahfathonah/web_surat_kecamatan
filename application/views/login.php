<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="icon" type="image/png" href="<?= base_url();?>assets/favico.ico" />

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?=base_url();?>assets/login_register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url();?>assets/login_register/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?=base_url();?>assets/logo.jpeg"
                                alt="sing up image"></figure>
                        <a href="<?=base_url();?>Register/index" class="signup-image-link">Buat akun !</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?=base_url();?>assets/login_register/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/login_register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>