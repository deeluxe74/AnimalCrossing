import Index from './Index.vue';

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
        'index': Index,
    }
});
