<header class="top">
    <div class="bg-info">
        <div class="top-container bg-primary">
            <div class="container">
                <div class="row justify-content-md-end text-center align-items-center">
                    <small class="col col-md-auto text-white p-2 px-4 flex-grow-lg-1 border-right border-info text-lg-right">{{ date('F j, Y') }}</small>
                    <a class="col col-md-auto text-white p-2 px-4 border-right border-info" href="#" >E-FILE</a>
                    <a class="col col-md-auto text-white p-2 px-4" href="#" >E-RECORDING</a>
                </div>
            </div>
        </div>
        <div role="navigation" class="topnav flex-wrap navbar navbar-expand-lg sizable" >
            <action-bar  
                class="container d-flex flex-wrap align-items-center"
                :main-nav="{{ website_menu('main-navigation') }}" 
            ></action-bar>
        </div>
    </div>
    <div v-if="howDoIOpen" class="mobile-menu sizable" ref="howdoiMenuContainer" :class="{ 'open': howDoIOpen }" >
        <div class="container d-none d-lg-block">
            <mega-menu :main-nav="{{ website_menu('how-do-i-navigation') }}" ></mega-menu>
        </div>
    </div>
    <div v-if="mobileHowDoIOpen" class="mobile-menu" ref="howdoiMenuContainer" :class="{ 'open': mobileHowDoIOpen }" >
        <mobile-menu :mobile-nav="{{ website_menu('how-do-i-navigation') }}" class="navbar-nav" ></mobile-menu>
    </div>
    <div id="mobilemenu" v-if="mobileMenuOpen" class="mobile-menu" ref="mobileMenuContainer" :class="{ 'open': mobileMenuOpen }" >
        <mobile-menu :mobile-nav="{{ website_menu('mobile-navigation') }}" class="navbar-nav" ></mobile-menu>
    </div>
    <div v-if="searchBoxOpen" class="mobile-search-box" ref="mobileSearchBoxContainer" :class="{ 'open': searchBoxOpen }" >
        <search-box></search-box>
    </div>
</header>
<div class="container">
<text-sizer class="position-absolute text-sizer d-flex justify-content-end align-items-center py-2"></text-sizer>
</div>
                   