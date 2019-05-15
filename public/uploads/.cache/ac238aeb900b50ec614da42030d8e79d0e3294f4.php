<header class="top">
    <div class="bg-info">
        <div class="top-container bg-primary">
            <div class="container">
                <div class="row justify-content-md-end text-center">
                    <div class="col col-md-auto text-white flex-grow-lg-1 border-right border-info text-lg-right">
                        <span class="date d-block h-100"><?php echo e(date('F j, Y')); ?></span>
                    </div>
                    <a class="col-auto col-md-auto text-white border-right border-info" href="https://www.myflcourtaccess.com/" >E-FILE</a>
                    <a class="col col-md-auto text-white" href="#" >E-RECORDING</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-md-flex nav-container">
                <div class="brand w-auto d-flex justify-content-center align-items-center" >
                    <a href="/"><img src="/themes/wordplate/assets/images/clerk-photo.jpg" alt="Photo of Bill Kinsaul" class="clerk-photo" ></a>
                    <div class="px-4 py-2">
                        <a href="/"><img src="/themes/wordplate/assets/images/clerk-logo.png" alt="Bill Kinsaul, Clerk of Court & Comptroller of Bay County Florida" class="logo" ></a>
                    </div>
                </div>
                <div role="navigation" class="topnav flex-wrap navbar navbar-expand-lg sizable bg-info flex-grow-1" >
                    <action-bar  
                        class="d-flex w-100 justify-content-md-end p-md-2"
                        :main-nav="<?php echo e(website_menu('main-navigation')); ?>" 
                    ></action-bar>
                </div>
            </div>
        </div>
    </div>
    <div v-if="searchBoxOpen" class="mobile-search-box" ref="mobileSearchBoxContainer" :class="{ 'open': searchBoxOpen }" >
        <search-box></search-box>
    </div>
</header>
<div v-if="howDoIOpen" class="mobile-menu sizable" ref="howdoiMenuContainer" :class="{ 'open': howDoIOpen }" >
    <div class="container d-none d-md-block">
        <mega-menu :main-nav="<?php echo e(website_menu('how-do-i-navigation')); ?>" ></mega-menu>
    </div>
</div>
<div v-if="mobileHowDoIOpen" class="mobile-menu" ref="howdoiMenuContainer" :class="{ 'open': mobileHowDoIOpen }" >
    <mobile-menu :mobile-nav="<?php echo e(website_menu('how-do-i-navigation')); ?>" class="navbar-nav" ></mobile-menu>
</div>
<div id="mobilemenu" v-if="mobileMenuOpen" class="mobile-menu" ref="mobileMenuContainer" :class="{ 'open': mobileMenuOpen }" >
    <mobile-menu :mobile-nav="<?php echo e(website_menu('mobile-navigation')); ?>" class="navbar-nav" ></mobile-menu>
</div>

<div class="container">
    <div class="text-sizer d-none d-md-flex justify-content-end">
    <text-sizer class="d-flex align-items-center p-2 text-sizer-container position-absolute"></text-sizer>
    </div>
</div>
                   <?php /**PATH C:\dev\bayclerk\public\themes\wordplate\views/partials/header.blade.php ENDPATH**/ ?>