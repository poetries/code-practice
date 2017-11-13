require('normalize.css/normalize.css');
// require('styles/App.css');

import React from 'react';
import ReactDOM from "react-dom";
import SinlgleForm from './form';
import Binding from './Mixin';
import Uncontrol from './Control';

let yeomanImage = require('../images/yeoman.png');

class AppComponent extends React.Component {
  // 第一种获取节点的方式
  handleClick1(){
    const userInput = ReactDOM.findDOMNode(this.refs.userInput);
    console.log(userInput);
  }
  handleClick2(){
    console.log(this)
  }
  render() {
    return (
      <div className="index">
          <img src={yeomanImage} alt="Yeoman Generator" />
          <div className="notice">Hello {this.props.author} - {this.props.age}</div>
          <SinlgleForm />
          <Binding />
          <Uncontrol />
          <div>
            <button onClick={this.handleClick1.bind(this)}>按钮1</button>
            <input type="text" ref="userInput"/>
            <button onClick={this.handleClick2.bind(this)}>按钮2</button>
            <input type="text" ref={text=>this.input=text} />
          </div>
      </div>

    );
  }
}
/**
 * ES5写法
 * var AppComponent = React.createClass({
 *   getDefaultProps:function(){return {}}
 * })
 */
AppComponent.defaultProps = {
    author:'poeries',
    age:22
};

export default AppComponent;
