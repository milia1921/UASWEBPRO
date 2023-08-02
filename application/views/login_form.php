<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>MyAsset | LOGIN</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/semantic.min.css" />

</head>

<body class="inner_page login">
    <div class="full_container">


        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="<?= base_url() ?>assets/images/logo/logo1.png" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="<?= base_url()?>/auth/login" method="post">
                            <?php
                            if ($this->session->flashdata('message_login_error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('message_login_error') . '</div>';
                            }
                            ?>
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email/Username</label>
                                    <input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('username') ?>" required />
                                    <div class="invalid-feedback">
                                        <?= form_error('username') ?>
                                    </div>
                                </div> <br>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                                    <div class="invalid-feedback">
                                        <?= form_error('password') ?>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button type="submit" class="main_bt">Sing In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="<?= base_url() ?>assets/js/animate.js"></script>
    <!-- select country -->
    <script src="<?= base_url() ?>assets/js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="<?= base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>