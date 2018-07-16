<template>
	<div class="row" id="wpsc_app">
		<b-form>

			<div v-for="field in options">
				<CheckboxListField :field="field" :key="field.name" v-if="field.type ==='CheckboxListField'" />
			</div>


		</b-form>
	</div>
</template>

<script>
	import CheckboxListField from './Components/CheckboxListField.vue';

	export default {
		name: 'App',
		components: {CheckboxListField},
		data() {
			return {
				options: window.wpsc_options,
			};
		},
	};
</script>

<style scoped lang="scss">
	@import "../scss/vars";

	#wpsc_app {
		min-width: 50px;
		min-height: 50px;
	}
</style>