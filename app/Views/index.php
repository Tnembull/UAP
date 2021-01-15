<?= $this->extend('lelang/page_layout'); ?>
<?= $this->section('content'); ?>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->



<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Beranda</h4>
                <h2>Lelang</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Produk Terbaru</h2>
                    <a href="products.html">LIHAT SEMUA PRODUK<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?php foreach ($barang as $key => $b) {?>
            <div class="col-md-3" >
            
                <div class="product-item" >
                    <a href="/detail/<?= $b['slug']; ?>"><img src="/assets/image/<?= $b['foto'];?>" alt=""></a>
                    <div class="down-content"  width="250px" height="250px">
                        <a href="#">
                            <h5><?= $b['nama_barang'];?></h5>
                        </a>
                        <p><?= number_to_currency($b['harga_awal'], 'IDR');?></p>
                        <!-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p> -->
                        <ul class="text">
                            <li> Sisa Waktu </li>
                        </ul>
                        <span id="countdown" class="timer"></span>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<script>

//let get todays date here
var today = new Date();
var DD = today.getDate();
var MM = today.getMonth()+1; //January is 0!
var YYYY = today.getFullYear();
//let get the Difference in Sec btw the two dates
<?php foreach ($barang as $key => $b) {?>
var _DateFromDBProgEndDate = '<?php echo $b['tgl_tutup']; ?>';
<?php } ?>
var ProgEndTime = new Date(_DateFromDBProgEndDate);
var TodayTime = new Date();

var differenceTravel = ProgEndTime.getTime()- TodayTime.getTime() ;
var seconds = Math.floor((differenceTravel) / (1000));
////////////////////////////////
var SecDiffFromToday = seconds;
var seconds = SecDiffFromToday;
function timer() {
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    //document.getElementById('countdown').innerHTML = days + ":" + hours + ":" + minutes + ":" + remainingSeconds;
    document.getElementById('dday').innerHTML = days;
    document.getElementById('dhour').innerHTML =hours;
    document.getElementById('dmin').innerHTML =minutes;
    document.getElementById('dsecond').innerHTML =remainingSeconds;



    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Completed";
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);
</script>