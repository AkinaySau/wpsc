import './scss/style.scss';
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import App from './Config/App.vue';
import Logs from './Config/Logs.vue';

// import 'bootstrap-vue/src/';

Vue.use(BootstrapVue);

window.onload = function() {
	new Vue({
		el: '#wpsc_vue_app',
		render: h => h(App),
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