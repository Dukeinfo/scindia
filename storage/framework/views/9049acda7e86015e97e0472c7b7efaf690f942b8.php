<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Manage Social App links</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Social App  </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title"> Manage Social App </h4>
                        </div>

                        
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>

                                <!-- resources/views/livewire/social-apps-manager.blade.php -->




                        <?php if($isEditing): ?>
                            <h2>Edit Social App</h2>
                        <?php else: ?>
                            <h2>Create Social App</h2>
                        <?php endif; ?>

                            <form wire:submit.prevent="<?php echo e($isEditing ? 'update' : 'store'); ?>" enctype="multipart/form-data">
                                <div class="row g-3">
                                        <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-select" wire:model="category">
                                                <option value="">Select</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Twitter">Twitter </option>
                                                <option value="Instagram">Instagram </option>
                                                <option value="Youtube">Youtube </option>
                                                 <option value="linkedin">linkedin </option>
                                        </select>
                                         <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                  
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" wire:model.defer="link" id="link" class="form-control <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                  
                                  

                                    <div>
                                        <button type="submit" wire:loading.attr="disabled"  class="btn btn-primary w-md"><?php echo e($isEditing ? 'Update' : 'Save'); ?></button>
                                    </div>
                               
                                </div>
                            </form>




                    </div>
                </div>
            </div>
            <!-- end row -->
          
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Update Contact </h4>
                        </div>
                        <div class="card-body">
                        
                            <h2>Social Apps List</h2>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $socialApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialApp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                             <td><?php echo e($socialApp->category); ?></td>
                                            
                                            <td><a href="<?php echo e($socialApp->link); ?>" target="_blank"><?php echo e($socialApp->link); ?></a></td>
                                            
                                            <td>
                                                <button wire:click="edit(<?php echo e($socialApp->id); ?>)" class="btn btn-sm btn-primary">Edit</button>
                                                <button wire:click="delete(<?php echo e($socialApp->id); ?>)" class="btn btn-sm btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            
        </div>
        <!-- container-fluid -->
    </div>
   
</div>
</div><?php /**PATH C:\xampp\htdocs\scindia\resources\views/livewire/backend/footer/social-apps-manager.blade.php ENDPATH**/ ?>