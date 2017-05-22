import api from '../api'

export default {
    getCurrentUser ({ dispatch }){
        api.getCurrentUser( user => {

            if( ! user )
            {
                dispatch('logoutUser');
                return
            }
            dispatch('setCurrentUser', user);
        })
    },
    setCurrentUser({ commit },user){
        commit('setCurrentUser',user);
    },
    logoutUser({ commit }){
        this.$router.push('/user/logout');
    }
}
