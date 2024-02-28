<div>
    <!-- start section -->
    <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style=" background-image: url(<?php echo e($backimage ? getsubmenuImage($backimage) : asset('assets/images/parallaxbg_header.jpg')); ?>);">
        <div class="opacity-full bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div class="col-12 col-xl-8 col-lg-8 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-orange margin-20px-bottom text-uppercase">
                        <?php echo e(Str::title( $display_title)); ?>

                    </h1>
                    <h2 class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">

                        <span class="text-border text-border-width-2px"><?php echo e(Str::title( $display_heading)); ?></span><br /> <?php echo e(Str::title( $display_subheading)); ?>


                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <?php
    $menuName = App\Models\Menu::where('status','Active')->where('id',$menu_id )->first();
    ?>

    <!-- start page title -->
    <section class="wow animate__fadeIn bg-seashell padding-30px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">

                        <?php if($menuName): ?>
                        <?php if($menuName->id!=1): ?>
                        <?php echo e($menuName->name); ?>

                        <?php endif; ?>
                        <?php endif; ?>

                    </h1>
                </div>

                <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <?php if($menuName): ?>
                        <?php if($menuName->id!=1): ?>
                        <li><a href="javascript:void()"> <?php echo e($menuName->name); ?></a></li>
                        <?php endif; ?>
                        <?php endif; ?>
                        <li>
                            <?php echo e(Str::title( $name)); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <section class="half-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-3 d-lg-block d-md-block d-sm-none d-none">
                    <div id="sidebarWrap">
                        <div id="sidebar">
                            <h6 class="alt-font text-dark-purple font-weight-500 w-85 xl-w-100 text-uppercase mb-0">

                                In this section

                            </h6>
                            <div class="alt-font font-weight-500 d-flex">
                                <span class="flex-shrink-0 w-30px h-1px bg-dark-purple opacity-7 align-self-center margin-20px-right"></span>
                                <div class="flex-grow-1"><span class="text-dark text-uppercase">&nbsp;</span>
                                </div>
                            </div>

                            <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray my-4">
                                <?php
                                $submenusIds = App\Models\CreatePage::where('menu_id',$menu_id)->pluck('submenu_id');

                                $submenus= App\Models\Submenu::whereIn('id', $submenusIds)->where('status', 'Active')->get();
                                ?>
                                <?php if(isset($submenus) && count($submenus)>0 ): ?>
                                <?php $__currentLoopData = $submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $page = App\Models\CreatePage::where('submenu_id', $submenu->id)
                                ->with(['SubMenu'])
                                ->orderBy('sort_id', 'asc')
                                ->where('status', 'Active')
                                ->first();
                                ?>

<?php
$currenturl = Request::url();
$urlslug=substr($currenturl, strrpos($currenturl, '/') + 1);
?>



                                <li class="padding-5px-tb">
                                    <?php if($page): ?>
                                    <a href="<?php echo e(route('detail_page', ['page_id' => $page->id ?? '', 'slug' => $page->SubMenu->slug ?? ''])); ?>" class="<?php if($urlslug==$page->SubMenu->slug): ?>  btn btn-large btn-transparent-royal-light-gray btn-active w-100 <?php else: ?> btn btn-large btn-transparent-royal-light-gray w-100 <?php endif; ?>">
                                        <?php else: ?>

                                        <a href="javascript:void()" class="btn btn-large btn-transparent-royal-light-gray w-100">
                                            <?php endif; ?>

                                            <?php echo e(Str::title( $submenu->name)); ?>


                                        </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- we are using loop here for multiple record -->
                <div class="col-lg-9">
                    <?php $__empty_1 = true; $__currentLoopData = $getpageData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <?php if(isset($data->image)): ?>
                    <img src="<?php echo e(getpageImage($data->image) ?? ''); ?>" class="img-fluid rounded mb-3" alt="">
                    <?php endif; ?>


                    <h5 class="alt-font text-extra-dark-gray font-weight-600 w-85 margin-30px-bottom xl-w-100"><?php echo $data->heading ?? ""; ?></h5>

                    <p><?php echo $data->description ?? ""; ?></p>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
</div><?php /**PATH /home/sirsorg/public_html/resources/views/livewire/frontend/detail/detailpage-view.blade.php ENDPATH**/ ?>