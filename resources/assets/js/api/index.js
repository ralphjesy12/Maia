import axios from 'axios';

export default {
	getCurrentUser (cb, ecb = null) {
	  	axios.get('/user/profile').then(
	  		(resp) => cb(resp.data.user),
	  		(resp) => ecb(resp.data)
	  	);
	},
}
