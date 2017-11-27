import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import {createStore,applyMiddleware,combineReducers} from 'redux';
import thunk from 'redux-thunk';
import {createLogger } from 'redux-logger'
import {Button} from 'antd-mobile';

// ============ 同步action
const actionCreator_count = ()=>({
  type:"INCREMENT"
})
const actionCreator_bool = ()=>({
  type:"BOOL"
})

const actionCreator_fetchdata_arr = (data)=>({
  type:"FETCHDATA_ARR",
  payload:data
})

const actionCreator_fetchdata_obj = (data)=>({
  type:"FETCHDATA_OBJ",
  payload:data
})

// ============ 异步action
const async_fetch_data = (data)=>(dispatch,getState)=>{
  dispatch({type:"START"})
  return setTimeout(()=>{
    dispatch({
      type:"ASYNC_FETCH_DATA",
      payload:data
    })
  },2000)
}


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

const rootReducers = combineReducers({
  count,
  BoolState,
  get_data_arr,
  get_data_obj,
  get_async_data
})

const store = createStore(rootReducers,applyMiddleware(thunk,createLogger()))



store.subscribe(()=>{
  console.log('当前状态是：',store.getState());
})

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
          <Button onClick={()=>store.dispatch(actionCreator_count())}>点击+1</Button>
          <Button onClick={()=>store.dispatch(actionCreator_fetchdata_arr('state返回的状态是arr'))}>fetch数据,state是数组</Button>
          <Button onClick={()=>store.dispatch(async_fetch_data({name:'poetries',age:22}))}>异步获取数据</Button>
          <Button onClick={()=>store.dispatch(actionCreator_fetchdata_obj('state返回的状态是obj'))}>fetch数据,state是对象</Button>
          <Button onClick={()=>store.dispatch(actionCreator_bool())}>state是布尔值</Button>
      </div>
    );
  }
  componentDidMount(){
    //store.dispatch(actionCreator('学习redux'));
  }
}

export default App;
