<?php $this->load->view('admin/partials/head.php') ?>
<?php $this->load->view('admin/partials/menu.php') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Unit/Ranting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Admin/Ranting') ?>">Unit/Ranting</a></li>
                        <li class="breadcrumb-item active">Tambah Unit/Ranting</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="<?= base_url('Admin/Ranting') ?>" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('Admin/Ranting/save_ranting') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ranting/Unit</label>
                                    <input type="text" class="form-control" name="nama_ranting" id="exampleInputEmail1" placeholder="Enter Ranting/Unit" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Enter Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pelatih</label>
                                    <input type="text" class="form-control" name="pelatih" id="exampleInputEmail1" placeholder="Enter Pelatih" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ketua</label>
                                    <input type="text" class="form-control" name="ketua" id="exampleInputEmail1" placeholder="Enter Ketua" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jadwal Latihan</label>
                                    <input type="text" class="form-control" name="jadwal" id="exampleInputEmail1" placeholder="Enter Jadwal Latihan" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <textarea id="summernote" name="keterangan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                <br>
                                <br>
                                <p>nb: ukuran foto kurang dari 3 MB</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('admin/partials/footer.php') ?>
<!-- <script>
    <?php if ($this->session->flashdata('insert')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Ranting Berhasil disimpan',
            showConfirmButton: false,
            timer: 950
        })
    <?php elseif ($this->session->flashdata('update')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Data Ranting Berhasil diubah',
            showConfirmButton: false,
            timer: 950
        })
    <?php endif ?>
</script> -->
<?php $this->load->view('admin/partials/js.php') ?>