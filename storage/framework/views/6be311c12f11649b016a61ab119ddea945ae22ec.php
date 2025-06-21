 
<?php $__env->startSection("content"); ?>

<?php echo $__env->make('../navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .accordion-button {
            box-shadow: none !important;
        }
        .btn.disabled, .btn:disabled, fieldset:disabled {
            background: #8ba4b1;
            border-color: #8ba4b1;
        }
        .product .box {
            margin-bottom: 40px;
        }
</style>


<div class="content-body">
			
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
			    <div class="px-3">
					<h2>Forgot your password?</h2>
					<p class="py-3">You will get the otp code via whatsapp</p>
				</div>
				<?php if(session('error')): ?>
			    
			    <div class="alert alert-danger">
			       <ul>
			           <li><?php echo e(session('error')); ?></li>
			       </ul>
			    </div>
			    
			    <?php endif; ?>
			    <?php if(session('success')): ?>
			    
			    <div class="alert alert-success">
			       <ul>
			           <li><?php echo e(session('success')); ?></li>
			       </ul>
			    </div>
			    
			    <?php endif; ?>
			    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
			    <form action="<?php echo e(url('/forgot-password')); ?>" method="POST" class="my-form px-3">
				    <?php echo csrf_field(); ?>					
					<div class="mb-3">
						<input type="number" class="form-control" placeholder="08xxx" name="phone" autocomplete="off" required>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="submit">Request Reset</button>
					</div>
				</form>
			</div>
		</div>
		
        









<?php $__env->startPush('custom_script'); ?>



<?php $__env->stopPush(); ?>



<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/v2.nvdstoreindonesia.com/system/resources/views/components/forgotpassword.blade.php ENDPATH**/ ?>