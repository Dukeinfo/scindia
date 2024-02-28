<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
        
        <meta charset="utf-8" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard - Shiva International Residential School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Shiva International Residential School" name="description" />
        <meta content="Shiva International Residential School" name="keywords" />
        <meta content="Shiva International Residential School" name="author" />
        <!-- App favicon -->
            <!-- CK editor -->
       	<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
        <link rel="shortcut icon" href="<?php echo e(asset('admin_assets/images/faviconn.ico')); ?>">

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('admin_assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('admin_assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('admin_assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />
		
		<!-- DataTables -->
        <link href="<?php echo e(asset('admin_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin_assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />
        
        <!-- trix editor -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

         <!-- pickday -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> 
            
        <?php echo \Livewire\Livewire::styles(); ?>




    </head>

    <body data-sidebar="dark" data-layout-mode="light">
        <!-- page wrapper-->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <?php echo $__env->make('livewire.backend.common.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </header>

            <!-- Sidebar Start -->
            <div class="vertical-menu">
            <?php echo $__env->make('livewire.backend.common.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- Sidebar End -->
            
            <!-- Page content -->
            <div class="main-content">
                <?php echo e($slot); ?>


              <?php echo $__env->make('livewire.backend.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->  



        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('admin_assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/node-waves/waves.min.js')); ?>"></script>

        <!-- Required datatable js -->
        <script src="<?php echo e(asset('admin_assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin_assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Datatable init js -->
        <script src="<?php echo e(asset('admin_assets/js/pages/datatables.init.js')); ?>"></script>



         <?php echo \Livewire\Livewire::scripts(); ?>


        <!-- App js -->
        <script src="<?php echo e(asset('admin_assets/js/app.js')); ?>"></script>



        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
      
    window.addEventListener('swal:modal', event => { 
        swal({
          title: event.detail.message,
          text: event.detail.text,
          icon: event.detail.type,
        });
        setTimeout(() => {
        swal.close();
    }, 2000);
    });
      
    window.addEventListener('swal:confirm', event => { 
        swal({
          title: event.detail.message,
          text: event.detail.text,
          icon: event.detail.type,
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.livewire.emit('remove');
          }
        });
    });
     </script>


     <!-- pickday -->
     <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

     <script>
      var picker = new Pikaday({ field: document.getElementById('dated') });
      var picker2 = new Pikaday({ field: document.getElementById('newsDate') });
      var picker3 = new Pikaday({ field: document.getElementById('picDate') });
      var picker4 = new Pikaday({ field: document.getElementById('grapDate') });
      var picker5 = new Pikaday({ field: document.getElementById('schoolDate') });
      var picker6 = new Pikaday({ field: document.getElementById('blogDate') });
      
     </script>

     <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modals.edit-resultx')->html();
} elseif ($_instance->childHasBeenRendered('el2mUT9')) {
    $componentId = $_instance->getRenderedChildComponentId('el2mUT9');
    $componentTag = $_instance->getRenderedChildComponentTagName('el2mUT9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('el2mUT9');
} else {
    $response = \Livewire\Livewire::mount('modals.edit-resultx');
    $html = $response->html();
    $_instance->logRenderedChild('el2mUT9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </body>
</html><?php /**PATH /home/sirsorg/public_html/resources/views/layouts/backend.blade.php ENDPATH**/ ?>