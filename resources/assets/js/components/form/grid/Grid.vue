<template>
	<div class="grid-table">
        <grid-heading :headings="headings"></grid-heading>
        <div class="grid-row-group">
            <grid-row v-for="item in list" :key="item.id" :item="item" :keys="keys" ></grid-row>
        </div>
	</div>
</template>

<script>
    export default {
    	props: ['headings', 'keys', 'list'],
    	data() {
            return {
            }
        },
        mounted() {
            console.log('Grid mounted.', this.headings)
        },
        methods: {
        	
        }
    }
</script>

<style type="text/css">
	.grid-table {
        display: table;
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
        border-spacing: 0;
        border-collapse: collapse;
    }

    .grid-title {
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }

    .grid-heading {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }

    .grid-row {
        display: table-row;
    }

    .grid-cell {
        display: table-cell;
        border: 1px solid #d3e0e9;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }

    .grid-table p {
        padding: 0;
        margin: 0;
    }

    .grid-row-group {
        display: table-row-group;
    }
</style>