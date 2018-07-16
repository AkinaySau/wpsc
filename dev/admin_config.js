import './scss/style.scss';

import 'bootstrap-vue/src/';

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

Vue.use(BootstrapVue);

import App from './config/App.vue';
import Logs from './config/Logs.vue';

window.onload = function() {
	new Vue({
		el: '#wpsc_vue_app',
		render: h => h(App),

		// beforeMount: function() {
		// 	this.configs = JSON.parse(
		// 		this.$el.attributes['data-options'].value);
		// },
	});

	new Vue({
		el: '#wpsc_vue_logs',
		render: h => h(Logs),
		data: function() {
			return {
				logs: '',
			};
		},
		beforeMount: function() {
			this.logs = this.$el.attributes['data-logs'].value;
		},
	});
	console.log('config.ok');
};