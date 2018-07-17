<template>
	<div id="wpsc_editor_app">
		<Toolbar v-model="toolbar" />


		<ParticleList />
	</div>
</template>

<script lang="js">
	import Toolbar from '../Components/Editor/Toolbar.vue';
	import ParticleList from '../Components/Editor/ParticleList.vue';

	export default {
		name: 'App',
		components: {ParticleList, Toolbar},
		data() {
			return {
				toolbar: {},
			};
		},
		methods: {},
	};
</script>

<style lang="scss">

</style>