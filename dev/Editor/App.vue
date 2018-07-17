<template>
	<div id="wpsc_editor_app">
		<Toolbar />


		<ParticleList />
		<div class="content">{{getContent}}</div>
	</div>
</template>

<script lang="js">
	import Toolbar from '../Components/Editor/Toolbar.vue';
	import ParticleList from '../Components/Editor/ParticleList.vue';

	import {mapGetters} from 'vuex';

	export default {
		name: 'App',
		components: {ParticleList, Toolbar},
		data() {
			return {
				toolbar: {},
			};
		},
		computed: {
			...mapGetters('content', {getContent: 'content'}),
		},
		methods: {},
	};
</script>

<style lang="scss">

</style>