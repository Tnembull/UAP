<!-- ================== BEGIN BASE JS ================== -->
<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
<script src="../assets/js/theme/transparent.min.js"></script>
<script src="../assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
<script src="../assets/plugins/nvd3/build/nv.d3.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
<script src="../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="../assets/js/demo/dashboard-v2.min.js"></script>
<script src="../assets/js/jquery.countdown.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/js/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/js/jszip/jszip.min.js"></script>
<script src="../assets/js/pdfmake/pdfmake.min.js"></script>
<script src="../assets/js/pdfmake/vfs_fonts.js"></script>
<script src="../assets/js/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/js/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/js/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        COLOR_GREEN = '#00cbff';
        App.init();
        DashboardV2.init();
    });
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); 
    });
</script>

</body>

</html>