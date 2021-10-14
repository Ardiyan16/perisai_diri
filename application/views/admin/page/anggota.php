<?php $this->load->view('admin/partials/head.php') ?>
<?php $this->load->view('admin/partials/menu.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Anggota Perisai Diri Jember</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Anggota PD Jember</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h5>Anggota Perisai Diri Jember</h5>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Ranting</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a->nama_lengkap ?></td>
                            <td><?= $a->alamat ?></td>
                            <td><?= $a->no_telepon ?></td>
                            <td><?= $a->nama_ranting ?></td>
                            <td><?= $a->email ?></td>
                            <td><?= $a->status ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

<?php $this->load->view('admin/partials/footer.php') ?>
<?php $this->load->view('admin/partials/js.php') ?>