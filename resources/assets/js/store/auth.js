export default{
    state:{
        user_id: null,
        api_token: null
    },
    initialize(){
        this.state.user_id = localStorage.getItem('user_id')
        this.state.api_token = localStorage.getItem('api_token')
    },
    set(user_id, api_token){
        localStorage.setItem('user_id', user_id)
        localStorage.setItem('api_token', api_token)
        this.initialize()
    },
    remove(){
        localStorage.removeItem('user_id')
        localStorage.removeItem('api_token')
        this.initialize()
    }
}