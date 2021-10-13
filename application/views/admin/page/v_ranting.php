<?php $this->load->view('admin/partials/head.php') ?>
<?php $this->load->view('admin/partials/menu.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Unit/Ranting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Unit/Ranting</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('Admin/Ranting/t_ranting') ?>" class="btn btn-success">Tambah Unit/Ranting</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Ranting</th>
                        <th>Alamat</th>
                        <th>Pelatih</th>
                        <th>Ketua</th>
                        <th>Jadwal Latihan</th>
                        <th>Logo</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ranting as $r) : $no=1 ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $r->nama_ranting ?></td>
                            <td><?= $r->alamat ?></td>
                            <td><?= $r->pelatih ?></td>
                            <td><?= $r->ketua ?></td>
                            <td><?= $r->jadwal ?></td>
                            <td><img src="<?= base_url('assets/back/images/logo/' . $r->logo) ?>" width="64"></td>
                            <td>
                                <a href="" class="btn btn-small" style="color: blue;"><i class="fas fa-edit"></i> Edit</a> | 
                                <a href="" class="btn btn-small" style="color: red;"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
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