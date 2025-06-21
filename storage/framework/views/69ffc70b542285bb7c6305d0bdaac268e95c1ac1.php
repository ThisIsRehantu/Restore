<?php $__env->startSection("content"); ?>
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1 justify-content-center">
            <div class="col-md-6">
                <div class="card mt-1 bg-dark shadow-lg mt-1 text-white">
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <form id="editProfile" action="<?php echo e(url('/user/edit/profile')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row mt-2">
                            <div class="col-4"><strong>Name</strong></div>
                            <div class="col"><input placeholder="name" type="text" name="name" value="<?php echo e(Auth()->user()->name); ?>" class="form-control"></div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-4"><strong>Username</strong></div>
                            <div class="col"><input placeholder="username" type="text" name="username" value="<?php echo e(Auth()->user()->username); ?>" class="form-control"></div>
                            </div>
                            <div class="row mt-2">
                            <div class="col-4"><strong>Password</strong></div>
                            <div class="col"><input type="password" name="password" id="password" placeholder="(Enter if want to changed)" class="form-control"></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-12 text-end">
                            <button class="btn btn-primary" type="submit">Edit Profile</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/demo4.nvdstoreindonesia.com/system/resources/views/components/editprofile.blade.php ENDPATH**/ ?>