//run store
'use strict';
import Content from './modules/content';
import Particles from './modules/particles';

export default {
	strict: process.env.NODE_ENV !== 'production',
	modules: {
		content: Content,
		particles: Particles,
	},
};