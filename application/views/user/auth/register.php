<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi User</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url(<?= base_url('assets/login/images/bg-01.jpg') ?>);">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="<?= base_url('User/Auth/registrasi') ?>">
                    <span class="login100-form-logo">
                        <img src="<?= base_url() ?>assets/login/images/pd.png" height="100" width="130">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Registrasi
                    </span>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="nama_lengkap" placeholder="Nama Lengkap...">
                        <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="alamat" placeholder="Alamat...">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="number" name="no_telepon" placeholder="No Telepon / Whatsapp...">
                        <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <select class="input100" name="id_ranting" required>
                            <option>Asal Unit/Ranting</option>
                            <?php foreach ($ranting as $r) : ?>
                                <option value="<?= $r->id_ranting ?>" style="color: black;"><?= $r->nama_ranting ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="text" name="email" placeholder="Email...">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Registrasi
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <br>
                        <a class="txt1" href="<?= base_url('User/Auth') ?>">
                            Sudah memiliki akun? Silahkan login disini
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

</body>

</html>