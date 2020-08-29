require('@fortawesome/fontawesome-free/js/all.js');

import VueTheMask from 'vue-the-mask'

window.Vue = require('vue');

Vue.use(VueTheMask)

Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('delete-link', require('./components/DeleteLink.vue').default);
Vue.component('flash-alert', require('./components/FlashAlert.vue').default);

Vue.component('properties-index', require('./views/properties/Index.vue').default);
Vue.component('contracts-index', require('./views/contracts/Index.vue').default);
Vue.component('contracts-form', require('./views/contracts/Form.vue').default);

new Vue({
    el: '#app',
});
