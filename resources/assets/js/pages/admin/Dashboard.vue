<template>
	<div>
		<grid 
		:headings="headings" 
		:keys="keys" 
		:list="list" 
		></grid>
		<pagination :total="total" :action="'/get-store'"></pagination>
		<checkbox></checkbox>		
	</div>
	
</template>

<script>
    export default {
        name: 'dashboard-app',
    	data() {
            return {
            	headings: [
            		{label: 'ID'},
            		{label: 'Title'},
            		{label: 'Content'}
            	],
            	keys: ['id', 'title', 'content'],
            	list: [
            		{id: 1, title: 'Duc', content: 'tetx1'},
            		{id: 2, title: 'Huong', content: 'tetx2'},
            		{id: 3, title: 'TA', content: 'tetx3'}
            	],
            	total: 41
            }
        },
        mounted() {
            console.log('Dashboard mounted.')
        },
        methods: {
        	
        }
    }
</script>