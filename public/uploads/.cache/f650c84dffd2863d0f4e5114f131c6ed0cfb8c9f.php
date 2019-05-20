<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.mast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main id="content" class="sizable">
    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>

                <?php echo e(the_post()); ?>

                
                <?php if(get_field('expiration_date',get_the_ID()) >= date('Ymd') || get_field('expiration_date',get_the_ID()) == ''): ?>
                <?php echo $__env->make('partials.article', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php echo $__env->make('pages.404', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\bayclerk\public\themes\wordplate/views/pages/home.blade.php ENDPATH**/ ?>