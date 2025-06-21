

<?php $__env->startSection("content"); ?>

<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<style>
    .select-games {
    width: 100%;
    max-width: none;
    margin-bottom: 64px;
}

.select-games {
    max-width: 320px;
    margin-bottom: -20px;
    position: relative;
    z-index: 1;
}
</style>
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1">
            <div class="col-12">
                <div class="card bg-dark shadow ">
                    <div class="card-header">
                        <!--<div class="select-games">
                        <select class="form-select" name="kategori">
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div> -->
                        <h5 class="card-title text-white mt-2">Daftar Harga</h5>
                    </div>
                    <div class="card-body">
                      
                        <div class="table-responsive">
                            <table class="table table-striped table-dark table-bordered table-hover"  style="font-size: 12px !important; margin-top: 0px; text-align: left">
                                <thead>
                                    <tr>
                                        <th>&nbsp&nbsp&nbsp&nbsp Game</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Item</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Guest</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Platinum</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Gold</th>
                                        <th>&nbsp&nbsp&nbsp&nbsp Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            if($data->status == "available"){
                                                $label_pesanan = "success";
                                            }else{
                                                $label_pesanan = "danger";
                                            }
                                        ?>
                                        <tr>
                                            <th value="<?php echo e($kategori->id); ?>" scope="row"><?php echo e($data->nama_kategori); ?></th>
                                            <td><?php echo e($data->layanan); ?></td>
                                            <td>Rp. <?php echo e(number_format($data->harga,0,',','.')); ?></td>
                                            <td>Rp. <?php echo e(number_format($data->harga_platinum,0,',','.')); ?></td>
                                            <td>Rp. <?php echo e(number_format($data->harga_gold,0,',','.')); ?></td>
                                            <td>
                                                <span class="badge bg-<?php echo e($label_pesanan); ?>"><?php echo e($data->status); ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.table').DataTable();
    });
</script>

<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/demo3.nvdstoreindonesia.com/system/resources/views/components/pricelist.blade.php ENDPATH**/ ?>