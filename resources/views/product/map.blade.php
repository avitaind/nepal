@extends('layouts.app')

@section('title')
	@lang('title.where_to_buy')
@stop

@section('css')
	<style>
	
	/** 
		.shop-list {
			min-height: 400px;
			max-height: 565px;
			overflow-y: auto;
			cursor: default;
		}


		.shop-row .shop-name{
			font-size: 1.1rem;
			font-weight: 700;
		}

		.shop-row .shop-address, .shop-row .shop-phone {
			padding-right: 10px;
			padding-left: 30px;

			position: relative;
			font-size: 0.9em;
		}

		.shop-row .icon {

			position: absolute;
			left: 0px;
			top: 5px;

		}
		***/

		.shopsList {
   			 display: inline-table;
    		 width: 100%;
			}


			.shopsList .pb-1 {
    		font-size: 1.5rem;
    		font-weight: 500;
    		margin-bottom: .5rem;
			}

			.pb-1 {
    			padding-bottom: .25rem!important;
				weight:800;
			}

			.shopsList .col-md-6:nth-child(2n+1) {
    			clear: both;
				}

			.shopsList .col-md-6 {
    			display: inline-grid;
    			width: 50%;
    			margin-bottom: 30px;
			}	
	</style>
@stop

@php
        $page = 'wheretobuy';

@endphp

@section('content')

	<main class="top-nav-padding">

		@include('partials.rolling-cta')
	
	
<section class="map-panel">
	<div class="h2 pt-5 px-5 text-center font-weight-light">Exclusive Brand Stores</div> 
		<hr class="w-25"/>

	<div class="container py-5 ls-0">
                <div class="shopsList">
				@foreach( $eshops as $eshop )
					<div class="col-md-6">					
                            <div class="pb-1"><strong>{{ $eshop->name }}</strong></div>
                            <div class="">
                                <i class="fa fa-map icon"></i>
                                {{ $eshop->address }}
                            </div>
                            <div class="">
                                <i class="fa fa-phone icon"></i>
                                {{ $eshop->phone }}
                            </div>
        
                        </div>
					@endforeach
				</div>
				
		</div>

	<div class="h2 pt-5 px-5 text-center font-weight-light">Retail Partners</div>
	<hr class="w-25"/>

	{{-- Search Bar Start --}}
	<div class="container">
		<div class="input-group">
		<input type="text" class="form-control" id="search" name="search" placeholder="Type your City / State or Postal Code Here"> </input> 
		<div class="input-group-addon overlay-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
		</div>
	</div>
	{{-- Search Bar End --}}
		
	<div class="container  ls-0">
			<div class="shopsList" id="shopsList">
			@foreach( $rshops as $rshop )
				<div class="col-md-6">					
						<div class="pb-1"><strong>{{ $rshop->name }}</strong></div>
						<div class="">
							<i class="fa fa-map icon"></i>
							{{ $rshop->address }}
						</div>
						<div class="">
							<i class="fa fa-phone icon"></i>
							{{ $rshop->phone }}
						</div>
					</div>
				@endforeach
			</div>		
	</div>

	</section>

		<section class="product-statement mt-4 mt-sm-0">
			<div class="container">
				<ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
					<li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
					<li>@lang('site.product_support_footer_1')</li>
					<li>@lang('site.product_support_footer_2')</li>
					<li>@lang('site.product_support_footer_3')</li>
					<li>@lang('site.product_support_footer_4')</li>
				</ul>

			</div>
		</section>

		<div class="gotop-wrap">
			<button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
		</div>

	</main>

@endsection

@section('js')
            <script type="text/javascript">

            $('#search').on('keyup', function(){
                    $value=$(this).val();
                    $.ajax({
                        type: 'get',
                        url: '{{URL::to('searchWhereToBuy')}}',
                        data: { 'search': $value},
                        success:function(data){
                            $('#shopsList').html(data);
                        }
                    })
                })

            </script>

    
    <script type="text/javascript" src="{{ asset('js/support.js') }}"></script>


@endsection
