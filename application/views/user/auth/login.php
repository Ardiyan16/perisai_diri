<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/login/images/pdjember.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/main.css">
    <script src="<?= base_url() ?>assets/login/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url(<?= base_url('assets/login/images/bg-01.jpg') ?>);">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?= base_url('User/Auth/login') ?>">
                    <span class="login100-form-logo">
                        <img src="<?= base_url() ?>assets/login/images/pd.png" height="100" width="130">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="<?= base_url('User/Auth/v_registrasi') ?>">
                            Anda belum memiliki akun? Registrasi disini
                        </a>
                        <br>
                        <a class="txt1" href="#">
                            Lupa Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>

    <script>
        <?php if ($this->session->flashdata('insert')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil registrasi akun',
                text: 'silahkan tunggu konfirmasi dari admin',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('belumkonfirmasi')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf akun anda belum dikonfirmasi!',
                text: 'silahkan tunggu konfirmasi dari admin',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('passwordsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Password anda salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('emailsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Email anda salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('logout')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil logout',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php endif ?>
    </script>

</body>

</html>