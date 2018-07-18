'use strict';
export default {
	namespaced: true,
	state: {
		status: false,
		list: {},
	},
	mutations: {
		show: state => state.status = true,
		hide: state => state.status = false,
		getList: (state, list) => state.list = list,
	},
	getters: {
		status: state => state.status,
		getList: state => state.list,
	},
	actions: {
		show({commit}) {
			commit('show');
		},
		hide({commit}) {
			commit('hide');
		},
		setupList: ({commit}, list) => {
			commit('getList', list);
		},
	},
};