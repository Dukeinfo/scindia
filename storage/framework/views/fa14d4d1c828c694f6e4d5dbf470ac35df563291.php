<div>
 <!-- Add this line to include the CSRF token -->

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Sub Menu</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item">Portfolio</li>
                                <li class="breadcrumb-item active">Sub Menu</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form wire:submit.prevent="addsubMenu">
                <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Add Sub Menu</h4>
                            <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                        </div>
                        <div class="card-body">
                            <!--success or error alert-->
                            
                            
                            <!--form starts-->
                           
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Select menu  <span class="text-danger">*</span></label>
                                        <select class="form-select"   wire:model="menu_id">
                                            <option value=""> Select menu</option>
                                        <?php if(isset($getMenus)): ?>
                                            <?php $__currentLoopData = $getMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($menu->id); ?>"> <?php echo e($menu->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>    
                                            </select>
                                        <?php $__errorArgs = ['menu_id'];
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
                                        <label class="form-label">Submenu  Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"  wire:model="name" placeholder="Submenu  Name">
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

                                
                              
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Sorting Order#  <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Number"  wire:model="sort_id">
                                        <?php $__errorArgs = ['sort_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                     <span class="text-success">Last sort no :<?php echo e($lastUniqueSortingOrder ?? ''); ?></span>
                                    </div>
                                </div>
                     
                         
                            </div>
                     
                            
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Create Through CMS  <span class="text-danger">*</span></label>
                                        <select wire:model="cms" class="form-select"   >
                                            <option value=""> Select menu</option>
                                                <option value="Yes"> Yes</option>
                                                <option value="No"> No</option>

                                            </select>
                                        <?php $__errorArgs = ['cms'];
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
                                        <label class="form-label"> Page Name <?php if($cms == "No"): ?> <span class="text-danger">*</span>     <?php endif; ?> </label>
                                        <select name="selected_route" wire:model="pname"   <?php if($cms == "Yes"): ?> disabled      <?php endif; ?>  id="selected_route"   class="form-control">
                                         <option  value="">Select page (NULL)</option>
                                          
                                            <?php $__currentLoopData = Route::getRoutes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(str_starts_with($route->getName(), 'home.') ): ?>
                                            <?php
                                             $routeName   = ucwords(str_replace('home.','',$route->getName() )  )
                                            ?>
     <option value="<?php echo e($route->getName()); ?>" 
        <?php if(in_array($route->getName(), [ 
            'detail_page',
            'gallery_detail',
        ])): ?> disabled <?php endif; ?>
          class="form-control"><?php echo e(str_replace('_' , ' ',$routeName)); ?></option>
                                           <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['pname'];
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
                                        <label class="form-label">Upload image  <?php if($cms == "Yes"): ?> <span class="text-danger">*</span> <?php endif; ?></label>
                                        <input type="file" class="form-control" <?php if($cms == "No"): ?> disabled     <?php endif; ?>    wire:model="image">
                                        <?php $__errorArgs = ['image'];
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
                                        <label class="form-label">Background Banner Title</label>
                                        <input type="text" class="form-control"  <?php echo e($cms == "No" ? 'disabled' : ''); ?>   wire:model="display_title" placeholder="Display Title">
                                        <?php $__errorArgs = ['display_title'];
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
                                        <label class="form-label">Background Banner Heading</label>
                                        <input type="text" class="form-control"  <?php echo e($cms == "No" ? 'disabled' : ''); ?>   wire:model="display_heading" placeholder="Display Heading">
                                        <?php $__errorArgs = ['display_heading'];
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
                                        <label class="form-label">Background Banner Sub Heading</label>
                                        <input type="text" class="form-control"  <?php echo e($cms == "No" ? 'disabled' : ''); ?>   wire:model="display_subheading" placeholder="Display Sub Heading">
                                        <?php $__errorArgs = ['display_subheading'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                    </div>
                                </div>

                                
                                
                            
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"> Seo Title</label>
                                        <input type="text" class="form-control"  wire:model="seo_title" placeholder="Seo Title">
                                        <?php $__errorArgs = ['seo_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                    </div>
                                </div>
                           
                             
                                    <div class="col-md-12">
                                            <div class="mb-3" wire:ignore>
                                                <label class="form-label"> Seo Description</label>
                                                <textarea wire:model="seo_description" rows="5" cols="5" placeholder="Seo Description here..." class="form-control xtra-cat"></textarea>
                                                <?php $__errorArgs = ['seo_description'];
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
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"> Seo Keywords</label>
                                        <input type="text" class="form-control"  wire:model="seo_keywords" placeholder="Seo Keywords">
                                        <?php $__errorArgs = ['seo_keywords'];
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
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <select wire:model="status" class="form-select">
                                                 <option value="">Select</option>
                                                <option value="Active" selected>Active</option>
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
                                <div>
                                    <button type="submit" wire:loading.attr="disabled"  class="btn btn-primary w-md" >Submit</button>
                                   
                                </div>
                                <div wire:loading wire:target="addsubMenu">
                                    <img src="<?php echo e(asset('loading.gif')); ?>" width="30" height="30" class="m-auto mt-1/4">
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            <!-- end row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Manage Menus</h4>
                            <p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Menu</th>
                                            <th>Image</th>
                                            <th>Parent Sub Menu</th>
                                            <th>Sub Menu</th>
                                           
                                            <th>CMS</th>
                                            <th>Page Name</th>
                                            <th>Sorting Order#</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($records) && count($records)>0 ): ?>                      
                                            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                                        <tr><td>
                                            <?php echo e($record->sort_id ?? ''); ?> 
                                        </td>
                                            <td> <?php echo e($record->Menu->name ?? ''); ?></td>
                                            <td>  
                                                <img src="<?php echo e(isset($record->thumbnail) ?  getThumbnail($record->thumbnail) : asset('no_image.jpg')); ?>" alt="Image" width="100" height="70"/>
                                            
                                            </td>
                                             <td><?php echo e($record->SubMenu->name ?? ''); ?></td>
                                            <td><?php echo e($record->name ?? ''); ?></td>
                                            
                                            <td><?php echo e($record->cms ?? ''); ?></td>
                                            <td><?php echo e($record->pname ?? ''); ?></td>
                                            <td><?php echo e($record->sort_id ?? ''); ?></td>
                                            <td><span class="badge badge-soft-success"><?php echo e($record->status ?? ''); ?></span></td>
                                            <td>
                                                <a href="<?php echo e(url('/admin/edit/submenu')); ?>/<?php echo e($record->id); ?>" class="text-success me-2" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
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


            <script>
                document.addEventListener('livewire:load', function () {
                    // Get the CSRF token from the meta tag
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
                    CKEDITOR.replace('editor', {
                        // filebrowserUploadUrl: '<?php echo e(route("image.upload")); ?>', // Set the image upload endpoint URL
                        filebrowserUploadUrl: "<?php echo e(route('image.upload', ['_token' => csrf_token() ])); ?>",
                        filebrowserUploadMethod: 'form', // Use form-based file upload (default is XMLHttpRequest)
                        filebrowserBrowseUrl: '/ckfinder/ckfinder.html', // Set the CKFinder browse server URL
                        filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images', // Set the CKFinder image browse server URL
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Pass the CSRF token with the request headers
                        },
                        
                    });
        
                    CKEDITOR.instances.editor.on('change', function () {
                        window.livewire.find('<?php echo e($_instance->id); ?>').set('seo_description', CKEDITOR.instances.editor.getData());
                    });
                        Livewire.on('formSubmitted', function () {
                            CKEDITOR.instances.editor.setData(''); // Reset CKEditor content
                            // document.querySelector('[wire:model="image"]').reset();
           
                 });
                    
                });
            </script>
      
        </div>
        <!-- container-fluid -->
    </div>
</div>
<?php /**PATH /home/sirsorg/public_html/resources/views/livewire/backend/submenu/view-sub-menu.blade.php ENDPATH**/ ?>