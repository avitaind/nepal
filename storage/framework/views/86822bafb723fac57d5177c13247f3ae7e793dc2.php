<!-- Header -->
<nav class="header navbar">
    <div class="navbar-inner">
        <div class="navbar-toggler navbar-toggler-left hidden-md-up">
            <span></span>
        </div>
        <a class="navbar-brand mr-0 hidden-md-up" href="/">
            <img src="/images/logo.png" alt="AVITA Nepal Official Website"/>
        </a>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto d-md-flex flex-md-row align-items-md-center justify-content-md-between">
                <li class="hidden-sm-down">
                    <a href="/"><img src="/images/logo.png" alt="AVITA Nepal Official Website"/></a>
                </li>

                <li class="nav-item has-dropdown">
                  <input id="header_product" type="checkbox" hidden="">
                    <a class="nav-link"><label for="header_product"><?php echo e(__('messages.products')); ?></label></a>
                
                    <div class="dropdown">
                       <ul class="list-unstyled">

                            <li class="nav-item has-dropdown">
                                <input id="header_product_liber" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_liber" class="d-block mb-0"><?php echo e(__('messages.laptops')); ?></label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                 
                                      <li class="nav-item">
                                          <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', ['liber-v'])); ?>"><?php echo app('translator')->getFromJson('site.liber-v'); ?></a>
                                       </li>

                                       <li class="nav-item">
                                        <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', 'pura')); ?>"><?php echo app('translator')->getFromJson('site.pura'); ?> E</a>
                                    </li>
                                 
                                   
                                       <li class="nav-item">
                                            <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', 'magus-lite-2in1-laptop')); ?>"><?php echo app('translator')->getFromJson('magus.name'); ?></a>
                                        </li>
                                        
                                          <li class="nav-item">
                                                <a class="nav-link px-md-4 py-2" href="<?php echo e(route('product.overview', 'essential')); ?>"><?php echo app('translator')->getFromJson('site.essential_name'); ?></a>
                                            </li>
                                         
                                      </ul>
                                </div>
                            </li>


                            


                            <li class="nav-item has-dropdown">
                                <input id="header_product_accessories" type="checkbox" hidden="">
                                <a class="nav-link px-md-4 py-2"><label for="header_product_accessories" class="d-block mb-0"><?php echo e(__('messages.accessories')); ?></label></a>
                                <div class="dropdown">
                                    <ul class="list-unstyled">

                                        <li class="nav-item">

                                            <a class="nav-link px-md-4 py-2" href="/accessories/mouse"><?php echo app('translator')->getFromJson('site.mouse'); ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('news')); ?>"><?php echo e(__('messages.news')); ?></a>
                </li>

                

                <li class="nav-item has-dropdown">
                    <input id="where_to_buy" type="checkbox" hidden="">
                      <a class="nav-link"><label for="where_to_buy"><?php echo e(__('messages.where_to_buy')); ?></label></a>
                  
                      <div class="dropdown">
                         <ul class="list-unstyled">
                            <li class="nav-item has-dropdown">
                            <a class="nav-link px-md-4 py-2"> <label for="header_offline" class="d-block mb-0">Offline Store [Coming Soon]</label></a>
                            </li>
  
                           <li class="nav-item has-dropdown">
                              <input id="header_buy_online" type="checkbox" hidden="">
                                 <a class="nav-link px-md-4 py-2"> <label for="header_buy_online" class="d-block mb-0"><?php echo e(__('messages.buy_online')); ?> [Coming Soon]</label></a>
                            </li>  
  
                         
                          </ul>
                      </li>

                   <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('support')); ?>"><?php echo e(__('messages.support')); ?></a> 
                </li>

                

                <li class="nav-item">
                    <a class="nav-link" href="/blog"><?php echo e(__('messages.blog')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sales-enquiry"><?php echo e(__('messages.sales enquiry')); ?></a>
                </li>
            
                <!---- Language Dropdown --------->
                  <!-----
                <li class="nav-item has-dropdown">
                    <input id="header_buy_online" type="checkbox" hidden="">
                    <a class="nav-link px-md-4 py-2"><label for="header_buy_online" class="d-block mb-0"><?php echo e(app()->getLocale()); ?></label></a>
                    <div class="dropdown">
                        <ul class="list-unstyled">
                          <li class="nav-item">
                               <a href="<?php echo e(url('locale/en')); ?>" ><img src="<?php echo e(asset('images/en.jpg')); ?>" width="30px" height="20x"></i> ENGLISH</a>                          
                           </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('locale/hi')); ?>" ><img src="<?php echo e(asset('images/hi.jpg')); ?>" width="30px" height="20x"></i> हिन्दी</a>
                            </li>
                        </ul> 
                    </div> 
                 </li>   
                ------>
               <!--- Language Dropdown ----->       
            </ul>
        </div>
   <!-- <div id="overlay">
        </div> -->
        <?php if( $user = Auth::user( ) ): ?>
            <aside class="navbar-user-warp hidden-md-up">
                <div class="navbar-user navbar-md-user">
                    <div class="user-header pt-2 px-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="username"><?php echo e($user->name); ?></div>
                            <div class="ml-auto">
                                <a href="" onclick="event.preventDefault();">
                                    <span aria-hidden="true" class="close">&#10005;</span>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-content px-3">
                        <div class="align-items-center px-2 pb-2">
                            <!-- <img src="../images/icon-member-small.jpg" alt=""> -->
                            <div class="col-12 px-0 pb-3 useremail-border small"><a href="#" class="useremail pl-4 "><?php echo e($user->email); ?></a></div>
                            <div class="col-12 px-0 mt-3 member-center"><a href="<?php echo e(route('member.profile')); ?>" class=" pl-4"><?php echo app('translator')->getFromJson('site.member_center'); ?></a></div>
                        </div>
                        <div class="justify-content-center">
                            <a class="px-4" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="" aria-hidden="true"><button type="submit" class="btn btn-primary my-3"><?php echo app('translator')->getFromJson('site.logout'); ?></button></i>
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>

                        </div>
                    </div>
                </div>
            </aside>

        <?php endif; ?>

    </div>
</nav>
<!-- ./Header -->
