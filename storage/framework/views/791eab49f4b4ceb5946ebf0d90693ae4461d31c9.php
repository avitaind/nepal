<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.campus'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">The Campus Ambassador Program by AVITA is an initiative to motivate the Nepal Youth to showcase their skills and uniqueness like the AVITA Liber Series of Personalized Laptops.</p>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">Get ready to become the Face, Voice, and Evangelist of your Campus and build the most vibrant community of students striving to color up their lives!</p>

            <h1>Who are we looking for?</h1>
            <p class="MsoListParagraph" style="margin-left: 20.4pt; mso-add-space: auto; mso-para-margin-left: 0gd;">We are looking for students who-</p>
            <ul>
                <li>Have a burning desire to make a change in the college student community in Nepal.</li>
                <li>Are interested to lead the student community in their college</li>
                <li>Have taken initiatives/ held leadership positions in college</li>
                <li>Love meeting new people and guiding them about opportunities at AVITA Nepal</li>
                <li>Have a great attitude to learn & an interest to guide students.</li>
                <li>Have great communication skills</li>
            </ul>
           
        </div>

    <div class="col-md-6">
    <div class="container">
    <h3 style="text-align:center;">Signup to receive your welcome mail for getting started</h3>

    <?php if(session()->has('message')): ?>
    <div class="alert alert-success">
       <?php echo e(session()->get('message')); ?>

     </div>
    <?php endif; ?>
    <form action="/cap" method="POST" role="form" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

     <!--Student Name Start-->
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?> row">
     <label for="name">Name* :</label>
     <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
     <?php if($errors->has('name')): ?>
       <span class="error" style="color:red;">Name Can Not Be Empty</span>
      <?php endif; ?>
    </div>


   <!-- Student Name End-->
   <!-- Email Start-->
   <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> row">
     <label for="email">Email*:</label>
     <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
     <?php if($errors->has('email')): ?>
       <span class="error" style="color:red;">Email Can Not Be Empty</span>
      <?php endif; ?>
   </div>
   <!-- Email End-->
      <!-- Phone Number Start-->
  <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?> row">
   <label for="phone">Phone Number* :</label>
   <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" require>
   <?php if($errors->has('phone')): ?>
       <span class="error" style="color:red;">Phone no. Can Not Be Empty</span>
      <?php endif; ?>
   </div>
   <!-- Phone Number End-->
    <!-- College Name Start-->
    <div class="form-group<?php echo e($errors->has('internship') ? ' has-error' : ''); ?> row">
     <label for="internship">Will you be interested in pursuing a summer internship with AVITA Nepal? :</label>
     <label class="radio-inline">
      <input type="radio" name="internship" value="YES" checked> YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="internship" value="NO"> NO
    </label>
    <?php if($errors->has('internship')): ?>
       <span class="error" style="color:red;">Please choose anyone</span>
      <?php endif; ?>
    </div>
   <!-- College Name End-->
   <!-- College Name Start-->
   <div class="form-group<?php echo e($errors->has('college') ? ' has-error' : ''); ?> row">
     <label for="college">College/University Name* :</label>
     <input type="text" class="form-control" placeholder="Enter College/University Name" id="college" name="college" require>
     <?php if($errors->has('college')): ?>
       <span class="error" style="color:red;">College / University Name Can Not Be Empty</span>
      <?php endif; ?>
    </div>
   <!-- College Name End-->
   <div class="form-group<?php echo e($errors->has('team') ? ' has-error' : ''); ?> row">
     <label for="team">Have you ever been in the organising team of a festival or event in your college in some official capacity?:</label>
     <input type="text" class="form-control" placeholder="Please Give Details" id="team" name="team" require>
     <?php if($errors->has('name')): ?>
       <span class="error" style="color:red;">This Can Not Be Empty</span>
      <?php endif; ?>
    </div>
   <!-- College Name End-->
   <div class="form-group<?php echo e($errors->has('represent') ? ' has-error' : ''); ?> row">
     <label for="represent">How do you think you can help represent Avita in a better way in your college? :</label>
     <input type="text" class="form-control" placeholder="Write Your Answer Here" id="represent" name="represent" require>
     <?php if($errors->has('represent')): ?>
       <span class="error" style="color:red;">This Can Not Be Empty</span>
      <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/product-liber.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>"/>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script type="text/javascript" src="<?php echo e(asset('js/liber.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>