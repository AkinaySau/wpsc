'use strict';
export default {
	namespaced: true,
	state: {
		content: ($) => $('[name=content]').val(),
	},
	getters: {
		content: state => state.content,

	},
	mutations: {},
	actions: {},
};