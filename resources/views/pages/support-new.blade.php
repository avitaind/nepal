@extends('layouts.app')

@section('title')
    @lang('title.service')
@stop
@section('css')
<style>
.shopsList {
    display: inline-table;
    width: 100%;
}
.shopsList .col-md-6:nth-child(2n+1) {
    clear: both;
}


.shopsList .col-md-6 {
    display: inline-grid;
    width: 50%;
    margin-bottom: 30px;
}

.shopsList .fa {
    font-size: 18px;
    weight:600;
}
</style>
@stop

@php

 $page = 'support';

@endphp

@section('content')
    <main>
<section class="top-nav-padding support-search-section">
<div class="support-search-wrap pb-sm-5">

<div class="container h-100">
    <div class="row h-100 align-items-center">
        <div class="col-12 col-lg-6 text-center">
            <form method="POST" action="{{ route('support') }}" class="">
                {{ csrf_field() }}
                <div class="support-search-mob-img">
                    <img class="hidden-lg-up " src="/images/background/support-min.png"/>
                </div>
        <div class="h1 section-title my-4 ls-0 font-weight-light">@lang('site.support_title')</div>
              <div class="row no-gutters my-4 align-content-center justify-content-center col-12 col-sm-8 col-lg-12 mx-auto">
                    <div class="col-12 col-md-12 col-md-12 ml-0 ml-md-4">
                        <div class="form-group mb-2">

                            <select id="product_type_field" name="type" class="form-control custom-select mb-3">

                            </select>

                            <select id="product_series_field" name="series" class="form-control custom-select mb-3" style="display: none;">

                            </select>

                            <select id="marketing_number_field" name="marketing_number" class="form-control custom-select mb-3" style="display: none;">

                            </select>

                            <select id="product_number_field" name="product_number" class="form-control custom-select mb-3" style="display: none;">

                            </select>

                            {{--<select id="product_model_field" name="product_model" class="form-control custom-select mb-3" style="display: none;">--}}

                            {{--</select>--}}

                            {{--<p id="product_config_field"></p>--}}

                            <button class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>

                        </div>
                    </div>

                </div>
            </form>
                 <br/>
                    <img src="/images/contact.png" style="width:320px;">
                 </div>
             </div>
        </div>
           <div class="hidden-md-down panel-image">
               <img src="/images/background/support-min.png"/>
           </div>
           
    </div>
   
    <div class="warranty-center-wrap py-5 text-center">      
          
            	<div class="container h-100">
                <div class="alert alert-dismissible alert-info">
                Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the operation time or temporarily shut down for the time being. The adjustment will be subjected to local regulations and will be updated as soon as possible. We thank you for your patience and understanding.
                </div>
                 	<div class="row h-70 align-items-center">
                    
                    	<div class="col-12 col-lg-6">
	                        <img src="/images/background/AVITA_warranty.png" style="width:100%; max-width:600px;">
                        </div>
                        
                        <div class="col-12 col-lg-6">
                        
                            <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension Service is available now</div>
                            
                            <div class="warranty-content text-left mt-4 mb-3 font-weight-light">Thanks for the valuable suggestion from our customers. You can purchase the newly launched “Warranty Extension Service” online now. You may choose to extend 1 or 2 years to enjoy our worry-free warranty service.</div>
                            
                            <div class="text-center purchase_steps">
                                <a href="/warranty-extension" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">
                                    See More  </a> 
                            </div>  
                        </div> 
                              
                   </div><!--row-->  
                </div><!--container-->
   
 </section>

<div class="gotop-wrap">
    <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
</div>

    </main>

@endsection

@section('js')

<script>
$(document).ready(function(){

 load_data('');

 function load_data(full_text_search_query = '')
 {
  var _token = $("input[name=_token]").val();
  $.ajax({
   url:"{{ route('full-text-search.action') }}",
   method:"POST",
   data:{full_text_search_query:full_text_search_query, _token:_token},
   dataType:"json",
   success:function(data)
   {
    var output = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      output += '<tr>';
      output += '<td>'+data[count].CustomerName+'</td>';
      output += '<td>'+data[count].Gender+'</td>';
      output += '<td>'+data[count].Address+'</td>';
      output += '<td>'+data[count].City+'</td>';
      output += '<td>'+data[count].PostalCode+'</td>';
      output += '<td>'+data[count].Country+'</td>';
      output += '</tr>';
     }
    }
    else
    {
     output += '<tr>';
     output += '<td colspan="6">No Data Found</td>';
     output += '</tr>';
    }
    $('tbody').html(output);
   }
  });
 }

 $('#search').click(function(){
  var full_text_search_query = $('#full_text_search').val();
  load_data(full_text_search_query);
 });

});
</script>

 
    <script src="../js/support.js"></script>
@endsection
