<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container">
    	<div class="row justify-content-center">
		    <div class="col-lg-9 mt-5">
		        <div class="pb-3">
		            <div class="section card bg-dark shadow-lg">
		                <div class="card-header bg-gradient">
                            <h3 class="card-title text-center">Register</h3>
                        </div>
		                <div class="card-body">
                            <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                            <?php endif; ?>
		                    <form role="form" action="<?php echo e(route('post.register')); ?>" method="POST">
		                        <?php echo csrf_field(); ?>
		                        <div class="form-group mb-2">
		                            
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="far fa-user"></i></span>
        		                              <input type="text" name="nama" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="off" value="<?php echo e(old('nama')); ?>" placeholder="Nama">
        		                    </div>
		                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                        </div>
		                        <div class="form-group mb-2">
		                            
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="far fa-user"></i></span>
		                            <input type="text" name="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="off" value="<?php echo e(old('username')); ?>" placeholder="Username">
		                            </div>
		                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                        </div>
		                        <div class="form-group mb-2">
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="fa fa-whatsapp"></i></span>
		                            <input type="text" name="whatsapp" class="form-control <?php $__errorArgs = ['whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autocomplete="off" value="<?php echo e(old('whatsapp')); ?>" placeholder="WhatsApp number [62xxxxxxxx]">
		                            </div>
		                            <?php $__errorArgs = ['whatsapp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                        </div>
		                        <div class="form-group mb-2">
		                           
		                            <div class="input-group">
		                                <span class="input-group-text">
		                                    <i class="fas fa-lock"></i></span>
		                            <input type="password" name="password" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" required>
		                            </div>
		                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                        </div>
		                        <div class="form-check mb-4">
                                    <input required="" type="checkbox" name="tac" id="tac" class="form-check-input">
                                    <label for="tac" class="form-check-label">
                                    <i>
                                    I agree to <a href="#" target="_blank">Terms
                                    and conditions</a>
                                    </i>
                                    </label>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
        		                        <button type="submit" name="tombol" value="submit" class="btn btn-primary float-right"><i class="fas fa-sign-in-alt"></i> Daftar</button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/game.nvdstoreindonesia.com/system/resources/views/components/register.blade.php ENDPATH**/ ?>