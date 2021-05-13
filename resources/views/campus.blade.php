@extends('layouts.app')

@section('title')
    @lang('title.campus')
@stop

@section('content')
    <main class="top-nav-padding">
          <section class="product-liber-banner">
            <div class="responsive-block">
                <div class="banner-block responsive-item admiror-banner">
                    <div class="banner-bg hidden-sm-down" style="background-image: url('/images/banner/campus_web_banner.png')"></div>
                    <div class="banner-bg hidden-md-up" style="background-image: url('/images/banner/campus_mobile_banner.png')"></div>
                    <div class="banner-info"> 
                      <!--  <div class="an-scroll-wrap">
                            <div class="an-scroll">
                                <span></span>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            
        </section>

        <section class="product-liber-banner">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>It’s time to unveil your talents and plunge into a world of colourful opportunities.</h1><br/>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">The Campus Ambassador Program by AVITA is an initiative to motivate the Indian Youth to showcase their skills and uniqueness like the AVITA Liber Series of Personalized Laptops.</p>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">Get ready to become the Face, Voice, and Evangelist of your Campus and build the most vibrant community of students striving to color up their lives!</p>

            <h1>Who are we looking for?</h1>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">We are looking for students who-</p>
            <ul>
                <li>Have a burning desire to make a change in the college student community in India.</li>
                <li>Are interested to lead the student community in their college</li>
                <li>Have taken initiatives/ held leadership positions in college</li>
                <li>Love meeting new people and guiding them about opportunities at AVITA India</li>
                <li>Have a great attitude to learn & an interest to guide students.</li>
                <li>Have great communication skills</li>
            </ul>
           
        </div>

    <div class="col-md-6">
    <div class="container">
    <h3 style="text-align:center;">Signup to receive your welcome mail for getting started</h3>

    @if(session()->has('message'))
    <div class="alert alert-success">
       {{ session()->get('message') }}
     </div>
    @endif
    <form action="/cap" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
     <!--Student Name Start-->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
     <label for="name">Name* :</label>
     <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
     @if ($errors->has('name'))
       <span class="error" style="color:red;">Name Can Not Be Empty</span>
      @endif
    </div>


   <!-- Student Name End-->
   <!-- Email Start-->
   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
     <label for="email">Email*:</label>
     <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
     @if ($errors->has('email'))
       <span class="error" style="color:red;">Email Can Not Be Empty</span>
      @endif
   </div>
   <!-- Email End-->
      <!-- Phone Number Start-->
  <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} row">
   <label for="phone">Phone Number* :</label>
   <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" require>
   @if ($errors->has('phone'))
       <span class="error" style="color:red;">Phone no. Can Not Be Empty</span>
      @endif
   </div>
   <!-- Phone Number End-->
    <!-- College Name Start-->
    <div class="form-group{{ $errors->has('internship') ? ' has-error' : '' }} row">
     <label for="internship">Will you be interested in pursuing a summer internship with AVITA India? :</label>
     <label class="radio-inline">
      <input type="radio" name="internship" value="YES" checked> YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="internship" value="NO"> NO
    </label>
    @if ($errors->has('internship'))
       <span class="error" style="color:red;">Please choose anyone</span>
      @endif
    </div>
   <!-- College Name End-->
   <!-- College Name Start-->
   <div class="form-group{{ $errors->has('college') ? ' has-error' : '' }} row">
     <label for="college">College/University Name* :</label>
     <input type="text" class="form-control" placeholder="Enter College/University Name" id="college" name="college" require>
     @if ($errors->has('college'))
       <span class="error" style="color:red;">College / University Name Can Not Be Empty</span>
      @endif
    </div>
   <!-- College Name End-->
   <div class="form-group{{ $errors->has('team') ? ' has-error' : '' }} row">
     <label for="team">Have you ever been in the organising team of a festival or event in your college in some official capacity?:</label>
     <input type="text" class="form-control" placeholder="Please Give Details" id="team" name="team" require>
     @if ($errors->has('name'))
       <span class="error" style="color:red;">This Can Not Be Empty</span>
      @endif
    </div>
   <!-- College Name End-->
   <div class="form-group{{ $errors->has('represent') ? ' has-error' : '' }} row">
     <label for="represent">How do you think you can help represent Avita in a better way in your college? :</label>
     <input type="text" class="form-control" placeholder="Write Your Answer Here" id="represent" name="represent" require>
     @if ($errors->has('represent'))
       <span class="error" style="color:red;">This Can Not Be Empty</span>
      @endif
    </div>
   <!-- College Name End-->

    <!-- College Name Start-->
    <!--
    <div class="form-group row">
     <label for="fest">Have you ever been part of a college fest before? *:</label>
     <input type="text" class="form-control" placeholder="YES / NO" id="fest" name="fest" require>
   
    </div>
    --->
   <!-- College Name End-->
     <!-- College Name Start-->
   <!--  <div class="form-group row">
     <label for="position">Do you hold any position in your college department or society ?:</label>
     <input type="text" class="form-control" placeholder="YES / NO" id="position" name="position">
    -->
    </div>
   <!-- College Name End-->
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
    </div>
</div>
</section>
        
        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
@endsection

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product-liber.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>


@endsection

@section('js')

    <script type="text/javascript" src="{{ asset('js/liber.js') }}"></script>


@endsection
