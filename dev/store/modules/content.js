'use strict';
export default {
	namespaced: true,
	state: {
		content: window.wpsc_content,
		test: window.test,
	},
	getters: {
		content: state => state.content,
		test: state => state.test,

	},
	mutations: {
		set: (state, content) => {
			state.content = content;
		},
	},
	actions: {
		set({commit}, newContent) {
			commit('set', newContent);
		},
	},
};