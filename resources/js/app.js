

require('./bootstrap');
window.Vue = require('vue');
import App from "./App.vue";

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import routes from './routes.js';
const router = new VueRouter({
   routes
});
import Swal from 'sweetalert2'

new Vue({
   router ,
   render: h=>h(App)
}).$mount('#app');
