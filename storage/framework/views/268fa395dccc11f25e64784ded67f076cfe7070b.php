
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
    
.table-auto	{
    table-layout: auto;
}
.table-fixed	{
    table-layout: fixed;
}
    
    

.bg-red-800	{
    background-color: rgb(153 27 27);
}

.bg-yellow-500	{
    background-color: rgb(234 179 8);
    
}

.bg-sky-600	{
    background-color: rgb(2 132 199);
    
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

                  
                    <div class="pt-3 relative">
                        
                    	<div class="container relative text-left" style="padding-top: 80px; padding-bottom: 5rem;">
                    	     
                    			<div class="col-md-11 text-white ">
                    				<h2 class="text-[24px] sm:text-4xl">Lacak pesanan kamu dengan nomor invoice!</h2>
                    				 <p class="mt-3 max-w-full">Pesanan Kamu tidak terdaftar meskipun Kamu yakin telah memesan? Harap tunggu 1-5 menit. Tetapi jika pesanan masih belum muncul, Kamu bisa <a href="<?php echo e(!$config ? '' : $config->wa_admin); ?>" class="text-red-600 no-underline">Hubungi Kami</a>.</p>
                    				  <form action="<?php echo e(route('cari.post')); ?>" method="POST">
                    				    
                    				    <?php echo csrf_field(); ?>
                    					  <div class="mb-3 mt-3">
                    						<label class="mb-2">No. Transaksi :</label>
                    						<input type="text" name="id" placeholder="INVxxxxxxx" class="form-control bg-gray-300 focus:!bg-white rounded-md border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-[#2D2EAD] focus:ring-2 focus:ring-[#2D2EAD]" id="id" autocomplete="off" required>
                    					</div>
                    					<button type="submit" name="submit" value="submit" class="btn btn-primary fs-16"><i class="fa fa-search mr-2"></i>Cari Transaksi</button>
                    				</form>
                    			 </div>
                    			 </div>
                    <div class="absolute inset-0  -z-10" style="padding-top: 1.25rem;">
                       <div class="area ">
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
                            </ul>
                        </div>
                    </div>
                    </div>
                      
            
          
            	
            	<div class="container">
            	    <div class="row">
                       <div class="col-md-8" style="padding-top: 80px;">
            			<h4 class="mb-3 text-[24px] ">10 Transaksi Terakhir</h4>
            			<p class="text-white/70 fs-16 mb-4 ">Ini adalah 10 transaksi terakhir dari semua pengguna. Informasi yang tersedia mencakup tanggal transaksi, no transaksi, nomor ponsel, harga, dan status.</p>
            		</div>
            		
          <div class="space-y-4">
              <div class="css-6qw8qz rounded-lg overflow-x-auto">
                 <table id="tblBuyer" class="min-w-full table text-white">
              <thead>
                <tr>
                  <th scope="col" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Date</th>
                  <th scope="col" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Invoice</th>
                  <th scope="col" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Item</th>
                  <th scope="col" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Price</th>
                  <th scope="col" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Status</th>
                </tr>
              </thead>
    <tbody>
    <?php $__currentLoopData = $pembelians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pembelian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $status = $pembelian->status;
            if ($status == 'Success') {
                $label = 'bg-red-800';
            } elseif ($status == 'Pending') {
                $label = 'bg-yellow-500';
            } elseif ($status == 'Process') {
                $label = 'bg-sky-600';
            } else {
                $label = 'danger';
            }
        ?>
        <tr>
            <td scope="row" class="whitespace-nowrap px-3 py-3.5 text-left text-xs"><?php echo e($pembelian->created_at); ?></td>
            <td scope="row" class="whitespace-nowrap px-3 py-3.5 text-left text-xs"><?php echo e(substr($pembelian->order_id, 0, (strlen($pembelian->order_id) / 2) - 2) . '****' . substr($pembelian->order_id, (strlen($pembelian->order_id) / 2) + 2)); ?></td>
            <td scope="row" class="whitespace-nowrap px-3 py-3.5 text-left text-xs"><?php echo e($pembelian->layanan); ?></td>
            <td scope="row" class="whitespace-nowrap px-3 py-3.5 text-left text-xs">Rp <?php echo e(number_format($pembelian->harga, 0, ',', '.')); ?></td>
            <td scope="row" ><span class="text-white/70 whitespace-nowrap rounded-md px-2 py-1 text-xs <?php echo e($label); ?>"><?php echo e($status); ?></span></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div>
</div>



<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/susepamz/md.waidn.my.id/system/resources/views/components/cari.blade.php ENDPATH**/ ?>