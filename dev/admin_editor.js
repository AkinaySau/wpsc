'use strict';
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import Vuex, {mapActions} from 'vuex';
import App from './Editor/App.vue';
import Store from './store/index';

Vue.use(BootstrapVue);
Vue.use(Vuex);

require(__dirname + '/scss/editor_style.scss');

window.test = 'test';
window.onload = function() {
	window.wpsc_content = $('[name=content]').val();
	console.log(window.wpsc_content);
	const store = new Vuex.Store(Store);
	new Vue({
		el: '#postdivrich',
		store,
		render: h => h(App),
		methods: {
			...mapActions('content', {
				setContent: 'set',
			}),
			...mapActions('particles', {
				setupListParticles: 'setupList',
			}),
		},
		beforeMount: function() {
			this.setContent(window.wpsc_content);
			this.setupListParticles(window.wpsc_particles);
		},
	});
};