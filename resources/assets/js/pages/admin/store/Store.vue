<template>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Store list</div>
					<div class="panel-body">
						<table-cpn
						:headings="headings" 
						:keys="keys" 
						:list="list" 
						></table-cpn>
					</div>
				</div>
			</div>
		</div>

		<loading v-bind:showLoading="isLoading"></loading> 
	</div>
</template>

<script type="text/javascript">
	import { HTTP } from '../../../http';

	export default {
		name: 'store-app',
		data() {
			return {
				isLoading: false,
				headings: [
            		{label: 'ID'},
            		{label: 'Title'},
            	],
            	keys: ['id', 'name'],
            	list: []
			}
		},
		mounted() {
			this.isLoading = true;
			HTTP.get('/api/stores')
			.then(res => {
				var res = res.data;
				if(res.status == 'success') {
					this.list = res.data;
					this.isLoading = false;
				} 
			})
			.catch(error => {

			});
		}
	}
</script>