
<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="model" id="model" class="form-control input-lg dynamic" data-dependent="processor">
     <option value="">Select Model</option>
     @foreach($model_list as $model)
     <option value="{{ $model->model}}">{{ $model->model }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="processor" id="processor" class="form-control input-lg dynamic" data-dependent="series">
     <option value="">Select Processor</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="series" id="series" class="form-control input-lg" data-dependent="ram">
     <option value="">Select Series</option>
    </select>
   </div>
   <div class="form-group">
    <select name="ram" id="ram" class="form-control input-lg" data-dependent="storage">
     <option value="">Select RAM</option>
    </select>
   </div>
   <div class="form-group">
    <select name="storage" id="storage" class="form-control input-lg">
     <option value="">Select Storage</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('preorder.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#model').change(function(){
  $('#processor').val('');
  $('#series').val('');
  $('#ram').val('');
  $('#storage').val('');
 });

 $('#processor').change(function(){
  $('#series').val('');
  $('#ram').val('');
  $('#storage').val('');
 });
 
 
 $('#series').change(function(){
  $('#ram').val('');
  $('#storage').val('');
  });

});

 
$('#ram').change(function(){
  $('#storage').val('');
  });

});
</script>