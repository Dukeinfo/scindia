<div>
      <!-- Main Content -->
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('assets/images/header_bg.jpg');">
    <div class="opacity-full bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-8 col-lg-8 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-orange margin-20px-bottom text-uppercase">Explore SIRS</h1>
                <h2 class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                    <span class="text-border text-border-width-2px">SIRS</span><br /> Gallery
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="wow animate__fadeIn bg-light-gray padding-30px-tb sm-padding-20px-tb page-title-small" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Gallery
                </h1>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="javascript:void()">Explore SIRS</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="half-section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-3 d-lg-block d-md-block d-sm-none d-none">
                <div id="sidebarWrap">
                    <div id="sidebar">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500 w-85 xl-w-100 text-uppercase mb-0">Explore SIRS</h6>
                        <div class="alt-font font-weight-500 d-flex">
                            <span class="flex-shrink-0 w-30px h-1px bg-dark-purple opacity-7 align-self-center margin-20px-right"></span>
                            <div class="flex-grow-1"><span class="text-dark text-uppercase">&nbsp;</span>
                            </div>
                        </div>

                        <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray my-4">
                            <li class="padding-5px-bottom">
                                <a href="<?php echo e(url('/blogs')); ?>" class="btn btn-large btn-transparent-royal-light-gray w-100">Blogs</a>
                            </li>
                            <li class="padding-5px-tb">
                                <a href="<?php echo e(url('/news')); ?>" class="btn btn-large btn-transparent-royal-light-gray w-100">News</a>
                            </li>
                            <li class="padding-5px-tb">
                                <a href="<?php echo e(url('/events')); ?>" class="btn btn-large btn-transparent-royal-light-gray w-100">Events</a>
                            </li>
                            <li class="padding-5px-tb">
                                <a href="<?php echo e(url('/gallery')); ?>" class="btn btn-large btn-transparent-royal-light-gray btn-active w-100">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
 
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 margin-3-rem-bottom md-no-margin-bottom">
                 <?php if(isset($categories) && count($categories)>0  ): ?>
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <a href="<?php echo e(url('/gallery-detail')); ?>/<?php echo e($category->id); ?>"><img src="<?php echo e(isset($category->image) ? getGalleryImage($category->image) : asset('no_image.jpg')); ?>" alt="" /></a>
                                <div class="position-relative bg-white padding-2-half-rem-all border">
                                    <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom"><?php echo e($category->name); ?></span>
                                    <p><?php echo e(Str::limit($category->description, 64) ?? ''); ?></p>
                                </div>
                            </div>



                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php
      $totalPhotos =App\Models\Gallery::where(['category_id'=> $category->id , 'status' => 'Active' ])->count();
 ?>

       <?php if(count($categories)!=count($total)): ?>
 <button type="button" class="btn btn-primary btn-lg btn-block" wire:click="loadMore">Load More</button>
 <?php endif; ?>

                       <?php else: ?>
                       <!-- by feualt data -->      
                 <!--            <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <a href="<?php echo e(url('/gallery-detail')); ?>"><img src="assets/images/blog1.jpg" alt="" /></a>
                                <div class="position-relative bg-white padding-2-half-rem-all border">
                                    <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Republic Day Celebration 2023</span>
                                    <p>Lorem ipsum dolor amet consectetur adipiscing do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <a href="<?php echo e(url('/gallery-detail')); ?>"><img src="assets/images/blog2.jpg" alt="" /></a>
                                <div class="position-relative bg-white padding-2-half-rem-all border">
                                    <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Janamashtami Celebration 2023</span>
                                    <p>Lorem ipsum dolor amet consectetur adipiscing do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <a href="<?php echo e(url('/gallery-detail')); ?>"><img src="assets/images/blog3.jpg" alt="" /></a>
                                <div class="position-relative bg-white padding-2-half-rem-all border">
                                    <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Sports Day 'SHIVANIAN' Event 2023</span>
                                    <p>Lorem ipsum dolor amet consectetur adipiscing do eiusmod tempor.</p>
                                </div>
                            </div> -->

 

                    <?php endif; ?>        
                        </div>
                    </div>
                </div>

     <?php if(isset($categories) && count($categories)==0  ): ?>                          <!-- show no record found -->
<center><div class="alert alert-primary" role="alert">
          <strong>Sorry!</strong> No Record Found.
          </div>
     <?php endif; ?>     
            </div>
        </div>
    </div>
</section>
    <!-- Main Content Ends-->

</div>
<?php /**PATH /home/sirsorg/public_html/resources/views/livewire/frontend/gallery.blade.php ENDPATH**/ ?>