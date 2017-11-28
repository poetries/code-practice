import * as ActionTypes from '../constants';
import axios from 'axios';

export const Login = ()=>{
    return {
        type:'LOGIN'
    }
}
export const Logout = ()=>{
    return {
        type:'LOGINOUT'
    }
}
export const News = (json)=>{
    return {
        type:'NEWS_DATA',
        payload: json.data.children.map(item=>item.data)
    }
}
export const get_news_data = (title)=>(dispatch, getState) =>new Promise((resolve,reject)=>{
    return axios.get(`http://www.subreddit.com/r/${title}.json`).then(res=>dispatch(News(res.data)))
})