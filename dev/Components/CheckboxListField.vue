<template>
	<div>
		<b-form-group :label="field.label">
			<b-form-checkbox-group :id="field.name" :name="field.name+'[]'" v-model="field.value" :options="field.list" />
		</b-form-group>
	</div>
</template>

<script>
	export default {
		name: 'CheckboxListField',
		props: {
			field: {
				type: Object,
				default: {
					list: [],
					name: 'tmp[]',
					value: [],
					label: '',
					help: '',
				},
				required: true
			},
		},
		methods: {
			field_log() {
				console.log(this.field);
			},
		},
	};
</script>

<style scoped>

</style>