<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>Scindia Kanya Vidyalaya - Gwalior</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- style sheets and font icons  -->
    <link href="{{asset('assets/css/font-icons.min.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme-vendors.min.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>
    <!-- start page loader -->
    <div class="page-loader"></div>
    <!-- end page loader -->

    <!-- <nav class="float-nav">
        <ul>
            <li><a href="#" class="floatBtn"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#" class="floatBtn"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#" class="floatBtn"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#" class="floatBtn"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
            <li><a href="#" class="floatBtn"><i class="fab fa-github"></i><span>Github</span></a></li>
            <li><a href="#" class="floatBtn"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
    </nav> -->


    <!-- start header -->
    <header class="home-vertical-portfolio">
        <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/skv-logo.png" class="default-logo" alt="">
                        <img src="assets/images/skv-logo-dark.png" class="alt-logo" alt="">
                        <img src="assets/images/skv-logo-dark.png" class="mobile-logo" alt="">
                    </a>
                </div>
@php
$menus = App\Models\Menu::orderBy('sort_id','asc')->where('status','Active')->limit(5)->get();     
@endphp          
                <div class="col-auto col-lg-8 menu-order px-lg-0">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                @if(isset($menus) )
                       @foreach($menus as $menu)
                         
                            <li class="nav-item">
                                 @if(isset($menu->link) )
                                 <a href="{{ !empty($menu->link) ? route($menu->link) : '#' }}" class="nav-link text-uppercase">{{$menu->name ?? ''}}</a>
                                 @else
                                <a href="javascript:void(0);" class="nav-link text-uppercase">{{$menu->name ?? ''}}</a>
                                @endif 
                            </li>
                    @endforeach
                 @endif     
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end pe-0 font-size-0">

                    <div class="header-push-button">
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
        <!-- end navigation -->
        <!-- start hamburger popup -->
        <div class="hamburger-menu hamburger-menu-half bg-slate-blue lg-w-60 md-w-60 sm-w-100">
            <a href="javascript:void(0);" class="close-menu text-white"><i class="fas fa-times"></i></a>
            <div
                class="d-flex flex-column align-items-center justify-content-center h-100 padding-3-rem-all md-padding-2-rem-lr xs-no-padding-lr">
                <a href="index.html" class=""><img src="assets/images/skv-logo.png" alt="" width="120" /></a>
                <p class="h4 text-white">Scindia Kanya Vidyalaya</p>
                <div class="menu-list-wrapper w-75 lg-w-80 md-w-75 sm-w-60 xs-w-100 position-relative padding-15px-lr margin-3-rem-tb"
                    data-scroll-options='{ "theme": "light" }'>
         <!-- start menu -->
            <ul class="menu-list alt-font w-70 xl-w-100 margin-auto-lr">
@php
$menus = App\Models\Menu::orderBy('sort_id','asc')->where('status','Active')->get();     
@endphp    
          @if(isset($menus) )
            @foreach($menus as $menu)

@php
$submenusTotal =App\Models\Submenu::where('menu_id', $menu->id)->count();

$submenus = App\Models\Submenu::with(['Menu'])
            ->where('menu_id', $menu->id)
            ->orderBy('sort_id')
            ->where('status', 'Active')
            ->get();   
@endphp
                        <li class="menu-list-item">
                             @if(isset($menu->link) ) 
                               <a href="{{ !empty($menu->link) ? route($menu->link) : '#' }}">{{$menu->name ?? ''}}  </a>
                             @else    
                               <a href="javascript:void(0);">{{$menu->name ?? ''}}  </a>
                             @endif  
                                   @if($submenusTotal>0)
                                    <span class="menu-toggle"></span>
                                   @endif 

             <!-- submenus start -->
               @if(isset($submenus) )    
                             <ul class="sub-menu-item">
                    @foreach($submenus as $submenu)
                                 @php            
                                 $page = App\Models\CreatePage::where('submenu_id', $submenu->id)
                                ->with(['SubMenu'])
                                ->where('status', 'Active')
                                ->first();
                                 @endphp 

                          @if($submenu->cms=="Yes")
                               @if($page)
                                <li class="menu-list-item">
                                    <a href="{{ route('detail_page', ['page_id' => $page->id ?? '', 'slug' => $page->SubMenu->slug ?? '']) }}">{{$submenu->name ?? ''}} </a>
                                </li>
                               @endif 
                               @else
                                <li class="menu-list-item">
                                    <a href="{{ isset($submenu->pname) ? route($submenu->pname) : '#' }}">{{$submenu->name ?? ''}} </a>
                                </li>
                               @endif
                        @endforeach   
                            </ul> 
              <!-- submenus end -->
                 @endif                
                        </li>
      @endforeach
            @endif                    
                    </ul>
            <!-- end menu -->
                </div>

@php
$facebook = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header' , 'name' =>'facebook' ])->first();
$twitter = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header', 'name' =>'twitter'])->first();
$instagram = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header','name' =>'instagram'])->first();
$linkedin = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header','name' =>'linkedin'])->first();
$youtube = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Header','name' =>'youtube'])->first();
@endphp                
                <div class="text-center elements-social social-icon-style-12 d-none d-md-inline-block">
                    <ul class="small-icon light">
                        @if($facebook) 
                        <li><a class="facebook" href="{{$facebook->link ?? ''}}" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        @else 
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        @endif  
                        @if($youtube)
                        <li><a class="youtube" href="{{$youtube->link ?? ''}}" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        @else
                        <li><a class="youtube" href="http://www.dribbble.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        @endif 
                        @if($twitter)
                        <li><a class="twitter" href="{{$twitter->link ?? ''}}" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        @else
                        <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                       @endif  
                       @if($instagram)
                       <li><a class="instagram" href="{{$instagram->link ?? ''}}" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li> 
                       @else
                        <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                       @endif             
                       @if($linkedin)
                       <li><a class="linkedin" href="{{$linkedin->link ?? ''}}" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                       @else
                        <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                       @endif             
                    </ul>
                </div>
            </div>
        </div>
        <!-- end hamburger popup -->
    </header>
    <!-- end header -->
    <!-- start slider section -->


     {{ $slot }}


@php
$facebook = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer' , 'name' =>'facebook' ])->first();
$twitter = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer', 'name' =>'twitter'])->first();
$instagram = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer','name' =>'instagram'])->first();
$linkedin = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer','name' =>'linkedin'])->first();
$youtube = App\Models\SocialApp::orderBy('sort_id','asc')->where(['status' => 'Active' , 'category' =>'Footer','name' =>'youtube'])->first();
@endphp
    <!-- start footer -->
    <footer class="footer-dark bg-slate-blue">
        <div class="footer-top padding-40px-tb border-bottom border-color-white-transparent">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12 text-center">
                        <div class="social-icon-style-10">
                            <ul class="medium-icon">
                              @if($facebook)
                              <li><a class="facebook text-white" href="{{$facebook->link ?? ''}}" target="_blank"><i
                                            class="fab fa-facebook-f"></i><span></span></a></li>
                              
                              @else   
                              <li><a class="facebook text-white" href="#" target="_blank"><i
                                            class="fab fa-facebook-f"></i><span></span></a></li>
                              @endif 

                               @if($twitter)             
                                <li><a class="twitter text-white" href="{{$twitter->link ?? ''}}" target="_blank"><i
                                            class="fab fa-twitter"></i><span></span></a></li>

                               @else
                              <li><a class="twitter text-white" href="#" target="_blank"><i
                                            class="fab fa-twitter"></i><span></span></a></li>
                               @endif 

                               @if($instagram)
                                <li><a class="instagram text-white" href="{{$instagram->link ?? ''}}" target="_blank"><i
                                            class="fab fa-instagram"></i><span></span></a></li>
                               @else
                                <li><a class="instagram text-white" href="#" target="_blank"><i
                                            class="fab fa-instagram"></i><span></span></a></li>
                               @endif      
                               @if($linkedin)       
                                <li><a class="linkedin text-white" href="{{$linkedin->link ?? ''}}" target="_blank"><i
                                            class="fab fa-linkedin-in"></i><span></span></a></li>
                               @else
                                 <li><a class="linkedin text-white" href="#" target="_blank"><i
                                            class="fab fa-linkedin-in"></i><span></span></a></li>
                               @endif 

                               @if($youtube)             
                                <li><a class="youtube text-white" href="{{$youtube->link ?? ''}}" target="_blank"><i
                                            class="fab fa-youtube"></i><span></span></a></li>
                               @else
                               <li><a class="youtube text-white" href="#" target="_blank"><i
                                            class="fab fa-youtube"></i><span></span></a></li>
                               @endif             
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 justify-content-center">
                    <!-- start footer column -->
                    <div class="col col-xl-4 col-lg md-margin-50px-bottom xs-margin-25px-bottom">
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Scindia
                            Kanya Vidyalaya</span>
                        <p class="mt-4">We believe that educating a girl is equal to educating a family. Our institution
                            is
                            associated with education along with preservation of customs and culture. We teach our
                            students to treat everyone with respect and humility. To achieve all round development and
                            character building the school has a strict discipline policy.</p>
                        <a href="" class="btn btn-neon-orange text-white btn-small">Read More</a>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col col-xl-2 col-lg md-margin-50px-bottom xs-margin-25px-bottom">
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Quick
                            Links</span>
                        <ul>
                            <li><a href="javascript:void()">About School</a></li>
                            <li><a href="javascript:void()">Academics</a></li>
                            <li><a href="javascript:void()">Admissions</a></li>
                            <li><a href="javascript:void()">Activities</a></li>
                            <li><a href="javascript:void()">Societies</a></li>
                            <li><a href="javascript:void()">News & Events</a></li>
                            <li><a href="javascript:void()">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-12 col-lg-3 col-sm-6 xs-margin-25px-bottom">
                        <span
                            class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Get
                            in touch</span>
                        <p class="w-85 margin-15px-bottom">Scindia Kanya Vidyalaya <br>
                            Moti Mahal Road <br>
                            Gwalior - 474007 <br>
                            (M.P.) INDIA</p>
                        <div><i
                                class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i>+1
                            234 567 8910</div>
                        <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a
                                href="#">info@yourdomain.com</a></div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col col-xl-3 col-lg-4 col-sm-8 text-sm-center text-lg-start last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Subscribe to
                            newsletter</span>
                        <p class="mb-5">Enter your email address for receiving valuable newsletters.</p>
                        <form action="#" method="post">
                            <div class="newsletter-style-03 position-relative">
                                <input class="small-input bg-white border-transperent rounded m-0 required" name="email"
                                    placeholder="Enter your email address" type="email">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-neon-orange rounded-end text-medium submit" type="submit"><i
                                        class="feather icon-feather-mail m-0"></i></button>
                                <div class="form-results rounded position-absolute d-none"></div>
                            </div>
                        </form>
                    </div>
                    <!-- end footer column -->
                </div>
            </div>
        </div>
        <div class="footer-bottom padding-35px-tb bg-dark-slate-blue">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 sm-margin-10px-bottom xs-margin-15px-bottom">
                        <ul
                            class="footer-horizontal-link d-flex flex-column flex-sm-row justify-content-sm-center justify-content-md-start">
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Legal notice</a></li>
                            <li><a href="#">Terms of service</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 text-start text-sm-center text-md-end last-paragraph-no-margin">
                        <p>&copy; 2024 All Rights Reserved. Site By <a href="https://www.dukeinfosys.com/"
                                target="_blank" class="text-decoration-line-bottom text-white">Duke Infosys</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- popup -->
    <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-md-10 bg-white modal-popup-main">
                    <div class="row">
                        <div
                            class="col-12 col-sm-7 order-2 order-sm-1 newsletter-popup padding-6-rem-all lg-padding-4-rem-all xs-padding-3-rem-all">
                            <span
                                class="text-extra-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Admission
                                Open for 2024-25</span>
                            <p class="mb-2">Registrations are open from the month of July for the next session. </p>
                            <p class="mb-2"><strong>Online form :</strong> Click here for Online form</p>
                            <p class="mb-5"><strong>Offline form :</strong> Click here to download form for submission
                                personally or by post.</p>

                            <input id="newsletter-off" class="d-none" type="checkbox" name="newsletter-off" />
                            <label for="newsletter-off" class="text-small"><span></span>Don't show this popup
                                again</label>
                        </div>
                        <div class="col-12 col-sm-5 cover-background order-1 order-sm-2 xs-h-150px"
                            style="background-image:url('assets/images/popup.jpg');">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- whatsapp floating -->
    <div class="floating_btn_wa">
        <a target="_blank" href="https://wa.me/">
            <div class="contact_icon">
                <i class="fab fa-whatsapp my-float"></i>
            </div>
        </a>
        <p class="text_icon">Talk to us?</p>
    </div>


    <!-- floating btn for desktop/laptop -->
    <div class="banner_floating_sec d-md-block d-sm-none d-none">
        <div class="floating_btn floating_btn_1"><a href="#"><span>Apply</span> </a></div>
        <div class="floating_btn floating_btn_2"><a href="#"><span>Enquiry</span> </a></div>
    </div>

    <!-- floating btn for mobile view -->
    <div class="banner_floating_sec_mobile d-md-none d-sm-block d-block">
        <div class="row">
            <div class="col-6"><a href="#" class="btn btn-neon-orange w-100">Apply</a></div>
            <div class="col-6"><a href="#" class="btn btn-success w-100">Enquiry</a></div>
        </div>
    </div>


    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
    <!-- end scroll to top -->

    <!-- javascript -->
    <script type="text/javascript" src="{{asset('assets')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/main.js"></script>


    </bod>

</html>