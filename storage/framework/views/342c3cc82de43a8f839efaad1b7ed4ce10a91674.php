<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Dashboard</h4>
                            <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                        </div>
                        <div class="card-body">
                            <!--success or error alert-->
                
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('git-status')->html();
} elseif ($_instance->childHasBeenRendered('l3947451940-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3947451940-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3947451940-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3947451940-0');
} else {
    $response = \Livewire\Livewire::mount('git-status');
    $html = $response->html();
    $_instance->logRenderedChild('l3947451940-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <!--form starts-->
                            <div class="row g-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- container-fluid -->
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\scindia\resources\views/livewire/backend/admin-dashboard.blade.php ENDPATH**/ ?>