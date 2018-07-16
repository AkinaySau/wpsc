<template>
	<div class="row">

		<table class="table table-dark table-striped table-sm">
			<thead>
			<tr>
				<th colspan="2">Registered namespaces</th>
			</tr>
			</thead>
			<tbody>
			<tr v-for="item in logs.namespace">
				<td>{{item.namespace}}</td>
				<td>{{item.path}}</td>
			</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
	export default {
		name: 'Logs',
		data() {
			return {
				logs: JSON.parse(this.$parent.$data.logs),
			};
		},

	};
</script>

<style scoped>

</style>