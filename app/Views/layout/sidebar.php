<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="<?= base_url('/dashboard');?>" data-toggle="nav-profile">
                    <div class="image">
                        <img src="../assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?= session()->get('namalengkap'); ?>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="<?= base_url('auth/lihatprofile');?>"><i class="fa fa-user"></i>View Profile</a></li>
                    <li><a href="<?= base_url('auth/logout');?>"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header"><i class="fa fa-th-large"></i> Dashboard</li>
            <li class="has-sub ">
                <!-- <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a> -->
                <!-- <ul class="sub-menu">
                    <li><a href="/dashboard">Dashboard</a></li>
                </ul> -->
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="fas fa-users"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fas fa-balance-scale"></i>
                    <span>Lelang</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?= base_url('auth/lihatbarang');?>">Lihat barang</a></li>
                    <li><a href="<?= base_url('auth/proseslelang');?>">Proses Lelang</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->