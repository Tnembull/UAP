<?= $this->extend('layout/page_register'); ?>
<?= $this->section('content'); ?>
<!-- begin register-content -->
<div class="register-content">
<?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('auth/save')?>" method="POST" class="margin-bottom-0">
        <label class="control-label">Name Lengkap <span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" required />
            </div>
        </div>
        <label class="control-label">Username<span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="text" name="username" class="form-control" placeholder="Username" required />
            </div>
        </div>
        <label class="control-label">Email <span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="text" name="email" class="form-control" placeholder="Email address" required />
            </div>
        </div>
        <label class="control-label">Password <span class="text-danger">*</span></label>
        <div class="row m-b-15">
            <div class="col-md-12">
                <input type="password" name="password" class="form-control" placeholder="Password" required />
            </div>
        </div>
        <div class="register-buttons">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
        <div class="m-t-20 m-b-40 p-b-40">
            Already a member? Click <a href="/login">here</a> to login.
        </div>
        <hr />
        <p class="text-center">
            &copy; E-Auction All Right Reserved 2020
        </p>
    </form>
</div>
<!-- end register-content -->
</div>
<!-- end right-content -->
</div>
<!-- end register -->

<?= $this->endSection(); ?>