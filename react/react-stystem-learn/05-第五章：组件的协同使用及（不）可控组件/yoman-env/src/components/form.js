/*
 * @Author: mikey.zhaopeng
 * @Date: 2017-11-13 18:33:10
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2017-11-14 10:32:24
 */


/**
 * 组件的协同使用
 * 使用的是一个组件包裹其他组件
 */

import React, { Component } from 'react'

// 性别选择
class SexSelect  extends Component {
  state = {  }
  render() {
    return (
      <select onChange={this.props.handleSelect}>
        <option value="0">男</option>
        <option value="1">女</option>
      </select>
    );
  }
}



class SinlgleForm extends Component {
  state = {
    username:'',
    password:'',
    sex:'0'
   }
  /**
  handleChange1(e){
    this.setState({
      username:e.target.value
    })
  }
  handleChange2(e){
    this.setState({
      password:e.target.value
    })
  }**/
  // e放最后
  handleChange(key,e){
    const newState = {};
    newState[key] = e.target.value;
    this.setState(newState);
  }
  handleSelect(e){
    console.log(1)
    this.setState({
      sex:e.target.value
    })
  }
  render() {
    console.log(this)
    return (
      <form action="">
        <input type="text" onChange={this.handleChange.bind(this,'username')}  placeholder="请输入用户名" />
        <input type="password" onChange={this.handleChange.bind(this,'password')}  placeholder="请输入密码"/>
        <SexSelect handleSelect={this.handleSelect.bind(this)} />
      </form>
    )
  }
}

export default SinlgleForm;
