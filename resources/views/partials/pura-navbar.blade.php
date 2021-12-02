<div class="nav-product-panel">
    <div class="container">
        <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
        </div>

         <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
            <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.overview', ['pura']) }}">@lang('site.pura') E</a></li>
            <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['pura']) }}">@lang('site.productnav_spec')</a></li>
            {{--  <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.support', ['pura']) }}">@lang('site.productnav_support')</a></li>  --}}
            <li class="nav-item"><a class="nav-link py-1" href="/support">@lang('site.productnav_support')</a></li>
            {{--  <li class="nav-item"><a class="nav-link py-1" href="/where-to-buy">@lang('site.productnav_wheretobuy')</a></li>  --}}
           </ul>
        </div>
    </div>
</div>
