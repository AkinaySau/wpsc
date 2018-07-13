import './scss/style.scss';

import 'bootstrap-vue/src/';

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

import App from './config/App.vue';

Vue.use(BootstrapVue);

window.onload = function() {
	new Vue({
		el: '#wpsc_vue_app',
		render: h => h(App),
	});
	console.log('config.ok');
};