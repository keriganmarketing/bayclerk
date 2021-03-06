<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.mast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main id="content" class="sizable">
    <div class="container">
        <article class="support">
            <header class="text-primary">
                <h1><?php echo e($headline != '' ? $headline : the_title()); ?></h1>
            </header>
            <?php echo e(the_content()); ?>

            <?php echo e(wp_reset_query()); ?>

            
        </article>
        <?php if(!empty($results)): ?>

            <?php while(have_posts()): ?>
                <?php echo e(the_post()); ?>

            
                <?php echo $__env->make('partials.result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php endwhile; ?>
            
        <?php else: ?>
            <article>
                <p>Nothing was found using the requested search criteria. Search again?</p>
                <?php echo e(get_search_form()); ?>

            </article>
        <?php endif; ?>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\bayclerk\public\themes\wordplate/views/pages/archive.blade.php ENDPATH**/ ?>