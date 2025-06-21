



<?php $__env->startSection('content'); ?>
    <!-- start page title -->

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <h4 class="page-title">Setelan Paket</h4>

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item active">/paket</li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

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

    <div class="row row-cols-1">
        <div class="col">
            <div class="card">

                <div class="card-body">

                    <h4 class="mb-3 header-title mt-0">Buat Nama Paket</h4>

                    <form action="<?php echo e(route('paket.store')); ?>" method="POST">

                        <?php echo csrf_field(); ?>
                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Nama</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="nama" placeholder="Masukkan Nama Paket" value="<?php echo e(old('nama')); ?>">
                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">

                <div class="card-body">

                    <h4 class="mb-3 header-title mt-0">Tambah Layanan Paket</h4>

                    <form action="<?php echo e(route('paket-layanan.store')); ?>" method="POST">

                        <?php echo csrf_field(); ?>



                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label" for="example-fileinput">Paket</label>

                            <div class="col-lg-10">

                                <select class="form-control <?php $__errorArgs = ['paket_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="paket_id">
                                    <option value="" selected disabled>--Pilih Paket--</option>
                                    <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($paket->id); ?>"
                                            <?php echo e(old('paket_id') == $paket->id ? 'selected' : ''); ?>>
                                            <?php echo e($paket->nama); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['paket_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </select>

                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">

                                        <?php echo e($message); ?>


                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>

                        </div>



                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Kategori</label>

                            <div class="col-lg-10">

                                <select class="form-select" onchange="get_layanan(this.value)">
                                    <option value="" disabled selected>--Pilih Kategori--</option>
                                    <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                            </div>

                        </div>
                        <div class="mb-3 row">

                            <label class="col-lg-2 col-form-label">Layanan</label>

                            <div class="col-lg-10">

                                <select class="form-select <?php $__errorArgs = ['layanan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="layanan_id[]"
                                    id="layanan" size="10" multiple>
                                <option value="" selected disabled>Pilih Kategori Terlebih Dahulu</option>
                                </select>
                                <small>Jika buka web admin di pc silahkan tekan <strong>CTRL</strong> dan klik 1 per 1 layanan/produknya</small>
                                <?php $__errorArgs = ['layanan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="header-title mt-0 mb-1">Semua Paket</h4>

                    <div class="table-responsive">

                        <table class="table m-0">

                            <thead>

                                <tr>

                                    <th style="width:50px">#</th>

                                    <th>Paket</th>

                                    <th>Layanan</th>

                                    <th style="width: 200px">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($paket->nama); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#kategoriModal<?php echo e($paket->id); ?>"><?php echo e($paket->layanan->count()); ?> Layanan</button>
                                        </td>
                                        <td class="d-flex gap-2">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#editModal<?php echo e($paket->id); ?>">Edit</a>
                                            <form action="<?php echo e(route('paket.destroy', $paket->id)); ?>" method="POST"
                                                id="deleteForm<?php echo e($paket->id); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="confirmDelete(<?php echo e($paket->id); ?>)">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    <?php echo e($pakets->links('vendor.pagination.simple-tailwind')); ?>

                </div>

            </div>



        </div>

    </div>

    <?php $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editModal<?php echo e($paket->id); ?>" tabindex="-1"
            aria-labelledby="editModalLabel<?php echo e($paket->id); ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel<?php echo e($paket->id); ?>">Edit
                            Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Edit -->
                        <form action="<?php echo e(route('paket.update', $paket->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <label for="editNama<?php echo e($paket->id); ?>" class="form-label">Nama Paket</label>
                                <input type="text" class="form-control" id="editNama<?php echo e($paket->id); ?>"
                                    name="nama" value="<?php echo e($paket->nama); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="kategoriModal<?php echo e($paket->id); ?>" tabindex="-1"
            aria-labelledby="kategoriModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kategoriModalLabel"><?php echo e($paket->nama); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Layanan Diamond</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $paket->layanan->groupBy('kategori_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td class="border-end"><?php echo e($l->first()->kategori->nama); ?></td>
                                    <td class="border-end">
                                        <ul>
                                            <?php $__currentLoopData = $l; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="d-flex justify-content-between">
                                                <span><?php echo e($item->layanan); ?></span>
                                                <form action="<?php echo e(route('paket-layanan.destroy',$item->id)); ?>" method="post" id="mitsuki<?php echo e($item->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <a href="#" onclick="$('#mitsuki<?php echo e($item->id); ?>').submit()">Hapus</a>
                                                </form>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.table').DataTable({

                "paging": false,

                "info": false

            });

        });

        function get_layanan(kategori_id) {
            let layanan = $('#layanan')
            $.ajax({
                url: "<?php echo e(route('paket-layanan.get-layanan')); ?>",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
                },
                data: {
                    kategori_id: kategori_id
                },
                beforeSend: function() {
                    layanan.html('<option value="">Mengambil Layanan...</option>');
                },
                success: function(response) {
                    var data = response.data;
                    layanan.empty();
                    $.each(data, function(index, item) {
                        layanan.append('<option value="' + item.id + '">' + item.layanan +
                            '</option>');
                    });
                },
                error: function(response) {
                    let res = JSON.parse(response.responseText)
                    layanan.html('<option value="">' + res.message + '</option>');
                }
            });
        }

        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nvdstor2/kenziistore.com/system/resources/views/components/admin/paket/index.blade.php ENDPATH**/ ?>