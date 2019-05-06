<article>
    <header>
        <h2><?php echo e($post->post_title); ?></h2>
    </header>
    <p><?php echo e(wp_trim_words($post->post_content, 20, '...')); ?></p>
    <p><a href="<?php echo e(get_permalink($post)); ?>" >Read more</a></p>
    <hr>
</article><?php /**PATH C:\dev\bayclerk\public\themes\wordplate\views/partials/result.blade.php ENDPATH**/ ?>