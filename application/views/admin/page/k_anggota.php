<?php $this->load->view('admin/partials/head.php') ?>
<?php $this->load->view('admin/partials/menu.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Konfirmasi Akun</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h5>Konfirmasi Akun</h5>
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
                        <th>Option</th>
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
                            <td>
                                <a href="<?= base_url('Admin/Dashboard/proses_konfirmasi/' . $a->id_user) ?>" class="btn btn-small konfirmasi" style="color: green;"><i class="fas fa-check"></i> Konfirmasi</a> |
                                <a href="<?= base_url('Admin/Dashboard/delete_konfir/' . $a->id_user) ?>" class="btn btn-small tombol-hapus" style="color: red;"><i class="fas fa-trash"></i> Hapus</a>
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
<script>
    <?php if ($this->session->flashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data berhasil dikonfirmasi',
            showConfirmButton: true,
            // timer: 1500
        })

    <?php elseif ($this->session->flashdata('delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data konfirmasi anggota berhasil dihapus',
            showConfirmButton: true,
            // timer: 1500
        })

    <?php endif ?>

    $('.konfirmasi').on('click', function(e) {
        e.preventDefault();
        const link = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin ?',
            text: "Data akan dikonfirmasi!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#38b000',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Konfirmasi'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = link;
            }
        })

        $('.tombol-hapus').on('click', function(e) {
            e.preventDefault();
            const link = $(this).attr('href');
            Swal.fire({
                title: 'Apakah anda yakin ?',
                text: "Data konfirmasi anggota akan dihapus!",
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
    });
</script>
<?php $this->load->view('admin/partials/js.php') ?>