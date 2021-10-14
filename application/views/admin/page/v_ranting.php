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
                    <?php $no = 1;
                    foreach ($ranting as $r) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $r->nama_ranting ?></td>
                            <td><?= $r->alamat ?></td>
                            <td><?= $r->pelatih ?></td>
                            <td><?= $r->ketua ?></td>
                            <td><?= $r->jadwal ?></td>
                            <td><img src="<?= base_url('assets/back/images/logo/' . $r->logo) ?>" width="64"></td>
                            <td>
                                <a href="<?= base_url('Admin/Ranting/e_ranting/' . $r->id_ranting) ?>" class="btn btn-small" style="color: blue;"><i class="fas fa-edit"></i> Edit</a> |
                                <a href="<?= base_url('Admin/Ranting/delete_ranting/' . $r->id_ranting) ?>" class="btn btn-small tombol-hapus" style="color: red;"><i class="fas fa-trash"></i> Hapus</a> |
                                <a href="#detail<?= $r->id_ranting ?>" data-toggle="modal" class="btn btn-small" style="color: orange;"><i class="fas fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<?php foreach ($ranting as $r) : ?>
    <div class="modal fade" id="detail<?= $r->id_ranting ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail <?= $r->nama_ranting ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Keterangan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $r->keterangan ?></td>
                                <td><img src="<?= base_url('assets/back/images/foto/' . $r->foto) ?>" height="300" width="300"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php $this->load->view('admin/partials/footer.php') ?>
<script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Ranting Berhasil disimpan',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('update')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Ranting Berhasil diubah',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php elseif ($this->session->flashdata('delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Ranting Berhasil dihapus',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>


    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault();
        const link = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin ?',
            text: "Data ranting akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6b705c',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = link;
            }
        })
    });
</script>
<?php $this->load->view('admin/partials/js.php') ?>