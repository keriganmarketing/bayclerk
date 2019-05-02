<template>
    <div>
        <button @click="$root.toggleSearchBox" 
            :class="{
                'd-md-none btn btn-sm col font-weight-bold': true,
                'btn-primary': !$root.searchBoxOpen,
                'btn-white': $root.searchBoxOpen
            }" >
            SEARCH <i 
                    :class="{ 
                        'fa fa-search': !$root.searchBoxOpen, 
                        'fa fa-times': $root.searchBoxOpen 
                    }" 
                    aria-hidden="true"
                    ></i>
        </button>
        <button @click="$root.toggleMenu" 
            :class="{
                'd-md-none btn btn-sm col font-weight-bold': true,
                'btn-primary': !$root.mobileMenuOpen,
                'btn-white': $root.mobileMenuOpen
            }"
            type="button" data-toggle="collapse" data-target="#mobilemenu"  aria-expanded="false" aria-label="Toggle navigation">
            MENU <i
                    :class="{
                        'fa fa-bars': !$root.mobileMenuOpen,
                        'fa fa-times': $root.mobileMenuOpen
                    }"
                    aria-hidden="true"
                ></i>
        </button>
        <button @click="$root.toggleMenu" 
            class="d-none d-md-block d-lg-none btn text-white font-weight-bold"
            type="button" data-toggle="collapse" data-target="#mobilemenu"  aria-expanded="false" aria-label="Toggle navigation">
            MENU <i
                    :class="{
                        'fa fa-bars': !$root.mobileMenuOpen,
                        'fa fa-times': $root.mobileMenuOpen
                    }"
                    aria-hidden="true"
                ></i>
        </button>
        <button @click="$root.toggleHowDoI"
                class="d-none d-md-block d-lg-none nav-link btn btn-rounded btn-outline-accent font-weight-bold sizeable-element font-weight-bold"
                style="cursor:pointer"
            >How Do I...</button>

        <div class="main-navigation collapse navbar-collapse flex-grow-1">
            <main-menu :main-nav="mainNav" class="navbar-nav ml-auto"></main-menu>
            <button @click="$root.toggleHowDoI"
                class="nav-link btn btn-large btn-rounded btn-outline-accent font-weight-bold sizeable-element font-weight-bold"
                style="cursor:pointer"
            >How Do I...</button>
        </div>
        <button @click="$root.toggleMobileHowDoI" 
            class="d-md-none btn btn-sm col text-white font-weight-bold btn-secondary"
            >HOW Do I...&nbsp;<i
                :class="{
                    'fa fa-chevron-down': !$root.mobileHowDoIOpen,
                    'fa fa-chevron-up': $root.mobileHowDoIOpen
                }"
                aria-hidden="true"
            ></i>
        </button>
    </div>
</template>
<script>
export default {
    props: ['mainNav']
}
</script>
