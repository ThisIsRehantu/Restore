 
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
			<div class="px-3 pt-3 mb-3">
			    <div class="px-3">
					<h2>Check your Whatsapp</h2>
					<p class="mb-3">Please input OTP code from your message.</p>
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
				<form action="<?php echo e(url('/verify/otp')); ?>" method="POST" class="my-form px-3">
				    <?php echo csrf_field(); ?>
					<div class="mb-3 row otp px-3">
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-1" name="otp[]" onkeyup="input_otp('1', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-2" name="otp[]" onkeyup="input_otp('2', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-3" name="otp[]" onkeyup="input_otp('3', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-4" name="otp[]" onkeyup="input_otp('4', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-5" name="otp[]" onkeyup="input_otp('5', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-6" name="otp[]" onkeyup="input_otp('6', this.value);" placeholder="" required></div>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="otp">Confirm</button>
					</div>
				</form>
			</div>
		</div>









<?php $__env->startPush('custom_script'); ?>


<script>
			function input_otp(ke, otp) {
				if (ke < 6) {
					if ($("#otp-" + ke).val().length == 1) {
						var next = parseInt(ke) + 1;

						$("#otp-" + next).focus();
					}
				} else {
					if ($("#otp-6").val().length > 1) {
						$("#otp-6").val(otp.slice(1, 2));
					}
				}
			}
		</script>
		
    


<?php $__env->stopPush(); ?>




<?php echo $__env->make('../footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/v2.nvdstoreindonesia.com/system/resources/views/components/verifyotp.blade.php ENDPATH**/ ?>