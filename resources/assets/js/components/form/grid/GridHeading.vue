<template>
	<div class="grid-heading">
		<div class="grid-cell">
			<input type="checkbox" name="">
		</div>
        <div class="grid-cell" v-for="heading in headings">
            <p>{{ heading.label }}</p>
        </div>
    </div>
</template>

<script>
    export default {
    	props: ['headings'],
    	data() {
            return {
            }
        },
        mounted() {
            console.log('Grid Heading mounted.', this.headings)
        },
        methods: {
        	
        }
    }
</script>

