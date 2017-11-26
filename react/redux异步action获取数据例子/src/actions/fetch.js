
import { createAction } from 'redux-actions';
export const RECEIVE_SUCCESS = 'RECEIVE_SUCCESS';
export const POST_REQUEST = 'POST_REQUEST';

export const receiveData = (json) =>{
    return {
      type:"RECEIVE_SUCCESS",
      payload: json.data.children.map(item=>item.data)
    }
  }

// 异步的action createor 返回一个函数，根据redux-thunk来定义
// export const async_fetch_data = (title)=>(dispatch, getState) =>{
//     dispatch({type:POST_REQUEST});
//     return fetch(`http://www.subreddit.com/r/${title}.json`).then(response=>response.json()).then(json=>dispatch(receiveData(json)))
// }

// 写法二：利用redux-promise中间件
export const async_fetch_data = (title)=>(dispatch, getState) =>new Promise((resolve,reject)=>{
    dispatch({type:POST_REQUEST});
    return fetch(`http://www.subreddit.com/r/${title}.json`).then(response=>response.json()).then(json=>dispatch(receiveData(json)))
})
