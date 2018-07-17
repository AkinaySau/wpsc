<template>
	<div class="particle-list particle-list__overlay" v-show="state">
		<!--<div class="particle-list__overlay"></div>-->
		<div class="particle-list__list">

		</div>
	</div>
</template>

<script lang="js">
	import {mapActions} from 'vuex';

	export default {
		name: 'ParticleList',
		// computed: mapState({
		// 	particles: (state = this.$store.state) => state.particles,
		// }),
		methods: {
			...mapActions({
				particles: 'particles',
			}),
		},
	}
	;
</script>

<style scoped lang="scss">
	@import "../../scss/vars";

	.particle-list {
		position: absolute;
		width: 100%;
		height: 100%;

		&__overlay {
			background: $backgroung;
		}
	}
</style>