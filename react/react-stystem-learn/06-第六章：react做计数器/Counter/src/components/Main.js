require('normalize.css/normalize.css');
require('styles/App.css');

import React from 'react';
import ReactDOM from 'react-dom';

let yeomanImage = require('../images/yeoman.png');

class AppComponent extends React.Component {
  // 第一种获取节点的方式
  handleClick(){
    var userInput = ReactDOM.findDOMNode(this.refs.userInput)
    alert(userInput.value)
  }
  // 第二种获取节点的方式
  handleClick1(){
    console.log(this)
    alert(this.input.value)
  }
  render() {
    return (
      <div className="index">
        <img src={yeomanImage} alt="Yeoman Generator" />
        <input type="text" ref="userInput"/>
        <button onClick={this.handleClick.bind(this)}>按钮1</button>
        <div></div>
        <input type="text" ref={text=>this.input = text}/>
        <button onClick={this.handleClick1.bind(this)}>按钮2</button>
        <div className="notice">Please edit <code>src/components/Main.js</code> to get started!</div>
      </div>
    );
  }
}

AppComponent.defaultProps = {
};

export default AppComponent;
