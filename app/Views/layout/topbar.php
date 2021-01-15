	<!-- begin header-nav -->
	<ul class="navbar-nav navbar-right">
		<li>
			<form class="navbar-form">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter keyword" />
					<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</li>
		<li class="dropdown navbar-user">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
				<img src="../assets/img/user/user-13.jpg" alt="" />
				<span class="d-none d-md-inline"><?= session()->get('namalengkap'); ?></span> <b class="caret"></b>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="<?= base_url('auth/editprofile');?>" class="dropdown-item">Edit Profile</a>
				<div class="dropdown-divider"></div>
				<a href="<?= base_url('auth/logout')?>" class="dropdown-item">Log Out</a>
			</div>
		</li>
	</ul>
	<!-- end header navigation right -->
	</div>
	<!-- end #header -->