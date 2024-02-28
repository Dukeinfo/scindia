
    <section class="parallax p-0 w-100 position-relative" data-parallax-background-ratio="0.5">
        <video autoplay muted loop id="myVideo">
            <source src="assets/videos/intro1.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="down-section text-center"><a href="#about" class="section-link up-down-ani"><i
                    class="ti-mouse icon-small text-white"></i></a></div>
    </section>
    <!-- end slider section -->


    <section class="half-section wow animate__fadeIn border-bottom border-color-medium-gray">
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 row-cols-md-3 row-cols-sm-2">

                <div
                    class="col text-center md-margin-50px-bottom wow animate__fadeIn border-right border-color-medium-gray">
                    <a href="#" class="text-neon-orange text-slate-blue-hover">
                        <i class="line-icon-Address-Book icon-large padding-20px-bottom"></i>
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-uppercase d-block">Admission
                            Process</span>
                    </a>
                </div>


                <div
                    class="col text-center md-margin-50px-bottom wow animate__fadeIn border-right border-color-medium-gray">
                    <a href="#" class="text-neon-orange text-slate-blue-hover">
                        <i class="line-icon-Money-Bag icon-large padding-20px-bottom"></i>
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-uppercase d-block">Fee
                            Structure</span>
                    </a>
                </div>


                <div
                    class="col text-center md-margin-50px-bottom wow animate__fadeIn border-right border-color-medium-gray">
                    <a href="#" class="text-neon-orange text-slate-blue-hover">
                        <i class="line-icon-File-ClipboardFileText icon-large padding-20px-bottom"></i>
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-uppercase d-block">Upcoming
                            Events</span>
                    </a>
                </div>


                <div
                    class="col text-center sm-margin-50px-bottom wow animate__fadeIn border-right border-color-medium-gray">
                    <a href="#" class="text-neon-orange text-slate-blue-hover">
                        <i class="line-icon-Business-Woman icon-large padding-20px-bottom"></i>
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-uppercase d-block">SKV
                            Alumni</span>
                    </a>
                </div>


                <div class="col text-center wow animate__fadeIn">
                    <a href="#" class="text-neon-orange text-slate-blue-hover">
                        <i class="line-icon-Newspaper-2 icon-large padding-20px-bottom"></i>
                        <span class="alt-font font-weight-600 text-extra-dark-gray text-uppercase d-block">In the
                            News</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

<?php
    $contentFirst = App\Models\HomeContentFirst::orderBy('sort_id','asc')->where(['status' => 'Active'])->first();
?>

<!-- first (title1,title2,title3,description,youtube_link,link)-->
    <section class="pt-5 background-position-left-bottom  background-no-repeat"
        style="background-image:url('assets/images/home-travel-agency-about-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center text-center py-4">

                  <?php if(isset($contentFirst)): ?>
                   <h2 class="custom-title h1 font-weight-600 text-neon-orange wow animate__fadeIn mb-3">
                        <?php echo e($contentFirst->title1); ?></h2>
                    <h1
                        class="alt-font title-small font-weight-400 text-extra-dark-gray margin-45px-bottom letter-spacing-minus-1-half md-margin-35px-bottom wow animate__fadeIn">
                        <?php echo e($contentFirst->title2); ?> <span class="font-weight-700"><?php echo e($contentFirst->title3); ?></span></h1>
                  <?php else: ?>
                    <h2 class="custom-title h1 font-weight-600 text-neon-orange wow animate__fadeIn mb-3">
                        Scindia Kanya Vidyalaya</h2>
                    <h1
                        class="alt-font title-small font-weight-400 text-extra-dark-gray margin-45px-bottom letter-spacing-minus-1-half md-margin-35px-bottom wow animate__fadeIn">
                        Ranked No. 1 <span class="font-weight-700">Girl's Residential School</span></h1>
                   <?php endif; ?> 

                </div>
            </div>
            <div class="row align-items-center">
                <div
                    class="col-12 col-lg-6 position-relative z-index-1 md-margin-50px-bottom sm-margin-35px-bottom wow animate__fadeIn">
                    <div class="">
                        <img src="assets/images/about.jpg" alt="" />
                        <a href="https://www.youtube.com/watch?v=jcepCYvIw7M"
                            class="popup-youtube absolute-middle-center video-icon-box video-icon-large">
                            <span>
                                <span class="video-icon bg-white box-shadow-extra-large">
                                    <i class="icon-simple-line-control-play text-neon-orange"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">

                   <?php if(isset($contentFirst)): ?>

                   <?php echo Str::limit($contentFirst->description, 487) ?? ''; ?>

                      
                   <?php else: ?> 
                   <!-- BY DEFAULT -->
                    <p>SKV is one of India's top residential schools built with the agenda of providing progressive
                        modern education to girls. Founded by Late Rajmata of Gwalior Shrimant Vijaya Raje Scindia, SKV
                        was inaugurated by the President of India, Dr. Rajendra Prasad.</p>
                    <p>Established in 1956, we are one of the best academic boarding schools to enrich females with
                        experiential and advanced learning. Our goal is to impart quality education by aiming to become
                        the best school for girls where we empower and transform them into role models of a better
                        tomorrow.</p>
                   <?php endif; ?>     
                    <div class="margin-15px-top d-inline-block wow animate__fadeIn">
                        <a href="<?php echo e($contentFirst->link ?? 'javascript:void()'); ?>"
                            class="btn btn-fancy btn-small btn-neon-orange margin-35px-right sm-margin-15px-right" target="_blank">About
                            School</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    $contentSecond = App\Models\HomeContentSecond::orderBy('sort_id','asc')->where(['status' => 'Active'])->first();
?>

<!-- second (image,title,des,link)-->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pe-lg-0 d-flex md-margin-30px-bottom">

                    <?php if(isset($contentSecond->image)): ?>
                    <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background"
                        style="background-image: url(<?php echo e(getPrincipalDeskImage($contentSecond->image ) ?? ''); ?>);"></div>
                    <?php else: ?>
                    <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background"
                        style="background-image:url('assets/images/principal.jpg');"></div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-lg-4 col-md-6 ps-lg-0 d-flex sm-margin-30px-bottom">
                    <?php if(isset($contentSecond)): ?>
                    <div
                        class="justify-content-center w-100 d-flex flex-column bg-neon-orange padding-3-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                        <span
                            class="text-extra-large alt-font font-weight-500 text-white margin-20px-bottom d-block"><?php echo e($contentSecond->title); ?></span>
                        <p class="text-white"> 
                        <?php echo e(Str::limit($contentSecond->description, 295) ?? ''); ?>

                        </p>
                        <p class="text-white">
                            Mrs. Nishi Misra <br>
                            (Principal)
                        </p>
                        <a href="<?php echo e($contentSecond->link ?? 'javascript:void()'); ?>"
                            class="btn btn-large btn-link text-white text-white-hover align-self-start" target="_blank">Explore More</a>
                    </div>
                    <?php else: ?>
                    <!-- BY DEFAULT DATA -->
                    <div
                        class="justify-content-center w-100 d-flex flex-column bg-neon-orange padding-3-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
                        <span
                            class="text-extra-large alt-font font-weight-500 text-white margin-20px-bottom d-block">Principal's
                            Desk</span>
                        <p class="text-white">I welcome you into this new and exciting world. I invite you to write your
                            own story and decorate it with the brightest pictures, the happiest moments, the strongest
                            friendships, the most vibrant experiences and the most enduring learning.</p>
                        <p class="text-white">
                            Mrs. Nishi Misra <br>
                            (Principal)
                        </p>
                        <a href="javascript:void()"
                            class="btn btn-large btn-link text-white text-white-hover align-self-start">Explore More</a>
                    </div>
                   <?php endif; ?> 
                </div>
<?php
    $contentThird = App\Models\HomeContentThird::where('status', 'Active')->get();
 ?>
<!-- third (title,date,link)-->                
                <div class="col-12 col-lg-4 col-md-6">
                    <div
                        class="bg-white padding-3-half-rem-lr padding-3-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-all sm-padding-4-rem-all last-paragraph-no-margin mb-3">
                        <span
                            class="text-extra-large alt-font text-extra-dark-gray font-weight-500 d-block margin-20px-bottom"><i
                                class="far fa-file-alt me-2"></i> Notice Board</span>

                        <marquee behavior="scroll" direction="up" scrollamount="3" onmouseover="this.stop();"
                            onmouseout="this.start();" style="height: 320px;">

                            <?php if(isset($contentThird) && count($contentThird) >0 ): ?>
                               <?php $__currentLoopData = $contentThird; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $third): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" class="text-extra-dark-gray text-neon-orange-hover py-2">
                                <?php echo e($third->title); ?>

                                <p class="mb-0 mt-1 small text-muted"><i class="far fa-calendar-alt me-1"></i><?php echo e($third->date); ?>

                                </p>
                            </a>

                            <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            <?php else: ?>
                            <!-- BY DEFAULT DATA -->
                            <a href="#" class="text-extra-dark-gray text-neon-orange-hover py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, harum.
                                <p class="mb-0 mt-1 small text-muted"><i class="far fa-calendar-alt me-1"></i>11-11-2022
                                </p>
                            </a>
                            <hr>
                            <a href="#" class="text-extra-dark-gray text-neon-orange-hover py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, harum.
                                <p class="mb-0 mt-1 small text-muted"><i class="far fa-calendar-alt me-1"></i>12-10-2022
                                </p>
                            </a>
                            <hr>
                            <a href="#" class="text-extra-dark-gray text-neon-orange-hover py-2">
                                Lorem ipsum dolor sit amet.
                                <p class="mb-0 mt-1 small text-muted"><i class="far fa-calendar-alt me-1"></i>19-08-2022
                                </p>
                            </a>
                            <hr>
                            <a href="#" class="text-extra-dark-gray text-neon-orange-hover py-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, harum.
                                <p class="mb-0 mt-1 small text-muted"><i class="far fa-calendar-alt me-1"></i>11-06-2022
                                </p>
                            </a>
                            <hr>
                          <?php endif; ?>
                        </marquee>
                    </div>
                    <a href="javascript:void()"
                        class="btn btn-transparent-slate-blue btn-fancy btn-medium d-block margin-20px-top sm-margin-20px-top">View
                        all Notices</a>
                </div>
            </div>
        </div>
    </section>


<?php
    $contentFourth = App\Models\HomeContentForth::orderBy('sort_id','asc')->where(['status' => 'Active'])->first();
?>

<!-- fourth (title,title2,link)-->
    <section class="bg-white">
        <div class="container">
            <div class="row margin-6-rem-bottom md-margin-5-rem-bottom align-items-center">
                <div
                    class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn">
                    <h4
                        class="alt-font font-weight-600 text-extra-dark-gray margin-5px-bottom letter-spacing-minus-1px">
                        Life @ SKV</h4>
                    <p class="m-0 d-block">This is the most popular destination in the last month</p>
                </div>
                <div class="col-12 col-lg-6 col-md-5 text-center text-md-end wow animate__fadeIn">
                    <a href="<?php echo e($contentFourth->link ?? 'javascript:void()'); ?>" class="btn btn-fancy btn-transparent-slate-blue btn-medium" target="_blank">Explore
                        More</a>
                </div>
            </div>

<!-- fifth (image,title,title2)-->
            <div class="row">
                <div class="col-12 blog-content">
                    <ul
                        class="blog-metro blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large">
                        <li class="grid-sizer"></li>

                        <li class="grid-item grid-item-double last-paragraph-no-margin wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <a href="#"><img src="assets/images/life5.jpg" alt=""></a>
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Boarding Life</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">A
                                            safe and Comfortable Home away from Home</a>
                                    </div>
                                </div>
                            </div>
                        </li>

<!-- sixth (image,title,title2)-->
                        <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <img src="assets/images/life1.jpg" alt="">
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Academics</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">Education
                                            is the King</a>
                                    </div>
                                </div>
                            </div>
                        </li>

<!-- seventh (image,title,title2)-->
                        <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <img src="assets/images/life4.jpg" alt="">
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Heritage</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">Historical
                                            Foundation</a>
                                    </div>
                                </div>
                            </div>
                        </li>

<!-- eight (image,title,title2)-->
                        <li class="grid-item grid-item-double wow animate__fadeIn last-paragraph-no-margin">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <img src="assets/images/life2.jpg" alt="">
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Sports</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">World
                                            class sporting facilities</a>
                                    </div>
                                </div>
                            </div>
                        </li>

<!-- nineth (image,title,title2)-->
                        <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <img src="assets/images/life3.jpg" alt="">
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Infrastrucre</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">State
                                            of art Infrastructure</a>
                                    </div>
                                </div>
                            </div>
                        </li>

<!-- tenth (image,title,title2)-->
                        <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                            <div class="blog-post">
                                <div class="blog-post-image bg-dark-slate-blue">
                                    <img src="assets/images/life6.jpg" alt="">
                                    <div class="blog-overlay"></div>
                                </div>
                                <div
                                    class="post-details d-flex flex-column align-item-start padding-3-half-rem-all xl-padding-3-rem-all">
                                    <div class="mb-auto w-100">
                                        <a href="javascript:void()" class="blog-category alt-font">Leadership</a>
                                    </div>
                                    <div class="align-self-end w-100">
                                        <a href="javascript:void()"
                                            class="alt-font text-white text-extra-large mb-0 d-block w-85 xl-w-100">Expertise
                                            in varaiety of fields</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

<!-- facility other -->
    <section class="big-section bg-very-light-pink position-relative">
        <div
            class="col-12 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-03 letter-spacing-minus-3px d-none d-lg-block wow animate__fadeIn">
            skv</div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 col-xl-4 col-lg-4 col-md-8 position-relative md-margin-8-rem-bottom xs-margin-10-rem-bottom wow animate__fadeIn">
                    <span
                        class="alt-font font-weight-500 text-neon-orange text-uppercase margin-15px-bottom d-inline-block sm-margin-5px-bottom">Our
                        campus</span>
                    <h5 class="alt-font font-weight-500 text-extra-dark-gray">Facilities We Endeavour</h5>
                    <p class="w-85 margin-35px-bottom lg-w-100">The inspiring and motivating environment of the school
                        helps the child acquire not only academic excellence but also a compassionate and a poised
                        disposition.</p>
                    <div
                        class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 white rounded-circle">
                        <i class="feather icon-feather-arrow-right"></i>
                    </div>
                    <div
                        class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 white rounded-circle">
                        <i class="feather icon-feather-arrow-left"></i>
                    </div>
                </div>

                <div class="col-12 col-lg-7 offset-xl-1 wow animate__fadeIn">
                    <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                        <div class="swiper-container white-move"
                            data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 40, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                          <!-- facility slider -->
                                <div
                                    class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="assets/images/skv1.jpg" alt="" />
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <span
                                                class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-orange margin-25px-bottom font-weight-500 d-inline-block">Classroom
                                                Learning</span>
                                            <div
                                                class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">
                                                Interactive Whiteboards & Projection Screens</div>
                                            <a href="#"
                                                class="btn btn-fancy btn-very-small btn-white margin-15px-top">Explore
                                                more</a>
                                        </div>
                                    </div>
                                </div>


                                <div
                                    class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="assets/images/skv2.jpg" alt="" />
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <span
                                                class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-orange margin-25px-bottom font-weight-500 d-inline-block">Laboratories</span>
                                            <div
                                                class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">
                                                State of the art laboratory equipments</div>
                                            <a href="#"
                                                class="btn btn-fancy btn-very-small btn-white margin-15px-top">Explore
                                                more</a>
                                        </div>
                                    </div>
                                </div>


                                <div
                                    class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="assets/images/skv3.jpg" alt="" />
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <span
                                                class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-orange margin-25px-bottom font-weight-500 d-inline-block">Library</span>
                                            <div
                                                class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">
                                                Equiped with vast range of Books & Story telling corners</div>
                                            <a href="#"
                                                class="btn btn-fancy btn-very-small btn-white margin-15px-top">Explore
                                                more</a>
                                        </div>
                                    </div>
                                </div>


                                <div
                                    class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="assets/images/skv4.jpg" alt="" />
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <span
                                                class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-orange margin-25px-bottom font-weight-500 d-inline-block">Studios</span>
                                            <div
                                                class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">
                                                Studios for Dance, Music & Theatre for ample practice</div>
                                            <a href="#"
                                                class="btn btn-fancy btn-very-small btn-white margin-15px-top">Explore
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                      <!-- facility slider  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wow animate__fadeIn padding-3-rem-tb">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2 align-items-center justify-content-center">

                <div class="col text-center sm-margin-40px-bottom">
                    <p class="mb-0">
                        <i class="line-icon-Student-Female icon-medium padding-10px-bottom text-neon-orange"></i>
                    </p>
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="450"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Students</span>
                </div>


                <div class="col text-center sm-margin-40px-bottom">
                    <p class="mb-0">
                        <i class="line-icon-Trophy icon-medium padding-10px-bottom text-neon-orange"></i>
                    </p>
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="34"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Awards</span>
                </div>


                <div class="col text-center xs-margin-40px-bottom">
                    <p class="mb-0">
                        <i class="line-icon-Book icon-medium padding-10px-bottom text-neon-orange"></i>
                    </p>
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="68"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Years of Excellence</span>
                </div>


                <div class="col text-center">
                    <p class="mb-0">
                        <i class="line-icon-Teacher icon-medium padding-10px-bottom text-neon-orange"></i>
                    </p>
                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"
                        data-to="120"></h4>
                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Teachers</span>
                </div>

            </div>
        </div>
    </section>

    <section class="border-top border-color-medium-gray pb-5">
        <div class="container">
            <div class="row margin-5-rem-bottom xs-margin-4-rem-bottom align-items-center">
                <div
                    class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn">
                    <h4
                        class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px margin-5px-bottom">
                        Student Speaks</h4>
                    <p class="m-0 d-block">Read testimonials from our happy students</p>
                </div>
                <div class="col-12 col-lg-6 col-md-5 text-center text-md-end">
                    <a href="javascript:void()" class="btn btn-fancy btn-transparent-slate-blue btn-medium">See all
                        reviews</a>
                </div>
            </div>
            <div class="row margin-6-rem-bottom xs-margin-2-half-rem-bottom">
                <div class="col-12 p-0 wow animate__fadeIn">
                    <div class="swiper-simple-arrow-style-1">
                        <div class="swiper-container padding-15px-all black-move"
                            data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-4", "prevEl": ".swiper-button-previous-nav-4" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide text-center">
                                    <div
                                        class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                        <div class="feature-box-icon margin-25px-right">
                                            <img class="rounded-circle w-65px h-65px" src="assets/images/noimg.jpg"
                                                alt="Herman Miller" />
                                        </div>
                                        <div class="feature-box-content">
                                            <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">
                                                Rashmi Malhotra</div>
                                            <span class="text-small">Company ame</span>
                                        </div>
                                        <p class="margin-30px-top">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Nostrum veritatis ipsa autem, omnis commodi distinctio atque iusto
                                            culpa!</p>
                                    </div>
                                </div>


                                <div class="swiper-slide text-center">
                                    <div
                                        class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                        <div class="feature-box-icon margin-20px-right">
                                            <img class="rounded-circle w-65px h-65px" src="assets/images/noimg.jpg"
                                                alt="Jeremy Girard" />
                                        </div>
                                        <div class="feature-box-content">
                                            <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">
                                                Kamini Kharbanda</div>
                                            <span class="text-small">Microsoft Corporation</span>
                                        </div>
                                        <p class="margin-30px-top">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Odit alias magni tempore maiores amet magnam ab voluptas numquam
                                            distinctio.</p>
                                    </div>
                                </div>


                                <div class="swiper-slide text-center">
                                    <div
                                        class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                        <div class="feature-box-icon margin-20px-right">
                                            <img class="rounded-circle w-65px h-65px" src="assets/images/noimg.jpg"
                                                alt="Jeremy Girard" />
                                        </div>
                                        <div class="feature-box-content">
                                            <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">
                                                Shikha Samson</div>
                                            <span class="text-small">Envato Market</span>
                                        </div>
                                        <p class="margin-30px-top">Lorem ipsum dolor, sit amet consectetur adipisicing
                                            elit. Blanditiis, est. Cumque ex laboriosam placeat. Sequi nihil distinctio
                                            dicta.</p>
                                    </div>
                                </div>


                                <div class="swiper-slide text-center">
                                    <div
                                        class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                        <div class="feature-box-icon margin-20px-right">
                                            <img class="rounded-circle w-65px h-65px" src="assets/images/noimg.jpg"
                                                alt="Jeremy Girard" />
                                        </div>
                                        <div class="feature-box-content">
                                            <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">
                                                Gitikia Narvekar</div>
                                            <span class="text-small">Google Marketing</span>
                                        </div>
                                        <p class="margin-30px-top">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Sed minus eveniet optio quidem quasi aperiam exercitationem neque
                                            dolorum?</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-md-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">Events at SKV
                    </h4>
                    <p class="mx-auto md-w-100 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga autem
                        ut aspernatur, iste sit vel sunt necessitatibus nihil exercitationem enim numquam. Quasi sunt
                        consectetur nesciunt quaerat nobis.</p>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-12 col-lg-8 blog-content padding-50px-right d-flex flex-wrap align-items-start md-padding-15px-right md-margin-70px-bottom sm-margin-50px-bottom">

                    <div class="col-12 blog-post-content bg-white p-0 text-center">
                        <div class="blog-image"><a href="javascript:void()"><img
                                    src="assets/images/latest-news-img10.jpg" alt="" /></a></div>
                        <div class="blog-text d-inline-block w-100">
                            <div
                                class="content padding-5-half-rem-all lg-padding-4-half-rem-all xs-padding-20px-lr xs-padding-40px-tb position-relative mx-auto w-90 lg-w-100">
                                <div
                                    class="blog-details-overlap text-small font-weight-500 bg-neon-orange alt-font text-white text-uppercase">
                                    <a href="javascript:void()" class="text-white">05 September 2018</a> <span
                                        class="margin-5px-lr">•</span> <a href="javascript:void()"
                                        class="text-white">Academics</a>
                                </div>
                                <h6 class="alt-font font-weight-500"><a href="javascript:void()"
                                        class="text-extra-dark-gray text-neon-orange-hover">Make business easy with
                                        beautiful application download store</a></h6>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    ipsum has been the industry's standard dummy text ever since the 1500s, unknown
                                    printer took a galley of type...</p>
                                <a href="javascript:void()"
                                    class="btn btn-small btn-transparent-slate-blue btn-fancy margin-10px-top">Continue
                                    Reading <span class="bg-extra-dark-gray"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-4 blog-sidebar">
                    <ul class="blog-widget position-relative">

                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-bottom">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img12.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">11 February 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-neon-orange-hover">Tools
                                        i use to learn, work and travel...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-tb">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img11.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">15 February 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-neon-orange-hover">Without
                                        good design it’s easy to miss the mark...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-tb">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img13.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">25 February 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-neon-orange-hover">Everybody
                                        can be great because anybody can...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-tb">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img16.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">23 January 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-neon-orange-hover">Styles
                                        come and go design is a language...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex border-bottom border-color-extra-light-gray padding-30px-tb">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img14.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">18 January 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-neon-orange-hover">Design
                                        is inherently optimistic power...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex padding-30px-top">
                                <figure class="flex-shrink-0">
                                    <a href="javascript:void()"><img src="assets/images/latest-news-img15.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="media-body flex-grow-1">
                                    <a href="javascript:void()"
                                        class="text-extra-small alt-font d-block margin-5px-bottom">19 December 2023</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-20px text-neon-orange-hover">Alone
                                        we can do so little together we can do...</a>
                                    <span class="text-extra-small alt-font">By <a href="javascript:void()">SKV
                                            Admin</a></span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="javascript:void()"
                        class="btn btn-neon-orange btn-large text-extra-dark-gray margin-70px-top d-inline-block md-margin-40px-top sm-margin-20px-top">View
                        all articles</a>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-100px-tb md-padding-75px-tb sm-padding-40px-tb wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-md-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">We are affiliated
                        with</h4>
                    <p class="mx-auto md-w-100 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem non
                        vel, fugit ea earum animi optio a iure vitae, similique, voluptatum tenetur officia nostrum
                        laudantium. Rerum, dolor</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="swiper-container text-center"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 7 }, "992": { "slidesPerView": 4 }, "365": { "slidesPerView": 3 } } }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo1.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo2.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo3.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo4.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo5.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo6.png" class="border">
                                </a>
                            </div>
                            <div class="swiper-slide p-2">
                                <a href="javascript:void()" target="_blank">
                                    <img alt="" src="assets/images/partners/logo7.png" class="border">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><?php /**PATH C:\xampp\htdocs\scindia\resources\views/livewire/frontend/home/homepage.blade.php ENDPATH**/ ?>