<footer class="sticky-footer bg-dark sizable">
    <div class="container py-4 text-center text-md-left">
        <div class="row align-items-center">
            <div class="col-md-4 text-secondary text-center text-white py-2">
                <p class="text-uppercase mb-2 text-accent"><strong>County County Clerk of Court</strong></p>
                <?php echo get_field('mailing_address','option'); ?>

            </div>
            <div class="col-md-4 text-secondary text-center text-white py-2">
                <p class="text-uppercase mb-2 text-accent"><strong>Contact Information </strong></p>
                <?php echo get_field('contact_info','option'); ?>

            </div>
            <div class="col-md-4 text-secondary text-center text-white py-2">
                <p class="text-uppercase mb-2 text-accent"><strong>Hours of Operation</strong></p>
                <?php echo get_field('hours_info','option'); ?>

            </div>
        </div>
    </div>
    <div class="py-3 bg-info">
    <p class="copyright text-center text-white text-uppercase">&copy;<?php echo e(date('Y')); ?> <?php echo e(get_bloginfo()); ?>. &nbsp; 
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-white text-uppercase" href="/privacy-policy/" >Privacy&nbsp;Policy</a> 
        <span class="d-none d-md-inline ">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-white text-uppercase" href="/accessibility-policy/" >Accessibility&nbsp;Policy</a> 
        <span class="d-none d-md-inline">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-white text-uppercase" href="/contact/" >Contact</a> 
        <span class="d-none d-md-inline">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-white text-uppercase" href="/sitemap_index.xml" >Site Map</a> 
    </p>
    </div>
</footer><?php /**PATH C:\dev\bayclerk\public\themes\wordplate\views/partials/footer.blade.php ENDPATH**/ ?>