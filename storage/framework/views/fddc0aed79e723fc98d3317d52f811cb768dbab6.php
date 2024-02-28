<div>

<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Category</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item">Portfolio</li>
                        <li class="breadcrumb-item active">Category</li>
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
                    <h4 class="card-title">Add Category</h4>
                    <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                </div>
                <div class="card-body">
                    <!--success or error alert-->
                    <!--form starts-->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control"  wire:model="name" placeholder="Add Category">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                      
                   
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">Sorting Order#</label>
                                <input type="number" class="form-control"  wire:model="sort" placeholder="Order NUmber">
                                 <?php $__errorArgs = ['sort'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" wire:model="status">
                                        <option value="">Select</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive </option>
                                </select>
                                 <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div >
                            <button wire:loading.attr="disabled" type="submit" wire:click="addCategory" class="btn btn-primary w-md">Submit</button>
                        </div>
                         <div wire:loading wire:target="addCategory">
                                <img src="<?php echo e(asset('loading.gif')); ?>" width="30" height="30" class="m-auto mt-1/4">

                             </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom py-3">
                    <h4 class="card-title">Manage Categories</h4>
                    <p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>Category </th>
                                    <th>Sorting Order#</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                  <?php if(isset($records) && count($records)>0 ): ?>                      
                   <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>
                                    <td><?php echo e($record->name ?? ''); ?></td>
                                    <td><?php echo e($record->sort_id ?? ''); ?></td>
                                    <td>
<?php if($record->status  == "Active"): ?>
<span class="badge badge-soft-success" wire:click="active(<?php echo e($record->id); ?>)"><?php echo e($record->status  ?? ''); ?></span></td>
 <?php else: ?>
 <a href="" wire:click="active(<?php echo e($record->id); ?>)">
    <span class="badge badge-soft-danger"  ><?php echo e($record->status  ?? ''); ?></span></td>
</a>
<?php endif; ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit_blog_category',['id' => $record->id])); ?>" class="text-success me-2" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
                                        <a href="javascript:void(0)" class="text-danger me-2" title="Delete"><i class="fa fa-times fa-fw fa-lg" wire:click="delete(<?php echo e($record->id); ?>)"></i></a>
                                    </td>
                                </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?>
                         <tr>
                         <td colspan="5"> Record Not Found</td>
                        
                         </tr>
                         <?php endif; ?>      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


    
</div>
<!-- container-fluid -->
</div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel-livewire\resources\views/livewire/backend/blog/add-blog-category.blade.php ENDPATH**/ ?>