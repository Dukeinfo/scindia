<div>
    
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Manage Enquiries</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Enquiries</li>
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
                            <h4 class="card-title">Manage Enquiries</h4>
                            <p class="card-title-desc mb-0">Manage the content by clicking on action accrodingly.</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
<table class="table table-bordered table-striped datatable">
<thead>
<tr>
<th>Student name</th>    
<th>Parent/Guardian Name(s)</th>
<th>Email</th>
<th>Phone</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
        <?php if(isset($records) && count($records)>0 ): ?>                      
            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                            <tr>
                                <td><?php echo e($record->name ?? ''); ?></td>
                                <td><?php echo e($record->pname ?? ''); ?></td>
                              
                                <td><?php echo e($record->email ?? ''); ?></td>
<td><?php echo e($record->phone ?? ''); ?></td>
<td><?php echo e($record->address ?? ''); ?></td>
<td><?php echo e($record->comment ?? ''); ?></td>
<td>
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
<?php /**PATH /home/sirsorg/public_html/resources/views/livewire/backend/enquiries/enquiry-lists.blade.php ENDPATH**/ ?>