<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Point Görsel Muhasebe Giriş </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <link rel="shortcut icon" href="<?php echo SITE_PUBLIC;?>assets/img/favicon.png">
        <link href="<?php echo SITE_PUBLIC;?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo SITE_PUBLIC;?>assets/css/ui.css" rel="stylesheet">
        <link href="<?php echo SITE_PUBLIC;?>assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-signin" role="form" action="<?php echo SITE_URL ?>admin/runLogin" method="post">
                            <div class="append-icon">
                                <input type="text" name="username" id="name" class="form-control form-white username" placeholder="Kullanıcı Adı" required>
                                <i class="icon-user"></i>
                            </div>
                            <div class="append-icon m-b-20">
                                <input type="password" name="password" class="form-control form-white password" placeholder="Parola" required>
                                <i class="icon-lock"></i>
                            </div>
                            <button type="submit" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Giriş Yap</button>
                            
                        </form>
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span>2016 © Point Görsel. </span>
            </p>
        </div>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="<?php echo SITE_PUBLIC;?>assets/js/pages/login-v1.js"></script>
    </body>
</html>