<template>
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" autocomplete="off">

                    	<ul v-if="errors.length">
                    		<li v-for="error in errors">{{ error }}</li>
                    	</ul>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" v-model="email" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" v-model="password" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="button" class="btn btn-primary" v-on:click="signUp">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <loading v-bind:showLoading="isLoading"></loading> 
    </div>
</template>

<script type="text/javascript">
	export default {
        name: 'login-app',
		data() {
			return {
				isLoading: false,
				errors: [],
				email: '',
				password: ''
			}
		},
        mounted() {
            console.log('Login page mounted.')
        },
        methods: {
        	'signUp': function() {
        		this.isLoading = true;
        		axios.post('/api/login', 
        		{
    				email: this.email,
    				password: this.password
        		})
        		.then(res => {
        			var data = res.data;
        			//error
        			if(data.status === 'error') {
        				var errors =[];
        				if(data.message && data.message.email) {
        					errors = errors.concat(data.message.email);
        				}
        				if(data.message && data.message.password) {
        					errors = errors.concat(data.message.password);
        				}
        				this.errors = errors;
        			}
        			
        			//success
        			if(data.status === 'success') {
        				localStorage.setItem('token', data.token);
        				window.location.href = '/admin/dashboard';
        			}
        			this.isLoading = false;
        			this.reset();
        		})
        		.catch(error => {
        			var res = error.response;
        			if(res && res.data) {
        				this.errors.push(res.data.message);
        			}
        			this.isLoading = false;
        			this.reset();
        		});
        	},
        	'reset': function() {
        		this.email = '';
        		this.password = '';
        	}
        }
    }
</script>
<style type="text/css">
	input:-webkit-autofill,
	input:-webkit-autofill:hover,
	input:-webkit-autofill:focus,
	input:-webkit-autofill:active {
	-webkit-box-shadow: 0 0 0px 1000px white inset !important;
	}
</style>