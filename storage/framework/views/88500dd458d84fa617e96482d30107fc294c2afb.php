<?php $__env->startSection('title'); ?>
    <?php echo e($blog_detail->title); ?> | <?php echo app('translator')->getFromJson('title.whats_new'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>

    <meta property="og:url"                content="<?php echo e(route('blog.detail', [$country, $blog_detail->id] )); ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="AVITA - <?php echo e($blog_detail->title); ?>" />
    <meta property="og:description"        content="<?php echo e($blog_detail->introduction); ?>" />
    <meta property="og:image"              content="<?php echo e($blog_detail->image_url()); ?>" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <section class="event-detail top-nav-padding">
            <div class="container mb-5">
                <h3 class="section-title ls-0 my-4 mt-5"><?php echo app('translator')->getFromJson('site.blog_title'); ?></h3>
                <div class="row p-3 align-items-center">
                    <div class="event-date color-required h5 mb-0 pr-3">
                        <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i><?php echo e($blog_detail->published_date); ?>

                    </div>
                    <div class="event-status px-4 py-1 <?php echo e($blog_detail->status); ?>">
                        <?php echo app('translator')->getFromJson('site.blog_published'); ?>
                    </div>
                </div>
                <div class="row p-3 align-items-center">
                    <div class="event-detail-title h3">
                        <?php echo e($blog_detail->title); ?>

                    </div>

                    <?php if( $country != 'cn'): ?>

                    <div class="event-share ml-auto">
                        <span class="px-2"><?php echo app('translator')->getFromJson('site.share'); ?>:</span>
                        <a href="#" class="ml-0 ml-md-auto fb_share_btn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="ml-0 ml-md-2 twitter_share_btn"><i class="fa fa-twitter pl-1" aria-hidden="true"></i></a>
                    </div>

                    <?php endif; ?>
                </div>

                <?php if( $image_url = $blog_detail->image_url() ): ?>
                    <div class="event-banner">
                        <img src="<?php echo e($image_url); ?>" class="img-responsive" />
                    </div>
                <?php endif; ?>
                <div class="event-desc py-3 mb-5">
                    <div class="event-desc-block pb-5">
                        <p class="event-desc-content">
                            <?php echo $blog_detail->content; ?>

                        </p>
                    </div>
                </div>



            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>

        $('.fb_share_btn').click( function(e) {

            e.preventDefault();

            FB.ui( {
                method: 'share',
                href: $(location).attr('href')
            }, function(response){

            });
        });

        $('.twitter_share_btn').click(function(e){

            e.preventDefault();

            var current_url = $('meta[property="og:url"]').prop('content');


            var share_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent( current_url );
            window.open( share_url, '_blank' );
        });



    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>