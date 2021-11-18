<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
        <div class="carousel-inner" role="listbox">


            <div class="carousel-item active">
                <div class="responsive-block">
                <a href="">
                    <div class="banner-block responsive-item">
                        <?php if( App::isLocale('en') ): ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA_5TH_KV.jpg')"></div>
                        <?php else: ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/AVITA_5TH_KV.jpg')"></div>
                        <?php endif; ?>
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/AVITA_5TH_KV_vert.jpg')"></div>
                    </div>
                    </a>
                </div>
            </div>

            <div class="carousel-item ">
                <div class="responsive-block">
                 <a href="<?php echo e(route('product.overview', ['essential'])); ?>"> 
                    <div class="banner-block responsive-item">
                        <?php if( App::isLocale('en') ): ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/avita-essential-web-new.jpg')"></div>
                        <?php else: ?>
                            <div class="banner-bg hidden-sm-down"
                                 style="background-image: url('/images/banner/avita-essential-web-new.jpg')"></div>
                        <?php endif; ?>
                        <div class="banner-bg hidden-md-up"
                             style="background-image: url('/images/banner/avita-essential-mob-new.jpg')"></div>
                    </div>
                    <!-- </a> -->
                </div>
            </div>


            <div class="carousel-item">
                    <div class="responsive-block">
                    <a href="<?php echo e(route('product.overview', ['liber-v'])); ?>">
                        <div class="banner-block responsive-item">
                            <?php if( App::isLocale('en') ): ?>
                                <div class="banner-bg hidden-sm-down"
                                    style="background-image: url('/images/banner/avita-liber-v-web-new-v3.jpg')"></div>
                            <?php else: ?>
                                <div class="banner-bg hidden-sm-down"
                                    style="background-image: url('/images/banner/avita-liber-v-web-new-v3.jpg')"></div>
                            <?php endif; ?>
                            <div class="banner-bg hidden-md-up"
                                style="background-image: url('/images/banner/avita-liber-v-mob-new-v3.jpg')"></div>
                        </div>
                        </a>
                    </div>
                </div>
                 
      
        <div class="carousel-item">
            <div class="responsive-block">
            <a href="<?php echo e(route('product.overview', ['magus12-2in1-laptop'])); ?>">
                <div class="banner-block responsive-item">
                    <?php if( App::isLocale('en') ): ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/magus_web.jpg')"></div>
                    <?php else: ?>
                        <div class="banner-bg hidden-sm-down"
                             style="background-image: url('/images/banner/magus_web.jpg')"></div>
                    <?php endif; ?>
                    <div class="banner-bg hidden-md-up"
                         style="background-image: url('/images/banner/magus_mob.jpg')"></div>
                </div>
                </a>
            </div>
        </div>

     
        </div>
        <ol class="carousel-indicators">
          <li data-target="#home_banner" data-slide-to="0" class="active"></li>
          <li data-target="#home_banner" data-slide-to="1"></li>
          <li data-target="#home_banner" data-slide-to="2"></li> 
          <li data-target="#home_banner" data-slide-to="3"></li>


        </ol>
    </div>
</section>

<?php $__env->startSection('css'); ?>
    <style type="text/css">
        #home_banner video{
            position: absolute;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        var imageTimer = null;
      
        $('#home_banner').on('init slide.bs.carousel', function (e) {
            clearTimeout( imageTimer );
            imageTimer = setTimeout( function( ){
                $('#home_banner').carousel('next');
            }, 6000 );

        }).trigger('init');
    </script>
<?php $__env->stopSection(); ?>
