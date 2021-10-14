<!-- jQuery -->
<script src="<?= base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/back/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/back/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/back/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/back/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="<?= base_url() ?>assets/back/plugins/codemirror/codemirror.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/codemirror/mode/css/css.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/back/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/back/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/back/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/back/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/back/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/back/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/back/dist/js/pages/dashboard.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    // $('.custom-file-input2').on('change', function() {
    //     let fileName = $(this).val().split('\\').pop();
    //     $(this).next('.custom-file-label2').addClass("selected").html(fileName);
    // });
</script>
</body>

</html>