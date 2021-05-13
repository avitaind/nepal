@extends('layouts.app')

@section('title')
    @lang('title.MAGUS_home')
@stop

@section('content')
    <main class="top-nav-padding">
<!-------------------Submenu------------->
<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus-lite') }}">@lang('magus.lite')</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'magus-lite-spec') }}">@lang('site.productnav_spec')</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
            </ul>
        </div>
    </div>
</div>
<!--------------->

<section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item">
                <div class="banner-bg" style="background-image: url('@lang('magus.img-banner1')')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('@lang('magus.img-banner2')')"></div>
                    <div class="banner-info">
                        <div class="btn-group mt-3">
                            {{--<img class="mx-auto" src="/images/liber/brand.png">--}}
                        </div>
                        <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-magus-computer ls-0" id="test">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc2_img1.png">
                            <!-- <img class="ac-computer-image ac-computer-2" src="/images/liber/sc2_img2.png"> -->
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">2-in-1 Detachable Design</div>
                        <div class="banner-para">
                            <span class="d-lg-block">With preloaded Windows 10 Home, Magus has been designed as a confluence </span>
                            <span class="d-lg-block">of in-vogue trend and functional flexibility. It fulfills the twin purposes of</span>
                            <span class="d-lg-block"> Laptop and tablet simply by virtue of a detachable laptop.</span>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-liber-performance ls-0" style="background-color:white"> 
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc7_fimg1.png">
               </div>
                <div class="container">
                    <div class="banner-info">
                        <div class="ac-computer-wrap hidden-md-up">
                            <img class="ac-computer-image ac-computer-1" src="/images/magus/sc7_fimg1.png">
                        </div>
                        <div class="h2 banner-header mb-4 mb-sm-5">Inside-out Vibrancy</div>
                        <div class="banner-para ls-0">
                            <span class="d-md-block">MAGUS combines minimalistic design with a metallic casing.</span>
							<span class="d-md-block">MAGUS allows users to express their personal styles with the four color options available – Seashell Pink, Steel Blue, Charcoal Grey, and Pastel Violet.</span>
                        </div>
                        <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Operating System</div>
								<div class="badge-value">Windows 10 Home</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">CPU</div>
								<div class="badge-value">Celeron</div>
                                <div class="badge-caption">INTEL&reg; CORE&trade; PROCESSOR</div>
                            </div>
                            <div class="data-card my-3 text-left">
                                <div class="badge-caption">Up to</div>
								<div class="badge-value">128<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">Storage Capacity</div>
							</div>
							<div class="data-card my-3 text-left">
								<div class="badge-caption">Up to</div>
								<div class="badge-value">4<span class="badge-caption pl-1">GB</span></div>
								<div class="badge-caption">DDR3 RAM</div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-magus-computer ls-0" id="test">
        	<div class="banner-block">
                <div class="container"> 
                 <div class="space60"></div> 
                 	<video width="100%" height="625" controls  autoplay loop muted> 
                    	<source src="/videos/avita_magus.mp4" type="video/mp4">
                    </video> 
	            </div>
            </div>
        </section>
        <section class="product-liber-power ls-0" style="background-color:#f0f0f0">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/pastel_violet.png" style="margin-top:2%;">
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                            <div class="banner-info  mx-auto">
                                <div class="h2 banner-header mb-4 mb-sm-5"><div class="d-sm-inline">Accommodate daily work and entertainment needs</div></div>
                                <div class="banner-para ls-0">
                                <span class="d-lg-block">MAGUS can run a variety of Windows applications with battery life up to eight hours*. It has a microSDXC card reader built in, equipped with a 3.5mm audio jack, a mini HDMI port and a USB 3.0 interface, taking care of the users' needs in every way possible.</span>
                                  <span class="d-lg-block"><small>*Up to 8 hours on MobileMark 2014 (Up to 10 hours in the condition of Wi-Fi, Bluetooth, audio are off, brightness as 20, and Power in Battery saver mode)</small></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="battery-wrap d-flex align-items-center">
                                <div class="badge-caption">Up to <span class="badge-value px-1">8</span> hrs*<br>Battery life</div>
    						</div>
    						<div class="banner-data d-flex flex-wrap justify-content-center ls-0">
    							<div class="data-card">
    								<div class="badge-caption">&nbsp;</div>
    								<div class="badge-value text-center">37.6<span class="badge-caption pl-1">Wh</span></div>
    								<div class="badge-caption">Li-ion battery</div>
                                </div>

                                <ul class="battery-block d-flex"><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
                              
                               </div>
                             

                        </div>
                    </div>
                </div>
        </section>

        <section class="product-liber-keyboard ls-0" style="background-color:#ffffff">
            <div class="banner-block">
                <div class="banner-bg"></div>
                <div class="banner-image">
                
                    <img class="bc-computer-image bc-computer-1" src="/images/magus/sc1_bg_1.png">
                </div>
                
                <div class="container">
                    <div class="banner-info mx-auto ml-lg-0">

                        <div class="h2 banner-header mb-4 mb-sm-5">Pleasing Keyboard Design</div>
						<div class="ac-computer-wrap hidden-md-up">
					<!-- <img class="ac-computer-image ac-computer-1" style="" src="/images/magus/sc1_bg.png"> --->
						</div>
						<div class="banner-para ls-0">
							<span class="d-lg-block">Every touch on the keyboard directly </span>
							<span class="d-lg-block">determines your performance. </span>
							<span class="d-lg-block">Therefore, MAGUS incorporates a pleasing-to-use </span>
							<span class="d-lg-block">keyboard of delicate details that ensures</span>
							<span class="d-lg-block">the best comfort and accuracy for you.</span>
                        </div>
                        <br/>
                        <p class="d-lg-block"><img src="/images/magus/port_en.png"></p>
                   </div>
                </div>

            </div>
        </section>
     
        <section class="product-statement" style="background-color:#ffffff" >
            <div class="container">
<div style="align-content:center;"> 
<img src="/images/magus/magus_warranty.png"></div>
            </div>
            </section>
              
        <section class="product-statement">
            <div class="container">
                <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
					<li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
