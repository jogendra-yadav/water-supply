<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>AMAN WATER | Login</title>
        <link href="<?php echo template_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo template_url('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
        <link href="<?php echo template_url('css/animate.css'); ?>" rel="stylesheet">
        <link href="<?php echo template_url('css/style.css'); ?>" rel="stylesheet">

    </head>

    <body class="gray-bg">
        <div class="loginColumns animated fadeInDown">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="font-bold text-center">Aman Water Supply</h2>
                    <div class="ibox-content">
                        <form class="m-t" role="form" method="post" action="<?php echo site_url('login.html'); ?>">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Enter username or mobile">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                        </form>
                        <?php
                        if (validation_errors()) {
                            ?>
                            <div class="bg-danger p-xs b-r-sm text-center"><?php echo validation_errors(); ?></div>
                            <?php
                        }
                        if ($this->session->flashdata('login_error')) {
                            ?>
                            <div class="bg-danger p-xs b-r-sm text-center"><?php echo $this->session->flashdata('login_error'); ?></div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </body>

</html>
