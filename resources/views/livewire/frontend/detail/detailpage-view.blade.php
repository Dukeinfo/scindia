    <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url({{ $backimage ? getsubmenuImage($backimage) : asset('assets/images/parallaxbg_header.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">{{Str::title( $display_title) }}</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="">{{Str::title( $display_heading) }}</span><br>{{Str::title( $display_subheading) }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


 @php
  $menuName =  App\Models\Menu::where('status','Active')->where('id',$menu_id )->first();
 @endphp 
    <!-- start page title -->
    <section class="wow animate__fadeIn bg-slate-blue padding-20px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom d-inline-block"> 
                 @if($menuName) 
                     @if($menuName->id!=1)  
                           {{$menuName->name}}    
                     @endif
                 @endif
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        

                        <li><a href="{{url('/')}}" class="text-white">Home</a></li>
                         @if($menuName) 
                            @if($menuName->id!=1) 
                              <li><a href="javascript:void()" class="text-white"> {{$menuName->name}}</a></li>
                            @endif
                        @endif
                        <li class="text-neon-orange">
                            {{Str::title( $name) }}
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
                    <div id="">
                        <div id="">
                            <h6 class="alt-font text-extra-dark-gray font-weight-500 w-85 xl-w-100 text-uppercase mb-0">In this section</h6>
                            <div class="alt-font font-weight-500 d-flex">
                                <span class="flex-shrink-0 w-30px h-1px bg-dark-purple opacity-7 align-self-center margin-20px-right"></span>
                                <div class="flex-grow-1"><span class="text-dark text-uppercase">&nbsp;</span>
                                </div>
                            </div>
    
                            <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-extra-dark-gray my-4">
                                @php
$submenusIds = App\Models\CreatePage::where('menu_id',$menu_id)->pluck('submenu_id');

$submenus= App\Models\Submenu::whereIn('id', $submenusIds)->where('status', 'Active')->get(); 
@endphp
@if(isset($submenus) && count($submenus)>0  )
          @foreach($submenus as $key => $submenu) 
@php
$page = App\Models\CreatePage::where('submenu_id', $submenu->id)
            ->with(['SubMenu'])
            ->orderBy('sort_id', 'asc')
            ->where('status', 'Active')
            ->first();
@endphp       

@php
$currenturl = Request::url();
$urlslug=substr($currenturl, strrpos($currenturl, '/') + 1);
@endphp

                <li class="padding-5px-tb">
                 @if($page)
                         <a href="{{ route('detail_page', ['page_id' => $page->id ?? '', 'slug' => $page->SubMenu->slug ?? '']) }}" class="@if($urlslug==$page->SubMenu->slug)  btn btn-large btn-transparent-orange-light-gray btn-active w-100 @else btn btn-large btn-transparent-orange-light-gray w-100 @endif">
                  @else 

                        <a href="javascript:void()" class="btn btn-large btn-transparent-orange-light-gray w-100">
                  @endif                        
                                        
                    {{Str::title( $submenu->name) }}
                                  
                                    </a>
                                </li>
             @endforeach                  
            @endif     
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                  @forelse ($getpageData as $index => $data)  
                     @if(isset($data->image)) 
                      <img src="{{ getpageImage($data->image) ?? '' }}" class="img-fluid rounded mb-3" alt="">
                    @endif
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <div class="flex-grow-1"><span class="text-neon-orange text-uppercase">{!! $data->heading ?? "" !!}</span>
                        </div>
                    </div>
                   
    
                    <p>{!! $data->description ?? "" !!}</p>

    @empty
                
                 @endforelse
    
                </div>
            </div>
        </div>
    </section>