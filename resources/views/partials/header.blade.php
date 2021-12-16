<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png" alt="AVITA Nepal Official Website"/>
        </a>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a href="/"><img src="/images/logo.png" alt="AVITA Nepal Official Website"/></a>
                </li>

                <li class="nav-item has-dropdown">
                  <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product">{{ __('messages.products') }}</label></a>
                
                    <div class="dropdown">
                       <ul class="list-unstyled">

                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0">{{ __('messages.laptops') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                 
                                      <li class="nav-item">
                                          <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['liber-v']) }}">@lang('site.liber-v')</a>
                                       </li>

                                       <li class="nav-item">
                                        <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'pura') }}">@lang('site.pura') E</a>
                                    </li>
                                 
                                   
                                       <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'magus-lite-2in1-laptop') }}">@lang('magus.name')</a>
                                        </li>
                                        
                                          <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', 'essential') }}">@lang('site.essential_name')</a>
                                            </li>
                                         
                                      </ul>
                                </div>
                            </li>


                            {{-- <li class="nav-item has-dropdown">
                                <input id="header_product_device" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_device" class="d-block mb-0">{{ __('messages.smart device') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['imago']) }}">@lang('site.imago_series')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="{{ route('product.overview', ['modus']) }}">@lang('site.modus_scale')</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}


                            <li class="nav-item has-dropdown">
                                <input id="header_product_accessories" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_accessories" class="d-block mb-0">{{ __('messages.accessories') }}</label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">

                                            {{-- <a class="nav-link px-md-4 py-2" href="/accessories/mouse">@lang('site.mouse')</a> --}}
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news') }}">{{ __('messages.news') }}</a>
                </li>

                {{--  <li class="nav-item">
                    <a class="nav-link" >{{ __('messages.where_to_buy') }}</a>
                </li>  --}}

                <li class="nav-item has-dropdown">
                    <input id="where_to_buy" type="checkbox" hidden="">
                      <a class="nav-link"><label for="where_to_buy">{{ __('messages.where_to_buy') }}</label></a>
                  
                      <div class="dropdown">
                         <ul class="list-unstyled">
                            <li class="nav-item has-dropdown">
                            <a class="nav-link px-md-4 py-2"> <label for="header_offline" class="d-block mb-0">Offline Store [Coming Soon]</label></a>
                            </li>
  
                           <li class="nav-item has-dropdown">
                              <input id="header_buy_online" type="checkbox" hidden="">
                                 <a class="nav-link px-md-4 py-2"> <label for="header_buy_online" class="d-block mb-0">{{ __('messages.buy_online') }} [Coming Soon]</label></a>
                            </li>  
  
                         
                          </ul>
                      </li>

                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('support') }}">{{ __('messages.support') }}</a> 
                </li>

                {{-- <li class="nav-item has-dropdown">
                    <input id="header_buy_online" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0">{{ __('messages.buy_online') }}</label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank" >NEXSTMALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2" target="_blank" >Flipkart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" >Amazon</a>
                            </li>
 
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" >Paytm Mall</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-md-4 py-2"  target="_blank" >TATA Cliq</a>
                            </li>
                       </ul>
                    </div>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="/blog">{{ __('messages.blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sales-enquiry">{{ __('messages.sales enquiry') }}</a>
                </li>
            
                <!---- Language Dropdown --------->
                  <!-----
                <li class="nav-item has-dropdown">
                    <input id="header_buy_online" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0">{{ app()->getLocale() }}</label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                          <li class="nav-item">
                               <a href="{{ url('locale/en') }}" ><img src="{{asset('images/en.jpg')}}" width="30px" height="20x"></i> ENGLISH</a>                          
                           </li>
                            <li class="nav-item">
                                <a href="{{ url('locale/hi') }}" ><img src="{{asset('images/hi.jpg')}}" width="30px" height="20x"></i> हिन्दी</a>
                            </li>
                        </ul> 
                    </div> 
                 </li>   
                ------>
               <!--- Language Dropdown ----->       
            </ul>
        </div>
   <!-- <div id="overlay">
        </div> -->
        @if( $user = Auth::user( ) )
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username">{{ $user->name }}</div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 ">{{ $user->email }}</a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="{{ route('member.profile') }}" class=" pl-4">@lang('site.member_center')</a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3">@lang('site.logout')</button></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        @endif

    </div>
</nav>
<!-- ./Header -->
