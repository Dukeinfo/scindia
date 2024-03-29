<div> 
    <!-- start slider section -->
    <section class="p-0 sm-border-bottom border-color-medium-gray mobile-height">
        <?php
        $sliders = App\Models\Slider::orderBy('sort_id','asc')->where('status','Active')->get();
        ?>
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="swiper-container full-screen p-0 md-landscape-h-600px white-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 5500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade", "speed": 2000 }'>
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <?php if(isset($sliders) ): ?>
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($slider->image)): ?>
                        <div class="swiper-slide cover-background" style="background-image:url(<?php echo e(getsliderImages($slider->image ) ?? ''); ?>);">
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- end slider item -->

                    </div>
                    <!-- start slider arrow -->
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05"><i class="line-icon-Arrow-OutRight"></i></div>
                    <!-- end slider arrow -->
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-light-pagination swiper-pagination-dot d-none d-md-block"></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <?php
    $fancyItem1 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'School Brochure'])->first();
    ?>

    <?php
    $fancyItem2 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Our Campus'])->first();
    ?>

    <?php
    $fancyItem3 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>"Parents' Speak"])->first();
    ?>

    <?php
    $fancyItem4 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Admission'])->first();
    ?>

    <?php
    $fancyItem5 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'School in News'])->first();
    ?>

    <?php
    $fancyItem6 = App\Models\FancyBox::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Fee Structure'])->first();
    ?>
    <section class="p-0">
        <div class="container-fluid">
            <div class="row row-cols-2 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Profile icon-medium text-orange d-block margin-15px-bottom"></i>


                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">School Brochure</span>

                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">School Brochure</span>

                                    <?php if(isset($fancyItem1)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem1->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Building icon-medium text-orange d-block margin-15px-bottom"></i>
                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">Our Campus</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Our Campus</span>

                                    <?php if(isset($fancyItem2)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem2->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Speach-BubbleDialog icon-medium text-orange d-block margin-15px-bottom"></i>
                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">Parents' Speak</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Parents' Speak</span>
                                    <?php if(isset($fancyItem3)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem3->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Diploma-2 icon-medium text-orange d-block margin-15px-bottom"></i>
                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">Admission</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Admission</span>
                                    <?php if(isset($fancyItem4)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem4->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Newspaper icon-medium text-orange d-block margin-15px-bottom"></i>
                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">School in News</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">School in News</span>
                                    <?php if(isset($fancyItem5)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem5->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <a href="javascript:void()">
                                <div class="text-box">
                                    <i class="line-icon-Coins icon-medium text-orange d-block margin-15px-bottom"></i>
                                    <span class="alt-font text-dark-charcoal font-weight-500 text-uppercase">Fee Structure</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Fee Structure</span>
                                    <?php if(isset($fancyItem6)): ?>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100 text-dark-gray">
                                        <?php echo e($fancyItem6->description); ?>

                                    </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>


    <?php
    $aboutsirs = App\Models\AboutSir::where('status','Active')->first();
    ?>

    <!-- about sirs -->
    <section class="mb-0 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-600 text-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Shiva International Residential School</span>
                    <h1 class="alt-font font-weight-700 text-slate-blue letter-spacing-minus-1px title-extra-small text-uppercase">Best Boarding School in Bilaspur, Himachal Pradesh</h1>
                </div>
            </div>
            <div class="row margin-9-rem-bottom md-margin-4-rem-bottom sm-margin-5-rem-bottom">
                <div class="col-12 col-lg-4 col-md-7 md-margin-60px-bottom sm-margin-20px-bottom wow animate__fadeIn">
                    <!-- <i class="line-icon-Books icon-medium margin-35px-bottom"></i> -->
                    <span class="alt-font font-weight-600 text-medium text-orange text-uppercase d-block margin-20px-bottom letter-spacing-1px">
                        <?php echo e($aboutsirs->heading ?? 'About SIRS'); ?></span>
                    <h2 class="title-small alt-font font-weight-600 text-extra-dark-gray mb-0">
                        <?php echo e($aboutsirs->sub_heading ?? 'Unlocking excellence, nurturing global citizens'); ?>

                    </h2>
                </div>
                <div class="col-12 col-xl-4 col-lg-5 col-md-6 md-margin-30px-bottom sm-margin-50px-bottom wow animate__fadeIn">
                    <?php if(isset($aboutsirs->description) ): ?>


                    <?php echo isset($aboutsirs->description)
                    ?
                    str_limit($aboutsirs->description, $limit=308 )
                    : ''; ?>


                    <br>
                    <?php else: ?>


                    <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-25px-bottom lg-w-95 sm-w-100 sm-margin-15px-bottom">As one of the <strong><a href="https://www.sirs.org.in/" class="text-primary">Best Boarding school in Himachal Pradesh</a></strong>, Shiva International Residential School is committed to providing a world-class education in the safe, pristine, peaceful, and serene environment of Himachal Pradesh.</span>
                    <p class="lg-w-95 sm-margin-15px-bottom margin-20px-bottom">We strive to offer a holistic learning experience that nurtures students' academic, physical, and personal growth. Our dedicated faculty, state-of-the-art facilities, and focus on character development ensure that students are prepared to excel in the global arena. Join us at Shiva International Residential School for an education that goes beyond the ordinary.</p>
                    <?php endif; ?>
                    <a href="https://www.sirs.org.in/detail/page/16/about-sirs-1" class="btn btn-fancy btn-large btn-royal-blue">Explore More</a>
                </div>
                <div class="col-12 col-lg-3 col-md-6 offset-xl-1 wow animate__fadeIn">
                    <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray">
                        <li class="padding-15px-bottom border-bottom border-color-medium-gray"><i class="feather icon-feather-check text-large text-orange margin-10px-right"></i>
                            <?php echo e($aboutsirs->item1 ?? 'Experiential Learning'); ?>

                        </li>
                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-check text-large text-orange margin-10px-right"></i>
                            <?php echo e($aboutsirs->item2 ?? 'Life Skills Development Program'); ?>

                        </li>
                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><i class="feather icon-feather-check text-large text-orange margin-10px-right"></i>
                            <?php echo e($aboutsirs->item3 ?? 'Creating Global Impact by 21st Century Skills'); ?>

                        </li>
                        <li class="padding-15px-tb"><i class="feather icon-feather-check text-large text-orange margin-10px-right"></i>
                            <?php echo e($aboutsirs->item4 ?? 'Global Citizenship Education'); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    $rotateItems = App\Models\RotateItem::where('status', 'Active')->get();
    ?>

    <section class="mt-0 pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start rotate box item -->
                <?php if(isset($rotateItems) && count($rotateItems) >0 ): ?>
                <?php $__currentLoopData = $rotateItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-480px border-radius-4px overflow-hidden lg-h-450px" style="background-image:url(<?php echo e(getRotateImages($item->image ) ?? ''); ?>)">
                                    <div class="opacity-medium bg-gradient-extra-dark-gray-transparent"></div>
                                    <div class="content-wrap padding-15px-lr">
                                        <span class="text-white text-large letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-500"><?php echo e($item->title); ?></span>
                                        <span class="text-white opacity-6 text-medium text-uppercase letter-spacing-1-half alt-font d-block">Know More</span>
                                    </div>
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="overlay-bg bg-royal-blue"></div>
                                    <div class="content-wrap padding-60px-all lg-padding-30px-lr md-padding-40px-lr xs-padding-30px-all">
                                        <i class="line-icon-Books-2 icon-large text-white margin-35px-bottom"></i>
                                        <span class="text-white text-extra-medium letter-spacing-1px font-weight-500 text-uppercase alt-font d-block margin-10px-bottom"><?php echo e($item->title); ?></span>
                                        <p class="text-white opacity-7"> <?php echo Str::limit($item->description, 100) ?? ''; ?></p>
                                        <a href="<?php echo e($item->link ?? 'javascript:void()'); ?>" target="_blank" class="btn btn-large btn-fancy btn-white">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <!-- start rotate box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-480px border-radius-4px overflow-hidden lg-h-450px" style="background-image:url('assets/images/academics.jpg')">
                                    <div class="opacity-medium bg-gradient-extra-dark-gray-transparent"></div>
                                    <div class="content-wrap padding-15px-lr">
                                        <span class="text-white text-large letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-500">Academics</span>
                                        <span class="text-white opacity-6 text-medium text-uppercase letter-spacing-1-half alt-font d-block">Know More</span>
                                    </div>
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="overlay-bg bg-royal-blue"></div>
                                    <div class="content-wrap padding-60px-all lg-padding-30px-lr md-padding-40px-lr xs-padding-30px-all">
                                        <i class="line-icon-Books-2 icon-large text-white margin-35px-bottom"></i>
                                        <span class="text-white text-extra-medium letter-spacing-1px font-weight-500 text-uppercase alt-font d-block margin-10px-bottom">Academics</span>
                                        <p class="text-white opacity-7">Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt labore ut enim</p>
                                        <a href="#" class="btn btn-large btn-fancy btn-white">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-480px border-radius-4px overflow-hidden lg-h-450px" style="background-image:url('assets/images/cocurricular.jpg')">
                                    <div class="opacity-medium bg-gradient-extra-dark-gray-transparent"></div>
                                    <div class="content-wrap padding-15px-lr">
                                        <span class="text-white text-large letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-500">Co-Curricular</span>
                                        <span class="text-white opacity-6 text-medium text-uppercase letter-spacing-1-half alt-font d-block">Know More</span>
                                    </div>
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="overlay-bg bg-royal-blue"></div>
                                    <div class="content-wrap padding-60px-all lg-padding-30px-lr md-padding-40px-lr xs-padding-30px-all">
                                        <i class="line-icon-Knight icon-large text-white margin-35px-bottom"></i>
                                        <span class="text-white text-extra-medium letter-spacing-1px font-weight-500 text-uppercase alt-font d-block margin-10px-bottom">Co-Curricular</span>
                                        <p class="text-white opacity-7">Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt labore ut enim</p>
                                        <a href="#" class="btn btn-large btn-fancy btn-white">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <!-- start rotate box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8">
                    <div class="rm-rotate-box text-center">
                        <div class="flipper to-left">
                            <div class="thumb-wrap">
                                <div class="front overflow-hidden h-480px border-radius-4px overflow-hidden lg-h-450px" style="background-image:url('assets/images/sports.jpg')">
                                    <div class="opacity-medium bg-gradient-extra-dark-gray-transparent"></div>
                                    <div class="content-wrap padding-15px-lr">
                                        <span class="text-white text-large letter-spacing-1px margin-10px-bottom text-uppercase alt-font d-inline-block font-weight-500">Sports</span>
                                        <span class="text-white opacity-6 text-medium text-uppercase letter-spacing-1-half alt-font d-block">Know More</span>
                                    </div>
                                </div>
                                <div class="back border-radius-4px overflow-hidden">
                                    <div class="overlay-bg bg-royal-blue"></div>
                                    <div class="content-wrap padding-60px-all lg-padding-30px-lr md-padding-40px-lr xs-padding-30px-all">
                                        <i class="line-icon-Basket-Ball icon-large text-white margin-35px-bottom"></i>
                                        <span class="text-white text-extra-medium letter-spacing-1px font-weight-500 text-uppercase alt-font d-block margin-10px-bottom">Sports</span>
                                        <p class="text-white opacity-7">Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt labore ut enim</p>
                                        <a href="#" class="btn btn-large btn-fancy btn-white">Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end rotate box item -->
                <?php endif; ?>


            </div>
        </div>
    </section>

    <?php
    $facilities = App\Models\Facilities::where('status', 'Active')->get();
    ?>
    <section class="bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-600 text-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom">Life at SIRS</span>
                    <h5 class="alt-font font-weight-700 text-slate-blue letter-spacing-minus-1px text-uppercase">Facilities We Provide</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-12 position-relative margin-9-rem-bottom md-margin-6-rem-bottom wow animate__fadeIn">
                    <div class="swiper-container black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <?php if(isset($facilities) && count($facilities) >0 ): ?>
                            <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- start info banner slider item -->
                            <div class="swiper-slide">
                                <div class="row m-0 h-100">
                                    <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url(<?php echo e(getfacility($facility->image ) ?? ''); ?>)"></div>
                                    <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                        <div class="align-self-center">
                                            <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block"><?php echo e($facility->title); ?></span>
                                            <?php echo Str::limit($facility->description, 100) ?? ''; ?>

                                            <a href="<?php echo e($facility->link ?? 'javascript:void()'); ?>" class="btn btn-fancy btn-very-small btn-royal-blue" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info banner slider item -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <!-- start info banner slider item -->
                            <div class="swiper-slide">
                                <div class="row m-0 h-100">
                                    <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url(assets/images/facility1.jpg);"></div>
                                    <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                        <div class="align-self-center">
                                            <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">Digital Classroom</span>
                                            <p>Lorem ipsum dolor amet consectetur adipiscing eiusmod tempor.</p>
                                            <a href="#" class="btn btn-fancy btn-very-small btn-royal-blue">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info banner slider item -->
                            <!-- start info banner slider item -->
                            <div class="swiper-slide">
                                <div class="row m-0 h-100">
                                    <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url(assets/images/facility2.jpg);"></div>
                                    <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                        <div class="align-self-center">
                                            <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">Hostels</span>
                                            <p>Lorem ipsum dolor amet consectetur adipiscing eiusmod tempor.</p>
                                            <a href="#" class="btn btn-fancy btn-very-small btn-royal-blue">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info banner slider item -->
                            <!-- start info banner slider item -->
                            <div class="swiper-slide">
                                <div class="row m-0 h-100">
                                    <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url(assets/images/facility3.jpg);"></div>
                                    <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                        <div class="align-self-center">
                                            <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">Health & Wellness</span>
                                            <p>Lorem ipsum dolor amet consectetur adipiscing eiusmod tempor.</p>
                                            <a href="#" class="btn btn-fancy btn-very-small btn-royal-blue">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info banner slider item -->
                            <!-- start info banner slider item -->
                            <div class="swiper-slide">
                                <div class="row m-0 h-100">
                                    <div class="col-12 col-sm-6 cover-background xs-h-200px" style="background: url(assets/images/facility4.jpg);"></div>
                                    <div class="col-12 col-sm-6 d-flex padding-4-rem-all bg-white lg-padding-2-half-rem-all xs-padding-4-rem-all">
                                        <div class="align-self-center">
                                            <span class="alt-font font-weight-500 text-uppercase text-slate-blue margin-10px-bottom d-block">Library</span>
                                            <p>Lorem ipsum dolor amet consectetur adipiscing eiusmod tempor.</p>
                                            <a href="#" class="btn btn-fancy btn-very-small btn-royal-blue">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end info banner slider item -->
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- start slider navigation -->
                    <!-- <div class="swiper-button-previous-nav swiper-button-prev light slider-navigation-style-07 rounded-circle box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>
                <div class="swiper-button-next-nav swiper-button-next light slider-navigation-style-07 rounded-circle box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div> -->
                    <!-- end slider navigation -->
                </div>
            </div>

            <?php
            $counterItems = App\Models\ExpertService::where('status', 'Active')->get();
            ?>
            <div class="row">
                <?php if(isset($counterItems) && count($counterItems) >0 ): ?>
                <?php $__currentLoopData = $counterItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- start counter item -->
                <div class="col-6 col-lg-2 offset-lg-1 col-md-3 col-sm-6 text-center text-md-start sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                    <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center justify-content-md-start">
                        <h5 class="font-size-medium vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-3px mb-0 sm-letter-spacing-minus-1-half" data-to="<?php echo e($item->howmany); ?>"></h5><span class="text-orange title-extra-small font-weight-500 margin-5px-left">+</span>
                    </div>
                    <span class="alt-font text-medium text-uppercase d-block letter-spacing-2px"><?php echo e($item->title); ?></span>
                </div>
                <!-- end counter item -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <!-- start counter item -->
                <div class="col-6 col-lg-2 offset-lg-1 col-md-3 col-sm-6 text-center text-md-start sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                    <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center justify-content-md-start">
                        <h5 class="font-size-medium vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-3px mb-0 sm-letter-spacing-minus-1-half" data-to="24"></h5><span class="text-orange title-extra-small font-weight-500 margin-5px-left">+</span>
                    </div>
                    <span class="alt-font text-medium text-uppercase d-block letter-spacing-2px">Years in Education</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-6 col-lg-2 offset-lg-1 col-md-3 col-sm-6 text-center text-md-start sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                    <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center justify-content-md-start">
                        <h5 class="font-size-medium vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-3px mb-0 sm-letter-spacing-minus-1-half" data-to="28"></h5><span class="text-orange title-extra-small font-weight-500 margin-5px-left">+</span>
                    </div>
                    <span class="alt-font text-medium text-uppercase d-block letter-spacing-2px">Excellence Awards</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-6 col-lg-2 offset-lg-1 col-md-3 col-sm-6 text-center text-md-start xs-margin-40px-bottom wow animate__fadeIn">
                    <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center justify-content-md-start">
                        <h5 class="font-size-medium vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-3px mb-0 sm-letter-spacing-minus-1-half" data-to="72"></h5><span class="text-orange title-extra-small font-weight-500 margin-5px-left">+</span>
                    </div>
                    <span class="alt-font text-medium text-uppercase d-block letter-spacing-2px">Experienced Teachers</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col-6 col-lg-2 offset-lg-1 col-md-3 col-sm-6 text-center text-md-start wow animate__fadeIn">
                    <div class="d-flex flex-row align-item-start margin-10px-bottom justify-content-center justify-content-md-start">
                        <h5 class="font-size-medium vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-3px mb-0 sm-letter-spacing-minus-1-half" data-to="52"></h5><span class="text-orange title-extra-small font-weight-500 margin-5px-left">+</span>
                    </div>
                    <span class="alt-font text-medium text-uppercase d-block letter-spacing-2px">Teaching Methedology</span>
                </div>
                <!-- end counter item -->
                <?php endif; ?>

            </div>
        </div>
    </section>

    <?php
    $exploreShiva = App\Models\ExploreShiva::where('status', 'Active')->orderBy('sort_id','asc')->first();
    ?>
    <section id="started-now" class="big-section parallax overlap-height wow animate__fadeIn" data-parallax-background-ratio="0.3" style="background-image:url('assets/images/cta.webp');">
        <div class="opacity-medium bg-slate-blue"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-sm-8 position-relative text-center overlap-gap-section xs-margin-40px-tb wow animate__zoomIn">
                    <a href="#" class="popup-youtube video-icon-box video-icon-large position-relative d-inline-block margin-3-half-rem-bottom">
                        <span>
                            <span class="video-icon bg-orange">
                                <i class="icon-simple-line-control-play text-white"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-afr bg-orange"></span>
                                </span>
                            </span>
                        </span>
                    </a>

                    <p class="title-large-2 alt-font font-weight-700 text-white text-uppercase letter-spacing-minus-2px mb-0">
                        <?php if(isset($exploreShiva)): ?>
                        <?php echo e($exploreShiva->title ?? "Explore Nature's Edge"); ?>


                        <?php else: ?>
                        Explore Nature's Edge
                        <?php endif; ?>

                    </p>
                    <p class="h3 mt-4 text-white">
                        <?php if(isset($exploreShiva)): ?>
                        <?php echo e($exploreShiva->subtitle ?? 'Explore SHIVA'); ?>


                        <?php else: ?>
                        Explore Shiva
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php
    $whyShivaSlider = App\Models\WhyShivaSlider::where('status', 'Active')->get();
    ?>
    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-9 p-0 md-margin-30px-bottom wow animate__fadeIn">
                    <div class="position-relative">
                        <div class="swiper-container slider-one-slide black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <?php if(isset($whyShivaSlider) && count($whyShivaSlider)>0 ): ?>
                                <?php $__currentLoopData = $whyShivaSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <?php if(isset($record->image)): ?>
                                        <img src="<?php echo e(getWhyShivaImages($record->image ) ?? ''); ?>" alt="SIRS">
                                        <?php endif; ?>

                                        <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                            <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0"> <?php if($key+1>0 && $key+1<10): ?> 0<?php echo e($key+1); ?> <?php else: ?> <?php echo e($key+1); ?> <?php endif; ?> </h4>
                                            </div>
                                            <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-orange lg-padding-35px-left xs-padding-15px-left">
                                                <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom"> <?php echo e($record->title ?? ''); ?> </span>

                                                <?php echo Str::limit($record->description, 80) ?? ''; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="assets/images/shiva1.jpg" alt="SIRS">
                                        <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                            <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">01</h4>
                                            </div>
                                            <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-orange lg-padding-35px-left xs-padding-15px-left">
                                                <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Character Education, Leadership and Personal Growth</span>
                                                <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="assets/images/shiva2.jpg" alt="SIRS">
                                        <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                            <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">02</h4>
                                            </div>
                                            <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-orange lg-padding-35px-left xs-padding-15px-left">
                                                <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Cultural Exchange Programs and International Partnerships</span>
                                                <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide padding-15px-all">
                                    <div class="h-100 bg-white box-shadow position-relative">
                                        <img src="assets/images/shiva3.jpg" alt="SIRS">
                                        <div class="padding-4-half-rem-lr padding-3-half-rem-tb feature-box feature-box-left-icon-middle last-paragraph-no-margin lg-padding-2-half-rem-lr sm-padding-4-rem-lr xs-padding-2-rem-all">
                                            <div class="feature-box-icon margin-40px-right lg-margin-35px-right xs-margin-15px-right">
                                                <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">03</h4>
                                            </div>
                                            <div class="feature-box-content padding-40px-left border-left border-width-2px border-color-orange lg-padding-35px-left xs-padding-15px-left">
                                                <span class="text-extra-dark-gray alt-font font-weight-500 d-block text-extra-medium margin-5px-bottom">Internationally Recognized Curriculum</span>
                                                <p>Lorem ipsum dolor sit amet consectetur do eiusmod tempor incididunt elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- start slider pagination -->
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-right text-extra-large"></i></div>
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-left text-extra-large"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
                <?php
                $whyShivaDetail = App\Models\WhyShivaDetail::where('status','Active')->first();
                ?>
                <div class="col-12 col-lg-5 offset-lg-1 col-md-9 wow animate__fadeIn">
                    <span class="alt-font font-weight-600 text-orange text-uppercase letter-spacing-1px d-block margin-5px-bottom"><?php echo e($whyShivaDetail->heading ?? 'Why Shiva?'); ?></span>
                    <h2 class="title-small alt-font font-weight-600 text-extra-dark-gray  margin-40px-bottom sm-w-75 sm-line-height-30px xs-w-80 xs-margin-20px-bottom">
                        <span class="p-0 d-block"><?php echo e($whyShivaDetail->sub_heading ?? 'Nurturing well-rounded individuals'); ?></span>
                    </h2>
                    <?php if(isset($whyShivaDetail->description) ): ?>


                    <?php echo isset($whyShivaDetail->description)
                    ?
                    str_limit($whyShivaDetail->description, $limit=155 )
                    : ''; ?>

                    <?php else: ?>
                    <p class="w-90 md-w-100 margin-30px-bottom">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim ad minim veniam nostrud exercitation.</p>
                    <?php endif; ?>

                    <ul class="w-100 list-style-01 font-weight-500 text-extra-dark-gray lg-w-100 sm-w-85 xs-w-100 mb-5">
                        <li><i class="fas fa-check text-orange"></i> <?php echo e($whyShivaDetail->item1 ?? 'A rigorous and internationally recognized curriculum'); ?>

                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>

                        <li><i class="fas fa-check text-orange"></i> <?php echo e($whyShivaDetail->item2 ?? 'Highly qualified and dedicated faculty members'); ?>

                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                        <li><i class="fas fa-check text-orange"></i> <?php echo e($whyShivaDetail->item3 ?? 'State-of-the-art classrooms and learning resources'); ?>

                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                        <li><i class="fas fa-check text-orange"></i> <?php echo e($whyShivaDetail->item4 ?? 'Opportunities for global citizenship & understanding'); ?>

                            <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                        </li>
                    </ul>
                    <a href="<?php echo e($whyShivaDetail->link ?? 'javascript:void()'); ?>" target="_blank" class="btn btn-large btn-fancy btn-royal-blue">Discover More</a>
                </div>
            </div>
        </div>
    </section>


    <?php
    $testimonials = App\Models\Testimonials::where('status', 'Active')->get();
    ?>
    <!-- <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-4 col-sm-8 text-center text-lg-start md-margin-5-rem-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-orange text-uppercase d-block margin-15px-bottom">Loved by our Students</span>
                    <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">What our Students are saying about our School</h5>
                </div>
                <div class="col-12 col-xl-7 offset-xl-1 col-lg-8 wow animate__fadeIn">
                    <div class="swiper-simple-arrow-style-1">
                        <div class="swiper-container black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <?php if(isset($testimonials) && count($testimonials) >0 ): ?>
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="swiper-slide text-center">
                                    <div class="feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                            <img class="rounded-circle xs-w-80px xs-h-80px" src="<?php echo e(isset($item->thumbnail) ? getThumbnail($item->thumbnail) : asset('no_image.jpg')); ?>" alt="SIRS" />
                                        </div>
                                        <div class="feature-box-content">
                                            <p class="w-85 lg-w-100"> <?php echo Str::limit($item->description, 257) ?? ''; ?></p>
                                            <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px"><?php echo e($item->name); ?></div>
                                            <span class="alt-font text-small text-uppercase"><?php echo e($item->position); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                
                                <div class="swiper-slide text-center">
                                    <div class="feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                            <img class="rounded-circle xs-w-80px xs-h-80px" src="assets/images/avtar10.jpg" alt="SIRS" />
                                        </div>
                                        <div class="feature-box-content">
                                            <p class="w-85 lg-w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nulla optio consequatur rem reiciendis blanditiis harum accusamus sequi nam! Maiores iure alias laboriosam, exercitationem expedita modi culpa inventore ipsum. Vitae, eveniet voluptatum. In, sint.</p>
                                            <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">Sakshi Malhotra</div>
                                            <span class="alt-font text-small text-uppercase">Microsoft</span>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="swiper-slide text-center">
                                    <div class="feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                            <img class="rounded-circle xs-w-80px xs-h-80px" src="assets/images/avtar11.jpg" alt="SIRS" />
                                        </div>
                                        <div class="feature-box-content">
                                            <p class="w-85 lg-w-100">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ipsa voluptatibus eum at sed error dolorem beatae, impedit aperiam veniam? Laboriosam, aut magnam, est expedita fugiat, deserunt consequuntur aperiam amet ipsa nisi sequi sit.</p>
                                            <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">Bharat Agnihotri</div>
                                            <span class="alt-font text-small text-uppercase">Creative Director</span>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="swiper-slide text-center">
                                    <div class="feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon margin-50px-right xs-margin-15px-right">
                                            <img class="rounded-circle xs-w-80px xs-h-80px" src="assets/images/avtar12.jpg" alt="SIRS" />
                                        </div>
                                        <div class="feature-box-content">
                                            <p class="w-85 lg-w-100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt dignissimos architecto tempora labore incidunt! Iure, optio praesentium. Tempora consectetur aliquid obcaecati voluptatem facere blanditiis, repellendus quam at natus ducimus quia nihil laboriosam odit sit dignissimos!</p>
                                            <div class="text-extra-dark-gray alt-font text-uppercase font-weight-600 line-height-20px">Aditi Shipra</div>
                                            <span class="alt-font text-small text-uppercase">Sales Manager</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php
    $schoolImage = App\Models\SchoolImage::where('status','Active')->first();
    ?>
    <section class="bg-light p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">

                <?php if(isset($schoolImage->image)): ?>
                <div class="col-12 col-xl-6 col-lg-4 cover-background d-flex justify-content-center align-items-center md-h-450px xs-h-300px wow animate__fadeIn" style="background-image: url(<?php echo e(getSchoolImage($schoolImage->image ) ?? ''); ?>)">
                </div>
                <?php else: ?>
                <div class="col-12 col-xl-6 col-lg-4 cover-background d-flex justify-content-center align-items-center md-h-450px xs-h-300px wow animate__fadeIn" style="background-image: url('assets/images/shivaschool.jpg')">
                </div>
                <?php endif; ?>


                <?php
                $juniorSchool = App\Models\JuniorSchool::where('status','Active')->first();
                ?>
                <div class="col-12 col-xl-6 col-lg-8">
                    <div class="d-flex flex-column">
                        <div class="row">
                            <?php if(isset($juniorSchool->image)): ?>
                            <div class="col-12 col-sm-6 cover-background xs-h-300px wow animate__fadeIn" style="background-image: url(<?php echo e(getSchoolImage($juniorSchool->image ) ?? ''); ?>)"></div>
                            <?php else: ?>
                            <div class="col-12 col-sm-6 cover-background xs-h-300px wow animate__fadeIn" style="background-image: url('assets/images/juniorschool.jpg')"></div>
                            <?php endif; ?>
                            <div class="col-12 col-sm-6 bg-light wow animate__fadeIn">
                                <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                    <span class="alt-font font-weight-600 text-extra-dark-gray text-large margin-20px-bottom d-block text-uppercase"><?php echo e($juniorSchool->heading ?? 'Junior School'); ?></span>

                                    <?php if(isset($juniorSchool->description) ): ?>
                                    <?php echo Str::limit($juniorSchool->description, 100) ?? ''; ?>

                                    <?php else: ?>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    <?php endif; ?>
                                    <a href="<?php echo e($juniorSchool->link ?? 'javascript:void()'); ?>" target="_blank" class="btn btn-fancy btn-small btn-royal-blue margin-5px-top">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $seniorSchool = App\Models\SeniorSchool::where('status','Active')->first();
                        ?>
                        <div class="row">
                            <?php if(isset($seniorSchool->image)): ?>
                            <div class="col-12 col-sm-6 cover-background order-sm-2 xs-h-300px wow animate__fadeIn" style="background-image: url(<?php echo e(getSchoolImage($seniorSchool->image ) ?? ''); ?>)"></div>
                            <?php else: ?>
                            <div class="col-12 col-sm-6 cover-background order-sm-2 xs-h-300px wow animate__fadeIn" style="background-image: url('assets/images/seniorschool.jpg')"></div>
                            <?php endif; ?>
                            <div class="col-12 col-sm-6 bg-light order-sm-1 wow animate__fadeIn">
                                <div class="padding-6-rem-lr padding-8-rem-tb md-padding-3-rem-lr md-padding-6-rem-tb xl-padding-3-rem-lr xl-padding-4-rem-tb">
                                    <span class="alt-font font-weight-600 text-extra-dark-gray text-large margin-20px-bottom d-block text-uppercase"><?php echo e($seniorSchool->heading ?? 'Senior School'); ?></span>

                                    <?php if(isset($seniorSchool->description) ): ?>
                                    <?php echo Str::limit($seniorSchool->description, 100) ?? ''; ?>

                                    <?php else: ?>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                    <?php endif; ?>
                                    <a href="<?php echo e($seniorSchool->link ?? 'javascript:void()'); ?>" class="btn btn-fancy btn-small btn-royal-blue margin-5px-top">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $blogs = App\Models\Blogs::where('status', 'Active')->orderBy('id','desc')->limit(3)->get(); 
    ?>
    <section class="">
        <div class="container">
            <div class="row align-items-end margin-6-rem-bottom">
                <div class="col-12 col-xl-5 col-lg-7 text-center text-lg-start wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-orange text-uppercase d-block margin-20px-bottom md-margin-10px-bottom">From the Blog</span>
                    <h3 class="title-small alt-font font-weight-600 text-extra-dark-gray line-height-46px m-lg-0 letter-spacing-minus-1px d-inline-block md-line-height-36px md-w-70 xs-w-100">Transforming Education for the 21st Century</h3>
                </div>
                <div class="col-12 col-xl-7 col-lg-5 text-center text-lg-end wow animate__fadeIn">
                    <a href="#" class="btn btn-fancy btn-large btn-royal-blue">Explore More</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center margin-3-rem-bottom md-no-margin-bottom">
                <?php if(isset($blogs) && count($blogs) >0 ): ?>
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- start services item -->
                <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <a href="<?php echo e(url('blog-detail')); ?>/<?php echo e($blog->id); ?>"><img src="<?php echo e(getBlogImage($blog->image ) ?? ''); ?>

" alt="SIRS" /></a>
                    <div class="position-relative bg-white padding-3-half-rem-all box-shadow-small">
                        <div class="bg-orange text-small alt-font text-white text-uppercase position-absolute font-weight-500 top-minus-15px right-0px padding-5px-tb padding-20px-lr"><?php echo e(\Carbon\Carbon::parse($blog->blogdate)->isoFormat('MMM Do YYYY')); ?></div>
                        <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom"><?php echo e($blog->title); ?></span>
                        <?php echo Str::limit($blog->description, 100) ?? ''; ?>

                        <div class="w-100 h-1px bg-medium-light-gray margin-20px-bottom d-inline-block"></div>
                        <a class="alt-font font-weight-600 text-small text-extra-dark-gray text-salmon-rose-hover text-uppercase d-flex align-items-center" href="<?php echo e(url('blog-detail')); ?>/<?php echo e($blog->id); ?>">Read More<i class="feather icon-feather-arrow-right icon-extra-small ms-auto"></i></a>
                    </div>
                </div>
                <!-- end services item -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <!-- start services item by default data-->
                <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <a href="#"><img src="assets/images/blog1.jpg" alt="SIRS" /></a>
                    <div class="position-relative bg-white padding-3-half-rem-all box-shadow-small">
                        <div class="bg-orange text-small alt-font text-white text-uppercase position-absolute font-weight-500 top-minus-15px right-0px padding-5px-tb padding-20px-lr">20 Sep, 2023</div>
                        <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Blog Title 1 Lorem Ipsum</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque odio veritatis recusandae quos molestias.</p>
                        <div class="w-100 h-1px bg-medium-light-gray margin-20px-bottom d-inline-block"></div>
                        <a class="alt-font font-weight-600 text-small text-extra-dark-gray text-salmon-rose-hover text-uppercase d-flex align-items-center" href="#">Read More<i class="feather icon-feather-arrow-right icon-extra-small ms-auto"></i></a>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <a href="#"><img src="assets/images/blog2.jpg" alt="SIRS" /></a>
                    <div class="position-relative bg-white padding-3-half-rem-all box-shadow-small">
                        <div class="bg-orange text-small alt-font text-white text-uppercase position-absolute font-weight-500 top-minus-15px right-0px padding-5px-tb padding-20px-lr">19 Sep, 2023</div>
                        <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Blog Title 2 Lorem Ipsum</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque odio veritatis recusandae quos molestias.</p>
                        <div class="w-100 h-1px bg-medium-light-gray margin-20px-bottom d-inline-block"></div>
                        <a class="alt-font font-weight-600 text-small text-extra-dark-gray text-salmon-rose-hover text-uppercase d-flex align-items-center" href="#">Read More<i class="feather icon-feather-arrow-right icon-extra-small ms-auto"></i></a>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col wow animate__fadeIn">
                    <a href="#"><img src="assets/images/blog3.jpg" alt="SIRS" /></a>
                    <div class="position-relative bg-white padding-3-half-rem-all box-shadow-small">
                        <div class="bg-orange text-small alt-font text-white text-uppercase position-absolute font-weight-500 top-minus-15px right-0px padding-5px-tb padding-20px-lr">18 Sep, 2023</div>
                        <span class="alt-font font-weight-600 text-extra-medium text-extra-dark-gray d-block margin-10px-bottom">Blog Title 3 Lorem Ipsum</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque odio veritatis recusandae quos molestias.</p>
                        <div class="w-100 h-1px bg-medium-light-gray margin-20px-bottom d-inline-block"></div>
                        <a class="alt-font font-weight-600 text-small text-extra-dark-gray text-salmon-rose-hover text-uppercase d-flex align-items-center" href="#">Read More<i class="feather icon-feather-arrow-right icon-extra-small ms-auto"></i></a>
                    </div>
                </div>
                <!-- end services item -->
                <?php endif; ?>
            </div>
        </div>
    </section>



</div><?php /**PATH C:\xampp\htdocs\shiva-live\resources\views/livewire/frontend/home/homepage.blade.php ENDPATH**/ ?>