<template>
	<div class="grid-row">
		<div class="grid-cell">
			<input type="checkbox" name="">
		</div>
        <div class="grid-cell" v-for="$index in keys">
            <p>{{ item[$index] }}</p>
        </div>
    </div>
</template>

<script>
    export default {
    	props: ['keys', 'item'],
    	data() {
            return {
            }
        },
        mounted() {
            console.log('Grid row mounted.', this.keys, this.list)
        },
        methods: {
        	
        }
    }
</script>