import {combineReducers} from 'redux';

// ============ 同步action
export const actionCreator_count = ()=>({
    type:"INCREMENT"
  })
export const actionCreator_bool = ()=>({
    type:"BOOL"
  })
  
export  const actionCreator_fetchdata_arr = (data)=>({
    type:"FETCHDATA_ARR",
    payload:data
  })
  
export  const actionCreator_fetchdata_obj = (data)=>({
    type:"FETCHDATA_OBJ",
    payload:data
  })
  
  // ============ 异步action
 export  const async_fetch_data = (data)=>(dispatch,getState)=>{
    dispatch({type:"START"})
    return setTimeout(()=>{
      dispatch({
        type:"ASYNC_FETCH_DATA",
        payload:data
      })
    },2000)
  }
export  const async_fetch_promise_data = (data)=>(dispatch,getState)=>new Promise((resolve,reject)=>{
    dispatch({type:"PROMISE_START"})
    return setTimeout(()=>{
      dispatch({
        type:"ASYNC_FETCH_PROMISE_DATA",
        payload:data
      })
    },2000)
  })
  
  // state状态 是基本类型
  const count = (state =0, action) => {
    switch (action.type) {
      case 'INCREMENT':
        return ++state;
      default:
        return state
    }
  }
  // state状态 是布尔值
  const BoolState = (state =false, action) => {
    switch (action.type) {
      case 'BOOL':
        return !state;
      default:
        return state
    }
  }
  // state状态 是数组
  const get_data_arr = (state =[], action) => {
    switch (action.type) {
      case 'FETCHDATA_ARR':
        return [
          ...state,
          action.payload
        ];
      default:
        return state
    }
  }
  // state状态 是对象
  const get_data_obj = (state ={}, action) => {
    switch (action.type) {
      case 'FETCHDATA_OBJ':
        return {
          ...state,
          payload: action.payload
        }
      default:
        return state
    }
  }
  
  // ======== 异步action的reducer
  const get_async_data = (state =[], action) => {
    switch (action.type) {
      case 'ASYNC_FETCH_DATA':
        return [
          ...state,
          action.payload
        ];
      default:
        return state
    }
  }
  const get_async_promise_data = (state =[], action) => {
    switch (action.type) {
      case 'ASYNC_FETCH_PROMISE_DATA':
        return [
          ...state,
          action.payload
        ];
      default:
        return state
    }
  }
  
 export const rootReducers = combineReducers({
    count,
    BoolState,
    get_data_arr,
    get_data_obj,
    get_async_data,
    get_async_promise_data
  })
  

    
