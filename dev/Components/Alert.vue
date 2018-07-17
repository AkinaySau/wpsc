<template>
	<b-alert :show="dismissCountDown"
	         dismissible
	         variant="warning"
	         @dismissed="dismissCountDown=0"
	         @dismiss-count-down="countDownChanged">
		<p><span>{{message}}</span>{{dismissCountDown}}</p>
		<b-progress variant="warning"
		            :max="10"
		            :value="dismissCountDown"
		            height="4px">
		</b-progress>
	</b-alert>
</template>

<script>
	export default {
		name: 'Alert',
		props: {
			message: {
				type: String,
				default: '<<<Empty message>>>',
				// required: true,
			},
		},
		data() {
			return {
				dismissSecs: 10,
				dismissCountDown: 0,
			};
		},
		methods: {
			countDownChanged(dismissCountDown) {
				this.dismissCountDown = dismissCountDown;
			},
		},
	};
</script>

<style scoped>

</style>