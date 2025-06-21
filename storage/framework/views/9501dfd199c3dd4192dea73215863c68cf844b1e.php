
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .form-check-input:focus {
        border-color: #fe6c17;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
        outline: 0;
    }

    .form-check-input:checked {
        background-color: #fe6c17;
        border-color: #fe6c17;
    }

    .btn-primary {
        background-color: #3571e2;
        border-color: #3571e2;
        cursor: pointer;
        color: #fff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #3571e2;
        border-color: #3571e2;
        box-shadow: 0 0 0 0.2rem rgba(255, 168, 38, 0.5);
    }

    #searchProds {
        width: 60px;
        transition: width .5s ease
    }

    #searchProds:focus {
        width: 240px
    }
    
    label {
    color: #ced4da;
    font-size: .75rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px;
}
    
    .form-control {
    border: 1px solid #ced4da;
    background-color: rgba(0, 0, 0, 0);
    color: #000 !important;
}

   .area {
    padding-bottom: 30px;
    margin-bottom: 30px;
}
.carousel {
    z-index: 1;
}
.area, .circles {
    width: 100%;
    height: 100%;
}
.circles {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    background: linear-gradient(244deg, #e0e4e6, transparent);
    max-height: 588px;
}
.circles li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: hsla(0, 0%, 100%, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
}
.circles li:first-child {
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}
.circles li:nth-child(2) {
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}
.circles li:nth-child(3) {
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}
.circles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}
.circles li:nth-child(5) {
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}
.circles li:nth-child(6) {
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}
.circles li:nth-child(7) {
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}
.circles li:nth-child(8) {
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 10s;
    animation-duration: 45s;
}
.circles li:nth-child(9) {
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}
.circles li:nth-child(10) {
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}
@keyframes  animate {
    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    to {
        transform: translateY(-1000px) rotate(2turn);
        opacity: 0;
        border-radius: 50%;
    }
}
.area {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden; 
}
</style>


<?php if(session('error')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
toastr.error('<?php echo e(session('error')); ?>');
</script>
<?php elseif(session('success')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
toastr.success('<?php echo e(session('success')); ?>');
</script>
<?php endif; ?>
<div class="wrapper pt-4">
    <br>
    
                    <div class="container">
                    	<div class="row" style="position: relative;z-index: 1;">
                    		<div class="col-md-7">
                    			<div class="card-cek">
                    				<h1>Lacak pesanan kamu</h1>
                    				<p>Pesanan Kamu tidak terdaftar meskipun Kamu yakin telah memesan? Harap tunggu 1-5 menit. Tetapi jika pesanan masih belum muncul, Kamu bisa Hubungi Kami.</p>
                    				<form action="<?php echo e(route('cari.post')); ?>" method="POST">
                    				    <?php echo csrf_field(); ?>
                    					                    					<div class="mb-3">
                    						<label>No. Transaksi</label>
                    						<input type="text" name="id" placeholder="ORDERxxxxxxx" class="form-control" id="id" autocomplete="off" required>
                    					</div>
                    					<button type="submit" name="submit" value="submit" class="btn btn-primary fs-16"><i class="fa fa-search mr-2"></i>Cari Transaksi</button>
                    				</form>
                    			</div>
                    	</div>
                    	</div>
                    <div class="absolute inset-0 -z-10">
         <div class="area pt-3">
      <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
    </ul>
                </div>
            </div>
            </div>
            </div>
            	
						
                
    
    
    
    
 
      <!-- <div class="col-lg-6 mx-auto mb-5">
        <div class="card bg-dark shadow creativeux-rounded-sedang">
          <div class="card-header creativeux-rounded-sedang  bg-creativeux">
            <h5 class="card-title text-white mt-2"><i class="fa fa-trophy" aria-hidden="true"></i> 10 Pesanan terakhir</h5>
          </div>
          <div class="card-body table-responsive">
            <table id="tblBuyer" class="table table-striped table-dark  table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Invoice</th>
                  <th>Item</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>
    <tbody>
    <?php $__currentLoopData = $pembelians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pembelian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $status = $pembelian->status;
            if ($status == 'Success') {
                $label = 'success';
            } elseif ($status == 'Pending') {
                $label = 'warning';
            } elseif ($status == 'Progress') {
                $label = 'primary';
            } else {
                $label = 'danger';
            }
        ?>
        <tr>
            <td><?php echo e($pembelian->created_at); ?></td>
            <td><?php echo e(substr($pembelian->order_id, 0, (strlen($pembelian->order_id) / 2) - 2) . '****' . substr($pembelian->order_id, (strlen($pembelian->order_id) / 2) + 2)); ?></td>
            <td><?php echo e($pembelian->layanan); ?></td>
            <td>Rp <?php echo e(number_format($pembelian->harga, 0, ',', '.')); ?></td>
            <td><span class="badge btn-<?php echo e($label); ?>"><?php echo e($status); ?></span></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div> -->




<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/v2.nvdstoreindonesia.com/system/resources/views/components/cari.blade.php ENDPATH**/ ?>