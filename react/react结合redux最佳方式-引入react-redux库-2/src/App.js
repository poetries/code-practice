import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import {Button} from 'antd-mobile';
import {connect} from 'react-redux';
import {
  actionCreator_count,
  actionCreator_fetchdata_arr,
  async_fetch_data,
  async_fetch_promise_data,
  actionCreator_fetchdata_obj,
  actionCreator_bool
} from './practice-redux';

class App extends Component {
  render() {
    const {
      // action creator
      actionCreator_count,
      actionCreator_fetchdata_arr,
      async_fetch_data,
      async_fetch_promise_data,
      actionCreator_fetchdata_obj,
      actionCreator_bool,

      //状态
      count,
      BoolState,
      get_data_arr,
      get_data_obj,
      get_async_data,
      get_async_promise_data
     }  = this.props;
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <hr />
          <Button onClick={()=>actionCreator_count()}>点击+1</Button>
          <p>{count}</p>
        
          <Button onClick={()=>actionCreator_fetchdata_arr('state返回的状态是arr')}>fetch数据,state是数组</Button>
          {
            get_data_arr.map((item,index)=><p key={index}>{item} {Math.random()}</p>)
           }
          
          <Button onClick={()=>async_fetch_data({name:'jingguanliuye',age:18})}>redux异步获取数据</Button>
          {
            get_async_data.map((item,index)=><p key={index}>{item.name}-{item.age}</p>)
           }

          <Button onClick={()=>async_fetch_promise_data({name:'poetries',age:22})}>promise异步获取数据</Button>
          {
            get_async_promise_data.map((item,index)=><p key={index}>{item.name}-{item.age}</p>)
           }

          <Button onClick={()=>actionCreator_fetchdata_obj('state返回的状态是obj')}>fetch数据,state是对象</Button>
          <p>{get_data_obj.payload} </p>

          <Button onClick={()=>actionCreator_bool()}>state是布尔值</Button>
          <p>{BoolState.toString()}</p>
        
          
      </div>
    );
  }
  componentDidMount(){
    //store.dispatch(actionCreator('学习redux'));
    // register theme object
    
  }
}

const mapStateToProps = (state, ownProps) => {
  return {
    count:state.count,
    BoolState:state.BoolState,
    get_data_arr:state.get_data_arr,
    get_data_obj:state.get_data_obj,
    get_async_data:state.get_async_data,
    get_async_promise_data:state.get_async_promise_data
  }
}

export default connect(
  mapStateToProps,{
    actionCreator_count,
    actionCreator_fetchdata_arr,
    async_fetch_data,
    async_fetch_promise_data,
    actionCreator_fetchdata_obj,
    actionCreator_bool
  }
)(App)
