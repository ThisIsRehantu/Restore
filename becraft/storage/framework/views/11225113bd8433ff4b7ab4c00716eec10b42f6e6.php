<?php $__env->startSection('custom_style'); ?>


<style>
    .accordion-button{box-shadow:none!important}
    .btn:disabled{background:#8ba4b1;border-color:#8ba4b1}
    
    .box-profile{margin-top:-270px}
    .box-profile .body{border-radius:24px;height:425px;box-shadow:0 10px 15px -3px rgba(0,0,0,.1) , 0 4px 6px -2px rgba(0,0,0,.05)}
    .box-profile .body .img{width:100px;height:100px;border-radius:50%;text-align:center;line-height:100px;border:2px solid #fff;margin:-50px auto;font-size:22px}
    .my-form div small{color:#718096}
</style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if(Auth::check()): ?>
    <?php if(Auth()->user()->role == 'Member' || Auth()->user()->role == 'Platinum' || Auth()->user()->role == 'Gold'): ?>
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/riwayat-pembelian')); ?>"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Pembelian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/deposit')); ?>"><i class="fa-solid fa-wallet"></i> Top Up Saldo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>"><i class="fa-solid fa-user-pen"></i> Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/membership')); ?>"><i class="fa-solid fa-circle-up"></i> Upgrade Membership</a>
          </li>
          <div class="card bg-card mt-2 mb-2">
            <div class="card-body">
                <span class="py-1 px-2 float-end rounded bg-warning text-dark" style="font-size: 12px;"><?php echo e(Str::title(Auth()->user()->role)); ?></span>
                <h5 class="card-title"><?php echo e(Str::title(Auth()->user()->name)); ?></h5>
                <p class="card-text">Rp <?php echo e(number_format(Auth::user()->balance, 0, ',', '.')); ?></p>
             </div>
          </div>
                    
          <div class"mt-2">
                                                          </div>
                        <button onclick="logout();" class="btn bg-white border-0 text-danger mt-2">Logout</button>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
        <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
<?php else: ?>
<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i> Dashboard</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
        <a class="nav-link text-primary" href="<?php echo e(url('/dashboard')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Dashboard</a>
</div>
  </div>
</nav>
<?php endif; ?>
<?php else: ?>

<nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
        <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
    </a>
    <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
    
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                    <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100" onclick="window.location='<?php echo e(url('')); ?>'">
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
		      <div class="offcanvas-body d-lg-none">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass"></i> Cek Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
          </li>
                    </ul>
    </div>
  </div>
    <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
      <div class="navbar-nav ms-auto nav-stacked">
        <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
        <a class="nav-link" href="<?php echo e(url('/cari')); ?>"><i class="fa-solid fa-magnifying-glass""></i> Cek Pesanan</a>
         <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fa-solid fa-arrow-right-to-bracket""></i> Login</a>
</div>
  </div>
</nav>
<?php endif; ?>

<div class="content-body">

			<div class="col-lg-8 mx-auto px-3 py-3 mt-4">
						<h5 class="text-center mb-3">Riwayat Pembelian</h5>
					 <div class="table-responsive">
                            <table class="table m-o table-bordered text-nowrap text-white">
                                <thead class="table-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>Layanan</th>
                                        <th>Target</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                        		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        		<?php if($pesanan->tipe_transaksi !== 'joki'): ?>
                        		<?php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    if($pesanan->status == "Pending" || $pesanan->status == "Menunggu Pembayaran" || $pesanan->status == "Waiting"){
                                    $label_pesanan = 'warning';
                                    }else if($pesanan->status == "Processing" || $pesanan->status == 'Proses'){
                                    $label_pesanan = 'info';
                                    }else if($pesanan->status == "Success" || $pesanan->status == 'Sukses'){
                                    $label_pesanan = 'success';
                                    }else{
                                    $label_pesanan = 'danger';
                                    }
                                    ?>                   		
                        		<tr>
                        			<td><?php echo e($pesanan->order_id); ?></td>
                        			<td><?php echo e($pesanan->layanan); ?></td>
                        			<td><?php echo e($pesanan->user_id.$zone); ?></td>
                        			<td>Rp. <?php echo e(number_format($pesanan->harga, 0, ',', '.')); ?></td>
                        			<td><span class="badge bg-<?php echo e($label_pesanan); ?>"><?php echo e($pesanan->status); ?></span></td>
                        			<td><?php echo e($pesanan->created_at); ?></td>
                        		</tr>
                        		<?php else: ?>
                        		<?php $__currentLoopData = $joki; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jokis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        		<?php if($jokis->order_id == $pesanan->order_id): ?>
                                <?php
                                    $zone = $pesanan->zone != null ? "-".$pesanan->zone : "";
                                    $label_pesanan = '';
                                    if($jokis->status_joki == "Sukses"){
                                    $label_pesanan = 'success';
                                    }else{
                                    $label_pesanan = 'danger';
                                    }
                                    ?>                   		
                        		<tr>
                        			<td><?php echo e($pesanan->order_id); ?></td>
                        			<td><?php echo e($pesanan->layanan); ?></td>
                        			<td><?php echo e($pesanan->user_id.$zone); ?></td>
                        			<td>Rp. <?php echo e(number_format($pesanan->harga, 0, ',', '.')); ?></td>
                        			<td><span class="badge bg-<?php echo e($label_pesanan); ?>"><?php echo e($jokis->status_joki); ?></span></td>
                        			<td><?php echo e($pesanan->created_at); ?></td>
                        		</tr>
                        		<?php endif; ?>
                        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        		<?php endif; ?>
                        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        	</table>
                        </div>
				</div>
			</div>
		</div>
		
        

        






<?php $__env->startPush('custom_script'); ?>



<?php $__env->stopPush(); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gamesho1/gameshop.asia/becraft/resources/views/template/riwayat.blade.php ENDPATH**/ ?>