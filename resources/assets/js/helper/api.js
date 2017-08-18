import Axios from 'axios'

export function get(url){
    return Axios({
        method: 'GET',
        url: url
    });
}

export function post(url, payload){
    return Axios({
        method: 'POST',
        url: url,
        data: payload
    });
}