<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.LIBER_v_spec'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="top-nav-padding">

        <?php echo $__env->make('partials.liber-v-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('partials.rolling-cta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">

 
<!--------------LIBER v 35.56 cm(New Generation)-------------->
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-140" role="tab">
                            <div class="spec-item-name mb-12"><div class="d-sm-block">AVITA LIBER V</div><div class="d-sm-block">(35.56 cm)</div></div>
                            <img class="hidden-sm-down" src="/images/liber-v/c2c2c2.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4"> 
                                <li style="background-color: #c2c2c2" class="active" data-image="/images/liber-v/c2c2c2.png"></li>
                                <li style="background-color: #1f1f1f" data-image="/images/liber-v/1f1f1f.png"></li>
                                <li style="background-color: #ebd9f2" data-image="/images/liber-v/ebd9f2.png"></li>
                                <li style="background-color: #54a7d9" data-image="/images/liber-v/54a7d9.png"></li>
                                <li style="background-color: #f6bdc8" data-image="/images/liber-v/f6bdc8.png"></li> 
                                <li style="background-color: #787878" data-image="/images/liber-v/787878.png"></li>  
                                <li style="background-color: #f7f7f7" data-image="/images/liber-v/f7f7f7.png"></li> 
                                <li style="background-color: #ff6082" data-image="/images/liber-v/ff6082.png"></li>
                                <li style="background-color: #c54343" data-image="/images/liber-v/c54343.png"></li>
                                <li style="background-color: #b55cba" data-image="/images/liber-v/b55cba.png"></li>
                                <li style="background-color: #31496d" data-image="/images/liber-v/31496d.png"></li>
                                <li style="background-color: #94c880" data-image="/images/liber-v/94c880.png"></li> 
                                <li style="background-color: #9bbfe3" data-image="/images/liber-v/9bbfe3.png"></li>  
                                <li style="background-color: #9b5abe" data-image="/images/liber-v/9b5abe.png"></li> 
                            </ul>
                        </a>
  

                    </nav>
                </div>
            </div>


            <!-- Tab panes -->
            <div class="tab-content">
            
             
                
                 
<!-- Liber 140 SPEC -------------------------------------------------------------->
                <div class="tab-pane active" id="spec-140" role="tabpanel">
                    <div class="container">

                        <div class="logo-wrapper d-flex px-3 mt-4">
                            <div class="offset-md-1">
                                <img style="width: 200px;" src="<?php echo e(asset('images/win10_logo.png')); ?>" alt="Windows 10 Home">
                            </div>
                        </div>

                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.os'); ?></div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.cpu'); ?></div>
                                <div>Intel® Core™ i5-10210U / Intel® Core™ i7-10510U / AMD Ryzen™ 5 3500U / AMD Ryzen™ 7 3700U</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.display'); ?></div>
                                <div>14 16:9 Full HD (1920 x 1080) <!-- Anti-Glare IPS Panel with 178 degree wide viewing angle --> </div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.memory'); ?></div>
                                <div>8GB DDR4 2400MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.graphics'); ?></div>
                                <div>Intel® UHD Graphics 620 / Radeon™ Vega 8 Graphics / Radeon™ RX Vega 10 Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.storage'); ?></div>
                                <div>512GB / 1TB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.camera'); ?></div>
                                <div>1M</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.audio'); ?></div>
                                <div>1W x 2 Speakers, Dual Microphones</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.keyboard'); ?></div>
                                <div>Full-size Backlit Keyboard</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.wireless'); ?></div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.bluetooth'); ?></div>
                                <div>Bluetooth 4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.ports'); ?></div>
                                <div>USB 3.0 x 2, USB3.0 Type-C x 1 (PD 2.0 charging, Display out) /  USB 3.0 x 1, USB2.0 x 1 USB3.0 Type-C x 1 (PD 3.0 charging, Display out), 1 x 3.5mm Headphone Jack, DC in, 1 x MicroSD card slot, 1 x Micro HDMI Type D</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.dimension'); ?></div>
                                <div>W317.5 X H215.9 X D 18.8 mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.weight'); ?></div>
                                <div>Starting from 1.25kg</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.battery'); ?></div>
                                <div>7.6V 4830mAh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.battery_life'); ?></div>
                                <div>Up to 10 hours<sup>*</sup></div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.security'); ?></div>
                                <div>With Fingerprint Reader</div>
                            </li>
                           <!-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.material'); ?></div>
                                <div><?php echo app('translator')->getFromJson('prod_spec_hk.liber140_material'); ?></div>
                            </li> -->
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.colour'); ?></div>
                                <div>Soft Lavender, Summer Pink, Azure Blue, Charming Red, Unicorn Gold, Star Silver, Infinite Black, Shinning White, Original Purple, Anchor Grey, Cloud Silver, Matt Black, Fragrant Lilac, Angel Blue, Blossom Pink, Space Grey, Pearl White<br/>(More colours are coming soon, stay tuned for updates)</div>
                            </li>
                           <!-- <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3"><?php echo app('translator')->getFromJson('prod_spec.accessories'); ?></div>
                                <div><?php echo app('translator')->getFromJson('prod_spec_hk.liber140_accessories'); ?></div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                   <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                    
                    <li><sup>*</sup> Up to 10 hours on MobileMark 2014</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>