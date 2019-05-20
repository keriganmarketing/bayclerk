
<article>
    <?php if(has_post_thumbnail()): ?>
    <figure class="figure float-md-left mr-md-4">
        <a href="<?php echo e(the_permalink()); ?>" title="<?php echo e(the_title_attribute()); ?>">
        <?php echo e(the_post_thumbnail('post-thumbnail', ['class' => 'figure-img img-fluid rounded'])); ?>

        </a>
    </figure>
    <?php endif; ?>
    <header>
        <?php echo e(get_the_date()); ?>

        <h2><?php echo e(the_title()); ?></h2>
    </header>

    <?php echo e(the_excerpt()); ?>

    <a href="<?php echo e(the_permalink()); ?>" >Read more</a>
    <hr>
</article><?php /**PATH C:\dev\bayclerk\public\themes\wordplate\views/partials/article.blade.php ENDPATH**/ ?>