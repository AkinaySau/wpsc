'use strict';
export default {
	namespaced: true,
	state: {
		status: false,
	},
	mutations: {
		show: state => state.status = true,
		hide: state => state.status = false,
	},
	getters: {
		status: state => state.status,

	},
	actions: {
		show({commit}) {
			commit('show');
		},
		hide({commit}) {
			commit('hide');
		},
		console: () => {
			console.log(this.state.status());
		},
	},
};