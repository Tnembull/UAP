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
<br><br><br><br><br><br>
<form action="/checkout">
    <input type="hidden" name="_token" value="vTYRhjdQ2IFEWTla1ZUuFB117y20Cv8UtslHUrEv">
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Awal</th>
                                    <th>Jumlah</th>
                                    <th>Tawaran Anda</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-lg-5 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <p class="d-flex total-price">
                            <span id="sub_total_info">Sub Total (0) Produk</span>
                            <span id="sub_total">Rp 0</span>
                        </p>
                    </div>

                    <p class="text-right">
                        <input type="submit" class="btn btn-primary py-2 px-5" value="Checkout">
                    </p>
                </div>
            </div>
        </div>
    </section>
</form>



<?= $this->endSection(); ?>