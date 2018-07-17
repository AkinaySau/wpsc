<template>
	<div>
		<input type="hidden" :name="field.name" v-model="field.value">
	</div>
</template>

<script>

	export default {
		name: 'Hidden',
		props: {
			field: {
				type: Object,
				default: {
					name: 'tmp',
					value: '',
					label: '',
					help: '',
				},
				required: true,
			},
		},
	};
</script>

<style scoped>

</style>