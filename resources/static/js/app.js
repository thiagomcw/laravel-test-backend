require('./bootstrap');

window.Vue = require('vue');

require('@fortawesome/fontawesome-free/js/all.js');

Vue.component('delete-link', require('./components/DeleteLink.vue').default);
Vue.component('flash-alert', require('./components/FlashAlert.vue').default);

new Vue({
    el: '#app',
});
