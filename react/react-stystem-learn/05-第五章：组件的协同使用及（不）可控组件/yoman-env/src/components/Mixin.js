/*
 * @Author: mikey.zhaopeng
 * @Date: 2017-11-13 19:43:36
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2017-11-13 20:10:11
 */

import React, { Component } from 'react';

/**
 * Mixin把公共的代码抽离出来
 */
const BingMixin = {
  handleChange:function(key){
    const This = this;
    console.log(this)
    return function(e) {
      const newState = {};
      newState[key] = e.target.value;
      This.setState(newState);
    }
  }
}
class  Binging extends Component {
  constructor(props){
    super(props);
    this.state = {
      text:'',
      comment:''
    }
    this.handleChange = BingMixin.handleChange
    console.log(this)
  }
  render() {
    return (
      <div>
        <input type="text" onChange={this.handleChange("text")}/>
        <p>{this.state.text}</p>
        <textarea onChange={this.handleChange("comment")}></textarea>
        <p>{this.state.comment}</p>
      </div>
    );
  }
}

export default Binging;
