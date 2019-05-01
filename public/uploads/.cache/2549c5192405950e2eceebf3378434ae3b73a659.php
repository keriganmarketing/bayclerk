<footer class="sticky-footer bg-light py-3 sizable">
    <div class="container pt-4 text-center text-md-left">
        <div class="row align-items-center">
            <div class="mb-4 col-md-6 col-lg-12 col-xl-auto text-center">
                <img src="/themes/wordplate/assets/images/seal-footer.png" class="img-fluid" alt="Gulf county Clerk of Courts and Comptroller" aria-hidden="true" >
            </div>
            <div class="mb-4 col-md-6 col-lg text-secondary">
                <p class="text-uppercase mb-2"><strong>County County Clerk of Court</strong></p>
                <?php echo get_field('mailing_address','option'); ?>

            </div>
            <div class="mb-4 col-md-6 col-lg-3 text-secondary">
                <p class="text-uppercase mb-2"><strong>Contact Information </strong></p>
                <?php echo get_field('psj_location','option'); ?>

            </div>
            <div class="mb-4 col-md-6 col-lg-3 text-secondary">
                <p class="text-uppercase mb-2"><strong>Hours of Operation</strong></p>
                <?php echo get_field('wewa_location','option'); ?>

            </div>
        </div>
    </div>
    <hr class="border-white">
    <p class="copyright text-center text-secondary text-uppercase">&copy;<?php echo e(date('Y')); ?> <?php echo e(get_bloginfo()); ?>. &nbsp; 
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-secondary text-uppercase" href="/privacy-policy/" >Privacy&nbsp;Policy</a> 
        <span class="d-none d-md-inline ">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-secondary text-uppercase" href="/accessibility-policy/" >Accessibility&nbsp;Policy</a> 
        <span class="d-none d-md-inline">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-secondary text-uppercase" href="/contact/" >Contact</a> 
        <span class="d-none d-md-inline">|</span>
        <a class="text-underline d-block d-md-inline p-1 py-md-0 text-secondary text-uppercase" href="/sitemap_index.xml" >Site Map</a> 
    </p>
</footer><?php /**PATH C:\dev\clerk-starter-beta\public\themes\wordplate\views/partials/footer.blade.php ENDPATH**/ ?>