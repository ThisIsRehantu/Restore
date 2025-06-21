

<?php $__env->startSection("content"); ?>
<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<div class="wrapper pt-5"
<br>
    <br>
    <br>
      <div class="container">
    <div class="main-content">
        <section class="section">
            <h2 class="section-title">TOP 10 RANK</h2>

            <div class="section-body">
                <div class="row">

                    <div class="col-12">
                        
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card bg-dark shadow cekstore-rounded-sedang ">
                                            <div class="card-header cekstore-rounded-sedang  bg-cekstore">
                                                <h4 class="card-title text-white mt-2"><i class="fas fa-trophy"> </i> Top 10 Pesanan Bulan Ini</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark table-bordered table-responsive">
                                                <tr>
                                                    <th>Peringkat</th>
                                                    <th>Nama</th>
                                                    <th>Total</th>
                                                </tr>
                                                <?php $__currentLoopData = $totalOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $totalOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($key < 1): ?>
                                                        <?php continue; ?>
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration - 1); ?></td>
                                                        <td><?php echo e($totalOrder->username); ?></td>
                                                        <td><?php echo e($totalOrder->total_order); ?> Pesanan</td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card bg-dark shadow cekstore-rounded-sedang">
                                        <div class="card-header cekstore-rounded-sedang  bg-cekstore">
                                                <h4 class="card-title text-white mt-2"><i class="fas fa-trophy"> </i> Top 10 Layanan Bulan Ini</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark  table-bordered table-responsive">
                                                        <tr>
                                                            <th>Peringkat</th>
                                                            <th>Nama</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        <?php $__currentLoopData = $toplayanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $toplayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <Td><?php echo e($loop->iteration); ?></Td>
                                                            <Td><?php echo e($toplayanan->layanan); ?></Td>
                                                            <Td><?php echo e($toplayanan->top_layanan); ?> Pesanan</Td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    </table>
                                                </div>
                                            
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    </section>
    </div>
<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tridisos/topup.tridisosmed.com/system/resources/views/components/topten.blade.php ENDPATH**/ ?>