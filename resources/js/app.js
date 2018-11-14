
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Toasted from 'vue-toasted';
Vue.use(Toasted);
Vue.toasted.register('error', message => message, {
    position : 'top-center',
    duration : 5000
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('options', require('./components/options/Options.vue'));

const app = new Vue({
    el: '#app'
});


/*$('.sidebar > .list-group > .list-group-item.drdo').on('click', function(){
    $(this).toggleClass('opened').toggleClass('closed');
});*/
$('div.alert').not('.alert-important').delay(7000).fadeOut(350);
