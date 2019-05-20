<?php $__env->startSection('content'); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php echo e(the_post()); ?>

                
        <kma-slider class="slider-container d-none d-md-block"></kma-slider>

        <div class="button-gallery d-flex flex-column justify-content-center align-items-center sizeable w-100">

            <div class="mobile-announcements bg-accent d-md-none pt-1 px-2">
                <?php echo $__env->make('partials.announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div class="action-button-group h-100 d-flex flex-column align-items-center justify-content-center" >
                <div class="d-none d-md-block search-box py-2">
                    <?php echo e(get_search_form()); ?>

                </div>
                <?php echo $__env->make('partials.buttongallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <div id="main" class="clickdown justify-self-end bg-accent">
                <button class="clickdown-button" v-scroll-to="'#main'" ><i class="fa fa-chevron-down" aria-hidden="true" ></i></button>
                <?php echo $__env->make('partials.announcements', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

    <?php endwhile; ?>
<?php else: ?>
    <?php echo $__env->make('pages.404', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\bayclerk\public\themes\wordplate/views/pages/front.blade.php ENDPATH**/ ?>