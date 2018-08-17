import axios from 'axios';


const HTTP = axios.create({
	headers: {
		Authorization: 'Bearer ' + localStorage.getItem('token')
	}
});

HTTP.interceptors.response.use(function (response) {
	return response;
}, function (error) {
	var res = error.response;
	if(res.status === 401) {
		window.location.href = '/signup';
	}
	return Promise.reject(error);
});

export {HTTP};