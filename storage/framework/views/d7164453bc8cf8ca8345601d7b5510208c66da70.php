<div>

<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Menu</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item">Portfolio</li>
                    <li class="breadcrumb-item active">Menu</li>
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
                <h4 class="card-title">Add Menu</h4>
                <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
            </div>
            <div class="card-body">
                <!--success or error alert-->
                
                
                <!--form starts-->
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label"> Page Name</label>
                            <input type="text" class="form-control" id="" wire:model="name" placeholder="Name">
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

            
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label"> Route Name</label>
                            <select name="selected_route" wire:model="link" id="selected_route"  class="form-control">
                             <option value="" >Select page</option>
                           
                                <?php $__currentLoopData = Route::getRoutes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if(str_starts_with($route->getName(), 'home.') ): ?>
                                    <?php
                                        $routeName   = ucwords(str_replace('home.','',$route->getName() )  )
                                     ?>
<option value="<?php echo e($route->getName()); ?>" 
<?php if(in_array($route->getName(), [ 
'home.gallery',
'home.gallery_detail',
])): ?> disabled <?php endif; ?>
class="form-control"><?php echo e(str_replace('_' , ' ',$routeName)); ?></option>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['link'];
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
                            <input type="number" class="form-control" id="" wire:model="sort" placeholder="Sorting Order" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57">
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
                            <select wire:model="status" class="form-select">
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
            

                   <div>
                    <button type="submit" wire:loading.attr="disabled"  class="btn btn-primary w-md" wire:click="addMenu">Submit</button>
                   
                </div>
                <div wire:loading wire:target="addMenu">
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
                <h4 class="card-title">Manage Menus</h4>
                <p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
                <div class="col-md-3 float-end">
                    <div class="form-group">

                        <div class="mb-3">
                            <label class="form-label">Search</label>
                            <input type="Search" class="form-control"  wire:model="search" placeholder="Search...">
                             <?php $__errorArgs = ['Search'];
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
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped datatable--">
                        <thead>
                            <tr>
                                <th> Name</th>
                               
                                <th> Route Name</th>
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
                               
                                <td><?php echo e($record->link ?? ''); ?></td>
                                <td><?php echo e($record->sort_id ?? ''); ?></td>

                                <td>
                                    <?php if($record->status  == "Active"): ?>
                                    <a href="#" wire:click="inactive(<?php echo e($record->id); ?>)">
                                        <span class="badge badge-soft-success" > <?php echo e($record->status ?? ''); ?></span>
                                    </a> 
                                    <?php else: ?>
                                   <a href="#" wire:click="active(<?php echo e($record->id); ?>)">
                                   <span class="badge badge-soft-danger" >  <?php echo e($record->status ?? ''); ?> </span>
                            </a> 
                                </td>
                               
                            </td>

                               <?php endif; ?>
                                    <td>
                                    <a href="<?php echo e(url('/admin/edit/menu')); ?>/<?php echo e($record->id); ?>" class="text-success me-2" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
                                    <a href="javascript:void(0)" class="text-danger me-2" title="Delete" wire:click="delete(<?php echo e($record->id); ?>)"><i class="fa fa-times fa-fw fa-lg"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                     <tr>
                     <td colspan="4"> Record Not Found</td>
                    
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



<?php /**PATH /home/sirsorg/public_html/resources/views/livewire/backend/menu/view-menu.blade.php ENDPATH**/ ?>