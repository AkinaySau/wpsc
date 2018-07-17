<template>
	<div class="row" id="wpsc_app">
		<b-form :action="getAction()" :method="form.method">

			<div v-for="field in options">
				<CheckboxListField :field="field" v-if="field.type ==='CheckboxListField'" />
			</div>

			<b-button :variant="form.submitButton.variant" type="submit">Submit</b-button>
		</b-form>
	</div>
</template>

<script>
	import CheckboxListField from '../Components/CheckboxListField.vue';

	export default {
		name: 'App',
		components: {CheckboxListField},
		data() {
			return {
				alerts: window.wpsc_alerts,
				options: window.wpsc_options,
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