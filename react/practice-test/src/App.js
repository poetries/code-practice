import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import * as el from "./styled-compontents/elements";
var FontAwesome = require('react-fontawesome');



class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <el.Button primary>Hello world</el.Button>
        <el.Button>Normal Button</el.Button>
        <el.TomatoButton>继承按钮</el.TomatoButton>
        <el.AButton>styled(Button)写法</el.AButton>
        <el.Input/>
        <FontAwesome
          className='super-crazy-colors'
          name='rocket'
          size='2x'
          spin
          style={{ textShadow: '0 1px 0 rgba(0, 0, 0, 0.1);width:200px;height:100px;padding:10px;color:red;' }}
      />
      
      
      </div>
    );
  }
}




export default App;
