<template>
	<div>
        <search-input 
            v-on:show-loading="showLoading()"
            v-on:hide-loading="hideLoading()"
            ></search-input>

		<loading v-bind:showLoading="isLoading"></loading> 
		<confirm v-bind:showConfirm="isConfirm" v-bind:configConfirm="config"></confirm>	
	</div>
</template>

<script>
    export default {
    	data() {
            return {
                isLoading: false,
                isConfirm: false,
                config: {
                	'title': 'test title',
                	'content': 'test content',
                }
            }
        },
        mounted() {
            console.log('Loading mounted.')
        },
        methods: {
        	'showLoading': function() {
        		this.isLoading = true;
        	},
        	'hideLoading': function() {
        		this.isLoading = false;
        	},
        	'setConfirmConfig': function() {
        		this.config.fire = () => {
        			this.isConfirm = false;
        		};
        		this.isConfirm = true;
        	}
        }
    }
</script>