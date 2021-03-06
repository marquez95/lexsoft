</div>


<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2021 Lexsoft</strong>
    Todos los derechos reservados
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
</div>

<!-- ./wrapper -->
<?php include('js/casos.php'); ?>
<!-- jQuery -->
<script src="<?=base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Bootstrap 4 -->
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- Summernote -->
<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?=base_url('dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('dist/js/demo.js')?>"></script>
<!-- Page specific script -->
<script>
$(function() {
    $("#tabla1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabla1_wrapper .col-md-6:eq(0)');

});
</script>

<script>
$('.summernote').summernote({
    height: 150, //set editable area's height
    codemirror: { // codemirror options
        theme: 'monokai'
    }
});
</script>



</body>

</html>