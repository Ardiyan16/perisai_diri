const notifikasi = $('.flash-data').data('flashdata');

if (notifikasi) {

    Swal.fire({
        title = 'Data Unit/Ranting',
        text = 'Berhasil' + notifikasi,
        icon = 'success'
    });
}