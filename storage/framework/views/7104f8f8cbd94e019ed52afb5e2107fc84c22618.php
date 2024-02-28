<div>
    <div class="row">
<div class="col-md-8">
    <h3>Static page list</h3>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th>Page Name</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
         
                <?php $__currentLoopData = Route::getRoutes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(str_starts_with($route->getName(), 'home.') ): ?>
                    <?php
                         $routeName   = ucwords(str_replace('home.','',$route->getName() )  )
                     ?>
                <tr>     
                    <td  class="fw-bold">  <?php echo e(str_replace('_' , ' ',$routeName)); ?> </td>
                    <td>  
                         <a class="fw-bold"href="<?php echo e(route($route->getName())); ?>" target="_blank">  <?php echo e(str_replace('_' , ' ',$routeName)); ?></a> </td>
                     <td>   <a href="" target="_blank"> 
                     <?php if(in_array($route->getName(), ['home.homepage', 'home.contact_us'])): ?> 
                       ==== 
                    </a>
                     <?php else: ?>
                     == New ==
                     <?php endif; ?>
                        
                     </td>
                </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>
<?php /**PATH C:\xampp\htdocs\scindia\resources\views/livewire/git-status.blade.php ENDPATH**/ ?>