<template>
	<div id="confirm-modal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">{{ configConfirm.title }}</h4>
				</div>
		      	<div class="modal-body">
		        	<p>{{ configConfirm.content }}</p>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary" v-on:click="fire">OK</button>
		        	<button type="button" class="btn btn-default" v-on:click="cancel">Close</button>
		      	</div>
	    	</div>	
		</div>
	</div>
</template>

<script>
    export default {
    	props: ['showConfirm', 'configConfirm'],
    	data() {
            return {
                
            }
        },
        mounted() {
            console.log('Modal mounted.');
        },
        watch: {
        	'showConfirm': function(newVal) {
        		if(newVal) {
        			jQuery('#confirm-modal').modal('show');
        		}else {
        			jQuery('#confirm-modal').modal('hide');
        		}
        	}
        },
        methods: {
        	'fire': function() {
        		if(this.configConfirm.fire) {
        			this.configConfirm.fire();
        		}
        	},
        	'cancel': function() {
        		if(this.configConfirm.cancel) {
        			this.configConfirm.cancel();
        		}
        	}
        }
    }
</script>