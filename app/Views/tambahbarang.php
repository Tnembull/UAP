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
<div class="page-heading about-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>TAMBAH BARANG</h4>
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">

            <h2 class="my-4"></h2>

            <form action="/web/save" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="nama_barang" name="nama_barang">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi_barang" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('deskripsi_barang')) ? 'is-invalid' : ''; ?>" id="deskripsi_barang" name="deskripsi_barang">
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_awal" class="col-sm-2 col-form-label">Harga Awal</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control  <?= ($validation->hasError('harga_awal')) ? 'is-invalid' : ''; ?>" id="harga_awal" name="harga_awal">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga_awal'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control  <?= ($validation->hasError('berat')) ? 'is-invalid' : ''; ?> " id="berat" name="berat">
                        <div class="invalid-feedback">
                            <?= $validation->getError('berat'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_buka" class="col-sm-2 col-form-label">Tanggal Buka</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control  <?= ($validation->hasError('tgl_buka')) ? 'is-invalid' : ''; ?> " id="tgl_buka" name="tgl_buka">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tgl_buka'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_tutup" class="col-sm-2 col-form-label">Tanggal Tutup</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control  <?= ($validation->hasError('tgl_tutup')) ? 'is-invalid' : ''; ?> " id="tgl_tutup" name="tgl_tutup">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tgl_tutup'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Pilih Gambar</label>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>