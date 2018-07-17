//run store
'use strict';
import Vuex from 'vuex';

import Content from './modules/content';
import Particles from './modules/particles';

module.export = {
	strict: process.env.NODE_ENV !== 'production',
	modules: {
		content: Content,
		particles: Particles,
	},
};