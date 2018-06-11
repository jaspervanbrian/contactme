
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import fontawesome from '@fortawesome/fontawesome';
import brands from '@fortawesome/fontawesome-free-brands';
import solids from '@fortawesome/fontawesome-free-solid';

fontawesome.library.add(brands, solids);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('navbar', require('./components/partials/NavigationBar.vue'));
Vue.component('header-section', require('./components/partials/Header.vue'));
Vue.component('about-section', require('./components/partials/About.vue'));
Vue.component('followme-section', require('./components/partials/FollowMe.vue'));
Vue.component('insights-section', require('./components/partials/Insights.vue'));
Vue.component('download-section', require('./components/partials/DownloadResume.vue'));
Vue.component('footer-section', require('./components/partials/Footer.vue'));

const app = new Vue({
    el: '#app'
});


let typed = new Typed('#typed', {
	stringsElement: '#typed-strings',
	smartBackspace: true,
	loop: true,
	typeSpeed: 40,
	backSpeed: 20,
});