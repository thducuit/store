require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';


//page
import StoreApp from './pages/admin/store/Store.vue';
import DashboardApp from './pages/admin/Dashboard.vue';
import LoginApp from './pages/Login.vue';

//components
import TableCpn from './components/form/table/Table.vue';


//import Vuex from 'vuex';
// import StoreData from './store'

// Vue.use(VueRouter);
// Vue.use(Vuex);

// const store = new Vuex.Store(StoreData);

Vue.component('search-input', require('./components/SearchInput.vue'));
Vue.component('google-map', require('./components/google/GoogleMap.vue'));
Vue.component('loading', require('./components/Loading.vue'));
Vue.component('confirm', require('./components/Confirm.vue'));

Vue.component('grid-title', require('./components/form/grid/GridTitle.vue'));
Vue.component('grid-heading', require('./components/form/grid/GridHeading.vue'));
Vue.component('grid-row', require('./components/form/grid/GridRow.vue'));
Vue.component('grid', require('./components/form/grid/Grid.vue'));
Vue.component('table-cpn', TableCpn);

Vue.component('pagination', require('./components/form/Pagination.vue'));
Vue.component('checkbox', require('./components/form/Checkbox.vue'));

const app = new Vue({
    el: '#app',
    components: {
    	LoginApp,
    	DashboardApp,
    	StoreApp
    }
});
