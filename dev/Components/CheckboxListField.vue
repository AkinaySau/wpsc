<template>
	<div>11
		{{field_log()}}
		<!--<b-form-checkbox name="{{field.name}}[]" id="{{item.name}}_{{key}}" v-for="(item,key) in field.list" v-model="item" value="item">-->
		<!--{{item}}-->
		<!--</b-form-checkbox>-->
	</div>
</template>

<script>
	export default {
		name: 'CheckboxListField',
		model: {
			prop: 'field',
		},
		props: ['field', 'key'],
		data() {
			return {
				key: this.$props.key,
			};
		},
		computed: {
			field: {
				get() {
					return this.$props.field;
				},
			},
		},
		methods: {
			field_log() {
				console.log('asdasd');
				console.log(this.fields);
			},
		},
	};
</script>

<style scoped>

</style>