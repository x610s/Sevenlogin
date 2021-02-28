

require('./bootstrap');

window.Vue = require('vue').default;
//support vuex
import Vuex from 'vuex'
Vue.use(Vuex)
import state from "./store/index"



//Sweet alert
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);


//ApexCharts
import VueApexCharts from 'vue-apexcharts'
Vue.use(VueApexCharts)
Vue.component('apexchart', VueApexCharts)

//Carrousel vue

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

//Carrousel owl




const store = new Vuex.Store(
    state
)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('card-component', require('./components/CardComponent.vue').default);
Vue.component('descuento-component', require('./components/DescuentoComponent.vue').default);
Vue.component('admin-component', require('./components/AdminComponent.vue').default);
Vue.component('input-component', require('./components/InputComponent.vue').default);
Vue.component('chartBasic', require('./components/chartBasic.vue').default);
Vue.component('column-chart', require('./components/columnChart.vue').default);
Vue.component('carrousel-component', require('./components/CarrouselComponent.vue').default);

const app = new Vue({
    el: '#app',
    store, //vuex
});
