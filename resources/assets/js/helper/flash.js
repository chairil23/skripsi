export default {
    state: {
        success: null,
        error: null
    },
    setSuccess(message){
        this.state.success = message
        setTimeOut(() => {
            this.removeSuccess()
        }, 3000);
    },

    setError(message){
        this.state.error = message
        setTimeout(() => {
            this.removeError()
        }, 6000)
    },

    removeSuccess(){
        this.state.message = null
    },
    
    removeError(){
        this.state.error = null
    }

}