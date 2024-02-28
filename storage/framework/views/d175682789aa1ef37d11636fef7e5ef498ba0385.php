<header class="header-with-topbar">
       <div class="top-bar bg-royal-blue d-none d-md-inline-block padding-35px-lr md-no-padding-lr text-white">
<?php        
$facebook = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Facebook'])->first();
$twitter = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Twitter'])->first();
$instagram = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Instagram'])->first();
$youtube = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Youtube'])->first();
?>        
    <div class="container-fluid nav-header-container">
        <div class="d-flex flex-wrap align-items-center">
            <div class="col-12 text-center text-sm-start col-sm-auto me-auto ps-lg-0">
                <ul class="social-icon padding-5px-tb">
                   <?php if($facebook): ?> 
                    <li><a class="text-white" href="<?php echo e($facebook->link ?? ''); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                   <?php else: ?>
                    <li><a class="text-white" href="http://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <?php endif; ?>
                    
                 <?php if($twitter): ?>  
                 <li><a class="text-white" href="<?php echo e($twitter->link ?? ''); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                 <?php else: ?> 
                    <li><a class="text-white" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                 <?php endif; ?>  

                 <?php if($instagram): ?>
                  <li><a class="text-white" href="<?php echo e($instagram->link ?? ''); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                 <?php else: ?> 
                    <li><a class="text-white" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                 <?php endif; ?>  
                 
                 <?php if($youtube): ?>
                  <li><a class="text-white" href="<?php echo e($youtube->link ?? ''); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                 <?php else: ?> 
                    <li><a class="text-white" href="http://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                 <?php endif; ?>   
                </ul>
            </div>
<?php
$contactInfo = App\Models\ContactInfo::orderBy('id','desc')->where('status','Active')->first();
?>         
            <div class="col-auto d-none d-sm-block text-end px-lg-0 font-size-0">
                <div class="top-bar-contact">
                    <a href="tel:9805092582" class="top-bar-contact-list text-white">
                        <i class="feather icon-feather-phone-call icon-extra-small text-white"></i>
                        <?php echo e($contactInfo->phone ?? '+91 9805092582'); ?>

                    </a>
                    <a href="mailto:shivagroupschool@gmail.com" class="top-bar-contact-list d-none d-md-inline-block no-border-right pe-0 text-white">
                        <i class="feather icon-feather-mail icon-extra-small text-white"></i>
                        <?php echo e($contactInfo->email ?? 'shivagroupschool@gmail.com'); ?>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
      <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top navbar-boxed header-reverse-scroll py-2">
    <div class="container-fluid nav-header-container">
        <div class="col-6 col-lg-2 me-auto ps-lg-0">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
               <?php if(isset($contactInfo->logo)): ?>
                <img src="<?php echo e(asset('storage/' . $contactInfo->logo)); ?>" class="default-logo img-fluid" alt="">
                <img src="<?php echo e(asset('storage/' . $contactInfo->logo)); ?>" class="alt-logo" alt="">
                <img src="<?php echo e(asset('storage/' . $contactInfo->logo)); ?>" class="mobile-logo" alt="">
               <?php else: ?> 
                 
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="default-logo img-fluid" alt="">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="alt-logo" alt="">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="mobile-logo" alt="">
               <?php endif; ?> 
            </a>
        </div>
        <div class="col-auto menu-order px-lg-0">
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
            </button>
            <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav alt-font">
<?php
$menus = App\Models\Menu::orderBy('sort_id','asc')->where('status','Active')->get();     
?>    
          <?php if(isset($menus) ): ?>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php
$submenusTotal =App\Models\Submenu::where('menu_id', $menu->id)->count();

$submenus = App\Models\Submenu::with(['Menu'])
            ->where('menu_id', $menu->id)
            ->orderBy('sort_id')
            ->where('status', 'Active')
            ->get();   
?>



                <!--add dropdown class if menu has submenus -->
                 <li class="<?php if($submenusTotal==0): ?>  nav-item <?php else: ?> nav-item dropdown simple-dropdown <?php endif; ?>">  
                    
                <?php if(isset($menu->link) ): ?> 
                <!-- if menu has link -->
                    <a href="<?php echo e(!empty($menu->link) ? route($menu->link) : '#'); ?>" class="nav-link text-uppercase"><?php echo e($menu->name ?? ''); ?> </a>
                <?php else: ?>
                <!-- if menu has no link -->
                <a href="javascript:void(0)" class="nav-link text-uppercase"><?php echo e($menu->name ?? ''); ?> </a>
                <?php endif; ?>    
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        <ul class="dropdown-menu" role="menu">
                        
                   <!-- submenus start -->
                      <?php if(isset($submenus) ): ?>   
                           <?php $__currentLoopData = $submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php            
             $page = App\Models\CreatePage::where('submenu_id', $submenu->id)
            ->with(['SubMenu'])
            ->where('status', 'Active')
            ->first();
             ?>

                           <?php if($submenu->cms=="Yes"): ?>
                           <?php if($page): ?>
                           <li class="dropdown">   
                            <a href="<?php echo e(route('detail_page', ['page_id' => $page->id ?? '', 'slug' => $page->SubMenu->slug ?? ''])); ?>"><?php echo e($submenu->name ?? ''); ?>  
                            </a>
                            </li>
                           <?php endif; ?> 
                           <?php else: ?>
                            <li class="dropdown">   
                            <a href="<?php echo e(isset($submenu->pname) ? route($submenu->pname) : '#'); ?>"><?php echo e($submenu->name ?? ''); ?>  
                            </a>
                            </li>
                            <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <!-- submenus end -->
                     <?php endif; ?>      
                        </ul>
                    </li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="col-auto text-end hidden-xs pe-0 font-size-0">
            <div class="header-search-icon search-form-wrapper">
                <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                <!-- start search input -->
                <div class="form-wrapper">
                    <button title="Close" type="button" class="search-close alt-font">×</button>
                    <form id="search-form" role="search" method="get" class="search-form text-start" action="#">
                        <div class="search-form-box">
                            <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                            <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                            <button type="submit" class="search-button">
                                <i class="feather icon-feather-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- end search input -->
            </div>
            <div class="header-push-button d-none d-lg-inline-block hidden-xs">
                <a href="javascript:void(0);" class="push-button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="push-menu padding-50px-lr bg-white">
    <a href="javascript:void(0);" class="close-menu text-extra-dark-gray"><i class="fas fa-times"></i></a>
    <div class="push-menu-wrapper text-center" data-scroll-options='{ "theme": "dark" }'>
        <p class="title-large-2 text-extra-dark-gray alt-font font-weight-700 letter-spacing-minus-3px text-uppercase no-margin-bottom">Hello.</p>
        <span class="alt-font text-large text-uppercase d-block margin-30px-bottom">Let's talk.</span>
        
        <div class="margin-5-rem-bottom text-center lg-margin-3-rem-bottom">
            <span class="alt-font text-large margin-3-rem-bottom w-70 mx-auto text-extra-dark-gray d-inline-block line-height-26px lg-margin-2-rem-bottom">Get latest update for our residentail school</span>
            <form action="#" method="post">
                <div class="newsletter-email position-relative">
                    <input class="border-radius-5px medium-input m-0 required" name="email" placeholder="Enter your email address" type="email">
                    <input type="hidden" name="redirect" value="">
                    <button class="btn btn-medium line-height-18px submit" type="submit"><i class="far fa-envelope text-extra-dark-gray left-icon"></i>subscribe</button>
                    <div class="form-results rounded d-none position-absolute"></div>
                </div>
            </form>
        </div>
        <div class="text-center elements-social social-icon-style-04 margin-10px-bottom">
            <ul class="small-icon dark">
                <li><a class="facebook" href="https://www.facebook.com/shivainternationalresidentialschool" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="twitter" href="javascript:void()" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a class="instagram" href="https://www.instagram.com/sirs_bilaspur" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a class="youtube" href="http://www.youtube.com/@SIRS." target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
    </header><?php /**PATH C:\xampp\htdocs\shiva-live\resources\views/livewire/frontend/common/header.blade.php ENDPATH**/ ?>