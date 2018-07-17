<template>
	<div class="toolbar">
		<b-button-toolbar key-nav aria-label="Toolbar with button groups">
			<b-button-group size="sm" class="mx-1">
				<b-btn @click="openListRows">Add row</b-btn>
			</b-button-group>
		</b-button-toolbar>
	</div>
</template>

<script>
	export default {
		name: 'Toolbar',

		methods: {
			openListRows() {
				// this.$store.state.commit('particleStoreShow');
				console.log(this.$store.getters.particleStoreState());
			},
			closeListRows() {
				this.$store.state.commit('particleStoreHide');
			},
		},
	};
</script>

<style scoped>

</style>