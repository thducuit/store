<template>
	<ul class="pagination">
		<li v-for="$index in pages" v-on:click="changePage($index)" v-bind:class="{ active: page == $index }">{{ $index }}</li>
	</ul>
</template>

<script type="text/javascript">
	 export default {
	 	props: [
	 		'total', 'action'
	 	],
    	data() {
            return {
            	pages: 0,
            	page: 1
            }
        },
        mounted() {
        	this.pages = Math.ceil(this.total / 20);
            console.log('Pagination mounted.', this.pages);
        },
        methods: {
    		'changePage': function($index) {
    			this.page = $index;
    		}
        }
    }
</script>