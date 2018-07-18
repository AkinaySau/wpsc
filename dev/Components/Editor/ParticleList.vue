<template>
	<div id="wpsc_particle_modal" class="modal" role="dialog" v-if="particleModalStatus">
		<div class="modal-overlay" @click="hideParticleList"></div>
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body" v-for="(fields,namespace,key) in list" :id="namespace+'_'+key">
					<p>{{namespace}}</p>
					<hr>
					<b-list-group>
						<b-list-group-item @click="" type="button" button v-for="field in fields">Button item</b-list-group-item>
					</b-list-group>
					{{particleModalStatus}}
				</div>
				<div class="modal-footer">

				</div>
			</div>
		</div>
	</div>
</template>

<script lang="js">
	import {mapActions, mapGetters, mapState} from 'vuex';

	export default {
		name: 'ParticleList',
		computed: mapState({
			...mapGetters('particles', {
				particleModalStatus: 'status',
				list: 'getList',
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
