import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import {Button} from 'antd-mobile';

class App extends Component {
  render() {
    const {
      store,
      actionCreator_count,
      actionCreator_fetchdata_arr,
      async_fetch_data,
      async_fetch_promise_data,
      actionCreator_fetchdata_obj,
      actionCreator_bool
    }  = this.props;
    const num = store.getState().count;
    const get_data_arr = store.getState().get_data_arr;
    console.log(num)
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
          <Button onClick={()=>store.dispatch(actionCreator_count())}>点击+1</Button>
          <p>{num}</p>
        
          <Button onClick={()=>store.dispatch(actionCreator_fetchdata_arr('state返回的状态是arr'))}>fetch数据,state是数组</Button>
          {
            get_data_arr.map((item,index)=><p key={index}>item {Math.random()}</p>)
           }
          
          <Button onClick={()=>store.dispatch(async_fetch_data({name:'poetries',age:22}))}>redux异步获取数据</Button>
         
          <Button onClick={()=>store.dispatch(async_fetch_promise_data({name:'poetries',age:22}))}>promise异步获取数据</Button>
          
          <Button onClick={()=>store.dispatch(actionCreator_fetchdata_obj('state返回的状态是obj'))}>fetch数据,state是对象</Button>
         
          <Button onClick={()=>store.dispatch(actionCreator_bool())}>state是布尔值</Button>
          <hr />
          
      </div>
    );
  }
  componentDidMount(){
    //store.dispatch(actionCreator('学习redux'));
    // register theme object
    
  }
}

export default App;
