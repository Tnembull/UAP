<?= $this->extend('layout/page_login'); ?>
<?= $this->section('content'); ?>
<!-- begin login-content -->
<div class="login-content">
    <form action="<?= base_url('auth/masuk');?>" method="GET" class="margin-bottom-0">
        <div class="form-group m-b-15">
            <input type="text" name="email" class="form-control form-control-lg" placeholder="Email Address" required />
        </div>
        <div class="form-group m-b-15">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
        </div>
        <div class="login-buttons">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign me in</button>
        </div>
        <div class="m-t-20 m-b-40 p-b-40">
            Not a member yet? Click <a href="/register">here</a> to register.
        </div>
        <hr />
        <p class="text-center">
            &copy; E-Auction All Right Reserved 2020
        </p>
    </form>
</div>
<!-- end login-content -->
</div>
<!-- end right-container -->
</div>
<!-- end login -->
<?= $this->endSection(); ?>