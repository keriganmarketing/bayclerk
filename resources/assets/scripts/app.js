import "babel-polyfill"
window.Vue = require('vue')
window.axios = require("axios")
import { cacheAdapterEnhancer, throttleAdapterEnhancer } from 'axios-extensions';

window.http = axios.create({
	baseURL: '/',
	headers: { 'Cache-Control': 'no-cache' },
	adapter: throttleAdapterEnhancer(axios.defaults.adapter, { threshold: 2 * 1000 })
});

require('./load-components')

import {VueMasonryPlugin} from 'vue-masonry';
Vue.use(VueMasonryPlugin)

import vueScrollto from 'vue-scrollto'
Vue.use(vueScrollto, {
    container: "body",
    duration: 1000,
    easing: "ease",
    offset: -140,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
})

const app = new Vue({
    el: '#app',

    data: {
        clientHeight: 0, 
        windowHeight: 0,
        windowWidth: 0,
        isScrolling: false,
        scrollPosition: 0,
        footerStuck: false,
        mobileMenuOpen: false,
        howDoIOpen: false,
        mobileHowDoIOpen: false,
        searchBoxOpen: false,
        textSize: 0,
        wrapper: {}
    },

    methods: {
        handleScroll () {
            this.scrollPosition = window.scrollY;
            this.isScrolling = this.scrollPosition > 20;
        },
        handleResize() {
            this.windowWidth = window.innerWidth;
            this.windowHeight = window.innerHeight;

            this.footerStuck = window.innerHeight > this.$root.$el.children[0].clientHeight;
        },
        toggleMenu() {
            if(this.mobileHowDoIOpen) this.mobileHowDoIOpen = false;
            if(this.howDoIOpen) this.howDoIOpen = false;
            if(this.searchBoxOpen) this.searchBoxOpen = false;
            this.$nextTick(() => {
                this.mobileMenuOpen = ! this.mobileMenuOpen;
            });
        },
        toggleHowDoI() {
            if(this.mobileHowDoIOpen) this.mobileHowDoIOpen = false;
            if(this.searchBoxOpen) this.searchBoxOpen = false;
            if(this.mobileMenuOpen) this.mobileMenuOpen = false;
            this.$nextTick(() => {
                this.howDoIOpen = ! this.howDoIOpen;
            });
        },
        toggleMobileHowDoI() {
            if(this.searchBoxOpen) this.searchBoxOpen = false;
            if(this.howDoIOpen) this.howDoIOpen = false;
            if(this.mobileMenuOpen) this.mobileMenuOpen = false;
            this.$nextTick(() => {
                this.mobileHowDoIOpen = ! this.mobileHowDoIOpen;
            });
        },
        toggleSearchBox() {
            if(this.mobileHowDoIOpen) this.mobileHowDoIOpen = false;
            if(this.howDoIOpen) this.howDoIOpen = false;
            if(this.mobileMenuOpen) this.mobileMenuOpen = false;
            this.$nextTick(() => {
                this.searchBoxOpen = ! this.searchBoxOpen;
            });
        }
        
    },

    created () {
        window.addEventListener('scroll', this.handleScroll);
        window.addEventListener('resize', this.handleResize);
    },

    mounted () {
        this.handleScroll();
        this.handleResize();
    },

    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
        window.removeEventListener('resize', this.handleResize);
    }

})
