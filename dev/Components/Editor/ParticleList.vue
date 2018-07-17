<template>
	<div id="wpsc_particle_modal" class="modal" role="dialog" v-if="particleModalStatus">
		<div class="modal-overlay" @click="hideParticleList"></div>
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					{{particleModalStatus}}
				</div>
				<div class="modal-footer">
					ss
				</div>
			</div>
		</div>
	</div>
</template>

<script lang="js">
	import {mapState, mapActions, mapGetters} from 'vuex';

	export default {
		name: 'ParticleList',
		computed: mapState({
			...mapGetters('particles', {
				particleModalStatus: 'status',
			}),
			// ...mapState({
			//
			// })
		}),

		methods: {
			...mapActions('particles',
				{
					showParticleList: 'show',
					hideParticleList: 'hide',
					particleConsole: 'console',
				}),
		},
	}
	;
</script>

<style scoped lang="scss">
	@import "../../scss/vars";

	#wpsc_particle_modal {
		display: block !important;
		/*z-index: 9990 !important;*/
		& .modal-overlay {
			background: $backgroung;
			position: fixed;
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}
	}
</style>

position: absolute;
width: 100%;
height: 100%;

&__overlay {
background: $backgroung;
opacity: 0.5;
/*позиционируем и центрируем*/
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
margin: auto;
}