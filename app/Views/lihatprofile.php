<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
<!-- begin #content -->
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Lihat Profile</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Lihat Profile<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="card text-center">
        <div class="card-header">
            <?= session()->get('namalengkap'); ?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary"></a>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
        </div>
    </div>
</div>
    <!-- end row -->
</div>
<!-- end #content -->
<?= $this->endSection(); ?>