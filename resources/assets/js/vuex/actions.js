import api from '../api'

export default {
    getCurrentUser ({ dispatch }){
        api.getCurrentUser( user => {
            
            if( ! user )
            {
                dispatch('LOGOUT_USER');
                return
            }
            dispatch('setCurrentUser', user);
        })
    }
}
