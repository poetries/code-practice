/*
 * @Author: mikey.zhaopeng
 * @Date: 2017-11-13 20:13:18
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2017-11-13 20:42:52
 */

import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// 不可控组件 需要使用ref属性对DOM节点操作
class Uncontrol extends Component {
  submitData = (e)=>{
    const userInput1 = ReactDOM.findDOMNode(this.refs.userInput1).value
    const userInput2 = ReactDOM.findDOMNode(this.refs.userInput2).value
    console.log(userInput1,userInput2)
    e.preventDefault();
  }
  render (){
   return (
      <form onSubmit={this.submitData}>
           <input type="text" value="不可控组件" ref="userInput1" />
           <input type="text" defaultValue="可控组件" ref="userInput2" />
         <button>提交</button>
      </form>
   )
  }
}

// 可控组件 不需要对DOM节点操作
export default class Control extends Component {
  state = {value:"可控组件"}
  submitData = (e)=>{
    alert(this.state.value);
    e.preventDefault();
  }
  handleChange(e){
    this.setState({
      value:e.target.value
    })
  }
  render (){
   return (
      <form onSubmit={this.submitData}>
      {/*在表单中value不能改变 要使用defaultValue checked 与defaultChecked同上*/}
           <input type="text" defaultValue={this.state.value} onChange={this.handleChange.bind(this)} />
           <button>提交</button>
      </form>
   )
  }
}


