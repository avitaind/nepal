@extends('layouts.app')

@section('title')
    @lang('title.Pura_spec')
@stop

@section('content')

    <main class="top-nav-padding">

	@include('partials.pura-navbar')
    @include('partials.rolling-cta')

        <!-------------------Submenu------------ 
        <div class="nav-product-panel">
            <div class="container">
                <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                    <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
                </div>
        
                <div class="product-nav-collapse">
                    <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
        
        
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', 'pura') }}">@lang('pura.name') E</a></li>
        
        
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', 'pura') }}">@lang('site.productnav_spec')</a></li>
                        <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', 'liber') }}">@lang('site.productnav_support')</a></li>
                        <li class="nav-item">
                            <a class="nav-link py-1" href="/where-to-buy">@lang('site.productnav_wheretobuy')</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
       ----------->

        <section>
        
<!--------------PRODUCT IMAGES-------------->
            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

<!-------------- PURA 14-inch-------------->
                        {{--  <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA PURA</div><div class="d-sm-block">(35.56 cm)</div></div>
                            <!--<img class="hidden-sm-down" src="/images/liber/u13/lightpurple.png"> -->
                            <img class="hidden-sm-down" src="/images/pura/Pura_grey.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #7d7e82" data-image="/images/pura/Pura_grey.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/pura/Pura_black.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/pura/Pura_white.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/pura/Pura_blue.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/pura/Pura_purple.png"></li>
                                <li style="background-color: #9e0b0f" data-image="/images/pura/Pura_red.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/pura/Pura_yellow.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/pura/Pura_sparklingPink.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/pura/Pura_pink.png"></li>
                            </ul>
                        </a>    --}}

                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-2" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA PURA E</div><div class="d-sm-block">(35.56 cm)</div></div>
                            <!--<img class="hidden-sm-down" src="/images/liber/u13/lightpurple.png"> -->
                            <img class="hidden-sm-down" src="/images/pura/water_blue.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">  
                                <li class="active" style="background-color: #02355b " data-image="/images/pura/water_blue.png"></li>
                                <li style="background-color: #6f4781" data-image="/images/pura/bubble_purple.png"></li>
                                <li style="background-color: #ecd94a " data-image="/images/pura/butter_yellow.png"></li>
                                <li style="background-color: #6f090f " data-image="/images/pura/crayon_red.png"></li>
                                <li style="background-color: #e8b19d" data-image="/images/pura/fresh_peach.png"></li>
                                <li style="background-color: #201a16" data-image="/images/pura/ink_blue.png"></li>
                                <li style="background-color: #00473c " data-image="/images/pura/leaf_green.png"></li>
                                <li style="background-color: #e2a7af" data-image="/images/pura/pink_flower.png"></li>
                                {{--  <li style="background-color: #505253 " data-image="/images/pura/shadow_grey.png"></li>  --}}
                            </ul>
                        </a>
                        
                    </nav>
                </div>
            </div>
<!--------------END PRODUCT IMAGES-------------->


<!-- Tab panes PRODUCT SPEC-->
            <div class="tab-content">
             
<!------------------ PURA 14-inch ------------------------------------->
                

                <div class="tab-pane active" id="spec-2" role="tabpanel">
                    <div class="container">
                    <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="https://avita.com/images/win10_logo.png" alt="Windows 10 Home">
                            </div>
                        </div>
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                                <div>Windows 10 Home </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>
                                    AMD A6-9220e
                                </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>14 HD TFT</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB / 8GB DDR4</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>AMD Radeon R4 </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128 GB / 256 GB SSD </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>VGA </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>0.8W x 2 Speaker, Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island style keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 b/g/n</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>V4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>Mini HDMI x 1, USB 3.0 TYPE A X 1, USB 2.0 TYPE A X 1, USB 2.0 TYPE C X 1, 3.5mm x 1 Audio Jack, Power Jack </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>333(W) x 221(H) x 19(D) mm </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>1.34 kg </div>
                            </li>
                            {{-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li> --}}
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>7.4V 3200mAh </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 6 hours*</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Shadow Grey / Water Blue / Bubble Purple / Crayon Red / Pink Flower / Butter Yellow / Fresh Peach / Leaf Green / Ink Black</div>
                            </li>
                            
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                 <div>AC/DC Adaptor</div>  
                            </li>
    
                        </ul>
                    </div>
                </div>



<!------------------ End PURA 14-inch------------------------------------->
            </div>

        </section>

<!-- DISCLAIMER-->
        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                	<li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is available. Learn more at <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>.</li>
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                    <li>*Under Test Conditions</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
