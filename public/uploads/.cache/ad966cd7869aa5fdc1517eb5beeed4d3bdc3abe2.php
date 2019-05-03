<?php if($announcements = wp_get_recent_posts(['numberposts' => 3])): ?>
    <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(get_field('expiration_date',$announcement['ID']) >= date('Ymd') || get_field('expiration_date',$announcement['ID']) == ''): ?>
        <div class="container" >
            <div class="py-2" >
            <p><?php echo wp_trim_words(strip_tags($announcement['post_content']), 31, '... <a href="'.get_permalink($announcement['ID']).'" >read more.</a>'); ?></p>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\dev\bayclerk\public\themes\wordplate\views/partials/announcements.blade.php ENDPATH**/ ?>