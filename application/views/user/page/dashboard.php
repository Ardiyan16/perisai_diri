<?php $this->load->view('user/partials/head.php') ?>
<?php $this->load->view('user/partials/menu.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/back/images/profile/' .  $this->session->userdata('foto')) ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $this->session->userdata('nama_lengkap') ?></h3>


                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama Lengkap : <?= $this->session->userdata('nama_lengkap') ?></b>
                                </li>
                                <li class="list-group-item">
                                    <b>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $this->session->userdata('alamat') ?></b>
                                </li>
                                <li class="list-group-item">
                                    <b>No Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $this->session->userdata('no_telepon') ?></b>
                                </li>
                                <li class="list-group-item">
                                    <b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $this->session->userdata('email') ?></b>
                                </li>
                            </ul>

                            <a href="#edit" data-toggle="modal" class="btn btn-primary btn-block"><i class="fas fa-edit"></i><b>Edit Profile</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="exampleInputEmail1" placeholder="Enter Ranting/Unit" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('user/partials/footer.php') ?>
<?php $this->load->view('user/partials/js.php') ?>