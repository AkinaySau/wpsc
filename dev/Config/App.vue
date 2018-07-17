<template>
	<div class="row" id="wpsc_app">
		<b-form :action="getAction()" :method="form.method">
			<component :is="field.type" :field="field" :key="key" v-for="(field,key) in options" />
			<b-button :variant="form.submitButton.variant" type="submit">Submit</b-button>
		</b-form>
	</div>
</template>

<script>
	import CheckboxListField from '../Components/CheckboxListField.vue';
	import Hidden from '../Components/HiddenField.vue';

	export default {
		name: 'App',
		components: {Hidden, CheckboxListField},
		data() {
			return {
				options: window.wpsc_options.fields,
				method: 'post',
				form: {
					method: 'post',
					submitButton: {
						variant: 'outline-primary',
					},
				},
			};
		},
		methods: {
			getAction() {
				return window.location.href;
			},
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