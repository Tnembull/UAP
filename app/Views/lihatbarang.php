<?= $this->extend('layout/page_layout'); ?>
<?= $this->section('content'); ?>
<!-- begin #content -->
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Lihat Barang</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">lihat Barang<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        
            <tr>
                <th></th>
                <th>Foto</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0;
            foreach ($barang as $b) : $no++; ?>
            <tr>
                <th><?= $no;?></th>
                <td><img src="/assets/image/<?= $b['foto'];?>" width="10%"></td>
                <td><?= $b['nama_barang'];?></td>
                <td><?= $b['harga_awal'];?></td>
                <td><?= $b['berat'];?></td>
                <td>
                <form action="/auth/lihatbarang/<?= $b['id'];?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');"><i class="fas fa-trash"></i></button>
                                        </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
        
        <tr>
                <th></th>
                <th>Foto</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>action</th>
            </tr>
           
        </tfoot>
    </table>
    <!-- end row -->
</div>
<!-- end #content -->
<?= $this->endSection(); ?>