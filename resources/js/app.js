/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('company-component', require('./components/Transaction/Company.vue').default);
Vue.component('purchase-bill-component', require('./components/Transaction/PurchaseBill.vue').default);
Vue.component('provider-create-simple-component', require('./components/Provider/CreateSimpleComponent.vue').default);
Vue.component('provider-search-component', require('./components/Provider/SearchComponent.vue').default);
Vue.component('provider-purchase-component', require('./components/Purchase/ProviderComponent.vue').default);
Vue.component('detail-service-info', require('./components/Transaction/Detail/Service.vue').default);
Vue.component('detail-product-info', require('./components/Transaction/Detail/Product.vue').default);
Vue.component('detail-config-detail', require('./components/Transaction/Detail/ConfigDetail.vue').default);
Vue.component('detail-modal-price', require('./components/Transaction/Detail/ModalPrice.vue').default);
Vue.component('detail-modal-tem', require('./components/Transaction/Detail/ItemDetailModal.vue').default);
Vue.component('detail-search-tem', require('./components/Transaction/Detail/SearchItem.vue').default);
Vue.component('detail-search', require('./components/Transaction/Detail/Search.vue').default);
Vue.component('detail-modal', require('./components/Transaction/Detail/Modal.vue').default);
Vue.component('detail-item-list', require('./components/Transaction/Detail/ItemList.vue').default);
Vue.component('detail-card', require('./components/Transaction/Detail/Detail.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
