<template>
	<input type="hidden" :name="{{}}">
</template>

<script>
	import Field from '../modules/field.module';

	export default {
		name: 'Hidden',
		props: {
			name: {
				type: Field,

			},
		},
	};
</script>

<style scoped>

</style>