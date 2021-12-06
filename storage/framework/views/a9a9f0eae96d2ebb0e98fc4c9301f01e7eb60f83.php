<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('title.Accessories'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<main class="top-nav-padding">
<?php echo $__env->make('partials.rolling-cta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<section class="">

        <img src="/images/modus/accessories.png" class="w-100 ">

    </section>

</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>