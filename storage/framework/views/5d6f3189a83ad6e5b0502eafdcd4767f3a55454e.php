<div>
<div class="page-content">
<div class="container-fluid">
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
<h4 class="mb-sm-0 font-size-18">Testimonials</h4>
<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
<li class="breadcrumb-item active">Testimonials</li>
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
<h4 class="card-title">Add Testimonial</h4>
<p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
</div>
<div class="card-body">
<!--success or error alert-->
<!--     <div class="row">
<div class="col-lg-12">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all me-2"></i>
    Aww yeah, you successfully updated the record. check it out!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="mdi mdi-block-helper me-2"></i>
    Oops! Something went wrong. check it out!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
</div> -->

<!--form starts-->
<form wire:submit.prevent="addTestimonials">
<div class="row g-3">
<div class="col-md-4">
<div class="mb-3">
    <label class="form-label">Name of Student or Alumni </label>
    <input type="text" class="form-control" id=""  wire:model="name" placeholder="Name of Student">
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
    <label class="form-label">Name of Position </label>
    <input type="text" class="form-control" id=""  wire:model="position" placeholder="position">
    <?php $__errorArgs = ['position'];
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
    <label for="" class="form-label">Profile Photo (width:125 height:125)</label>
    <input type="file" wire:model="image" id="" class="form-control">
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


<div class="col-md-12">
<div class="mb-3" >
    <label class="form-label">Message </label>
  
<!-- Include CKEditor script from the CDN -->

<div wire:ignore>
     <textarea rows="10" wire:model="desc" placeholder="Description of Event" class="form-control xtra-cat"></textarea>
</div>



 
    <?php $__errorArgs = ['desc'];
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
<label class="form-label">Link</label>
<input type="text" class="form-control" id="" wire:model="link"  placeholder="Link">
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
    <label class="form-label">Sort Order#</label>
    <input type="number" class="form-control" id="" wire:model="sort_id" placeholder="Order Number">
    <?php $__errorArgs = ['sort_id'];
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
        <option value="Inactive"> Inactive </option>
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
<button type="submit" wire:loading.attr="disabled" wire:target="addTestimonials"    class="btn btn-primary w-md">Submit</button>
</div>
<div wire:loading wire:target="addTestimonials">
    <img src="<?php echo e(asset('loading.gif')); ?>" width="30" height="30" class="m-auto mt-1/4">
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
<h4 class="card-title">Manage Testimonials</h4>
<p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped datatable">
<thead>
    <tr>
        <th>Name</th>
        
        <th>Photo</th>
        <th>Message</th>
        
        <th>Sort#</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php if(isset($records) && count($records)>0 ): ?>                      
<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     

    <tr>
        <td><?php echo e($record->name ?? ''); ?></td>
        
        <td>
<?php       
$thumb = !empty($record->photo) ?  getThumbnail($record->thumbnail) : url('admin_assets/images/no-img.jpg');
?>                                      
<img src="<?php echo e($thumb); ?>" alt="" class="border" width="100" height="70">
        </td>
        <td>
            <?php echo $record->description  ?? ''; ?>

        </td>
        
        <td><?php echo e($record->sort_id  ?? ''); ?></td>
        <td>
            <?php if($record->status  == "Active"): ?>
                <span class="badge badge-soft-success"><?php echo e($record->status  ?? ''); ?></span></td>
            <?php else: ?>
                <span class="badge badge-soft-danger"><?php echo e($record->status  ?? ''); ?></span></td>
            <?php endif; ?>
            <td>
            <a href="<?php echo e(url('/admin/edit/testimonials')); ?>/<?php echo e($record->id); ?>" class="text-success me-2" title="Edit"><i class="fa fa-edit fa-fw"></i></a>
            <a href="javascript:void(0)" class="text-danger me-2" title="Delete"><i class="fa fa-times fa-fw fa-lg" wire:click="delete(<?php echo e($record->id); ?>)"></i></a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
<tr>
<td colspan="6"> Record Not Found</td>

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
<?php /**PATH C:\xampp\htdocs\laravel-livewire\resources\views/livewire/backend/testimonials/view-testimonials.blade.php ENDPATH**/ ?>