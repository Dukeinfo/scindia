<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Slider</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Slider</li>
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
                            <h4 class="card-title">Add Slider</h4>
                            <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                        </div>
                        <div class="card-body">

                            <form>
                            <!--form starts-->
                            <div class="row">
                            
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Slider Image</label>
                                        <input type="file" class="form-control" id="" wire:model="image" multiple  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                    
                                        <img src="<?php echo e(asset('admin_assets/images/no-img.jpg')); ?>" alt=".." class="border mt-2" width="100" height="30%">

                                   
                                        <?php $__errorArgs = ['image.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Sorting Order#</label>
                                        <input type="number" class="form-control" id="" wire:model="sort" placeholder="Number" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57">
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
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select wire:model="status" class="form-select">
                                            <option value="">Select</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
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
                                
                            </div>
                                <div class="col-md-2" >
                                    <div class="mb-3" >
                                        <label class="form-label">&nbsp;</label><br>
                                        <button type="button" wire:loading.attr="disabled" wire:target="addSlider"   wire:click="addSlider" class="btn btn-primary w-md" >Submit</button>
                                    </div>
                                     <div wire:loading wire:target="addSlider">
                                        <img src="<?php echo e(asset('loading.gif')); ?>" width="30" height="30" class="m-auto mt-1/4">

                                     </div>
                                </div>

                           
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Manage Slider</h4>
                            <p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>Slider Image</th>
                                            <th>Sorting Order#</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($records) && count($records)>0 ): ?>                      
                                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td>
                                            <?php
                                           
$thumb = !empty($record->image) ?  getThumbnail($record->thumbnail) : url('admin_assets/images/no-img.jpg');
?>                                      
<img src="<?php echo e($thumb); ?>" alt="" class="border" width="100" height="70">

                                                
                                            </td>
                                           
                                            <td><?php echo e($record->sort_id ?? ''); ?></td>
                                            <td>
<?php if($record->status  == "Active"): ?>
        <span class="badge badge-soft-success"><?php echo e($record->status  ?? ''); ?></span></td>
         <?php else: ?>
       <span class="badge badge-soft-danger"><?php echo e($record->status  ?? ''); ?></span></td>
<?php endif; ?></td>
                                            <td>
                                                <a href="<?php echo e(url('/admin/edit/slider')); ?>/<?php echo e($record->id); ?>" class="text-success me-2" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
                                                <a href="javascript:void(0)" class="text-danger me-2" title="Delete"><i class="fa fa-times fa-fw fa-lg" wire:click="delete(<?php echo e($record->id); ?>)"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                 <tr>
                                 <td colspan="7"> Record Not Found</td>
                                
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
<?php /**PATH C:\xampp\htdocs\shiva-live\resources\views/livewire/backend/slider/view-home-slider.blade.php ENDPATH**/ ?>