
 <!-- Footer -->
<footer class="footer">
    <div class="footer-social py-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-around justify-content-md-start">
                <span class="d-inline-block navbar-brand hidden-sm-down">
                    <img src="/images/logo.png" alt="AVITA Nepal Official Website"/>
                </span>


                <?php 
                    $sns_icons = [ 'facebook' => facebookLinkForCountry($country),
                      'instagram' => instagramLinkForCountry($country),
                      
                      'youtube' => youtubeLinkForCountry($country),


                      ];
                 ?>

                <?php $__currentLoopData = $sns_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sns_name => $sns_url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if( $sns_url ): ?>
                        <a class="ml-0 <?php echo e($loop->first ? 'ml-md-auto' : 'ml-md-3'); ?>" href="<?php echo e($sns_url); ?>" target="_blank"><i class="fa fa-<?php echo e($sns_name); ?>" aria-hidden="true"></i></a>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>

    <div class="footer-info py-0 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <a class="my-1" href="/product/liber-v"><?php echo e(__('messages.products')); ?></a>
                            <a href="<?php echo e(route('news')); ?>" class="my-1"><?php echo e(__('messages.news')); ?></a>
                            <a href="/aboutus" class="my-1"><?php echo e(__('messages.about_us')); ?></a>
                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                            <a class="my-1"><?php echo e(__('messages.where_to_buy')); ?></a>


                            
                            <a class="my-1"><?php echo e(__('messages.contact_avita')); ?></a>


                        </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">
                            <a class="my-1" href="/support"><?php echo e(__('messages.support')); ?></a>
                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo e(__('messages.repair_tnc')); ?></a>
                            <a href="/tnc" class="my-1"><?php echo e(__('messages.terms')); ?></a>
                            <a href="/tnc" class="my-1"><?php echo e(__('messages.privacy')); ?></a>
                            <a href="https://forms.gle/UGBuhasZap8T3NoP8" target="_blank" class="my-1"><?php echo e(__('messages.career')); ?></a>

                        </div>
                    </div>
                    <div class="d-flex hidden-sm-up">
                        <div class="d-flex flex-column mr-5 small-lsm-little">
                            <a class="my-1"><?php echo e(__('messages.products')); ?></a>
                            <a href="<?php echo e(route('news')); ?>" class="my-1"><?php echo e(__('messages.news')); ?></a>
                            <a href="/aboutus" class="my-1"><?php echo e(__('messages.about_us')); ?></a>
                            <a class="my-1"><?php echo e(__('messages.where_to_buy')); ?></a>

                         </div>
                        <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">


                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo e(__('messages.repair_tnc')); ?></a>

                            <a class="my-1" href="<?php echo e(route('support')); ?>">><?php echo e(__('messages.support')); ?></a>

                            <a href="<?php echo e(route('repair-tnc')); ?>" class="my-1"><?php echo e(__('messages.repair_tnc')); ?></a>

                            <a href="/tnc" class="my-1"><?php echo e(__('messages.terms')); ?></a>
                            <a href="/tnc" class="my-1"><?php echo e(__('messages.privacy')); ?></a>
                            <a href="https://forms.gle/UGBuhasZap8T3NoP8"  target="_blank"  class="my-1"><?php echo e(__('messages.career')); ?></a>


                        </div>
                    </div>
                </div>
                <!---

                --->
                <div class="d-flex flex-column ml-5 ml-md-0 small-lsm-little">

                <div class="col-12 col-md-3 py-3 py-md-0 text-left">
                    <div class="d-flex justify-content-between hidden-xs-down">
                        <div class="d-flex flex-column mr-3 ml-md-0 small-lsm-little">
                            <!-- <p class="heading"><?php echo e(__('messages.available_on')); ?></p> -->
                            <p class="heading"></p>

                            <a target="_blank" class="my-1"></a>
                            <a target="_blank" class="my-1"></a>
                            <a target="_blank" class="my-1"></a>
                            <a target="_blank" class="my-1"></a>
                            <a target="_blank" class="my-1"></a>
                        </div>
                    </div>

                    </div>

                </div>

                <div class="col-12 col-md-4 pb-3 py-md-0 text-md-right">
                    <div class="d-flex flex-wrap h-100 align-content-between">
                        <div class="col-12 info-lang w-100 px-0 hidden-sm-down">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class=""><?php echo e(__('messages.Nepal')); ?></span></a>
                        </div>
                        <div class="col-12 info-lang w-100 px-0 hidden-md-up pb-sm-2">
                            <a class="col-6 px-0" href="https://avita.com/entry"><i class="fa fa-globe mr-2" aria-hidden="true"></i><span class="pr-2"><?php echo e(__('messages.Nepal')); ?></span></a>


                        </div>
                        <div class="info-copyright w-100"><a target="_blank" href="http://www.nexstgo.com">© Nexstgo Company Ltd.</a>  <?php echo e(__('messages.all_rights_reserved')); ?>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer -->
