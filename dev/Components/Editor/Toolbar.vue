<template>
	<div class="toolbar">
		<b-button-toolbar key-nav aria-label="Toolbar with button groups">
			<b-button-group size="sm" class="mx-1">
				<b-btn @click="showParticleListPopup">Add row</b-btn>
			</b-button-group>
		</b-button-toolbar>
	</div>
</template>

<script>
	import {mapActions} from 'vuex';

	export default {
		name: 'Toolbar',

		methods: {
			...mapActions('particles',
				{
					showParticleListPopup: 'show',
				}),
		},
	};
</script>

<style scoped>

</style>