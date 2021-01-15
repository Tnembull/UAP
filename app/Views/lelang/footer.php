<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 - E-Auction </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url(); ?>/assets/e-auction/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="<?= base_url(); ?>/assets/e-auction/assets/js/custom.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/js/owl.js"></script>
<script src="<?= base_url(); ?>/vendor/e-auction/assets/js/slick.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/js/isotope.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/js/accordions.js"></script>
<!-- jQuery -->
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/e-auction/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.countdown.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.countdown.min.js"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
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

</body>

</html>