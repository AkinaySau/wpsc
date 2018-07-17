'use strict';
module.export = {
	state: {
		status: false,
	},
	// mutations: {},
	getters: {
		status: state => state.status,
	},
	actions: {
		show: state => state.status = true,
		hide: state => state.status = false,

		console:() => {console.log('module.particles')}
	},
};