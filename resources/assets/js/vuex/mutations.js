export default{
    progressStart(state){
        state.progress.isActive = true;
        state.progress.interval = setInterval(function(){
            state.progress.position += 1;
            if(state.progress.position> 100)
                state.progress.position = 0;
        },state.progress.timeoutSpeed);
    },
    progressStop(state){
        state.progress.position = 0;
        clearInterval(state.progress.interval);
        state.progress.isActive = false;
    },
    progressSet(state,position){
        state.progress.isActive = true;
        clearInterval(state.progress.interval);
        state.progress.position = position;
    },
    setCurrentUser(state,user){
        state.currentUser = user;
    }
}
