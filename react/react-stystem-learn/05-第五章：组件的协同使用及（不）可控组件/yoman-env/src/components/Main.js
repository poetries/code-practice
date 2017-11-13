require('normalize.css/normalize.css');
// require('styles/App.css');

import React from 'react';
import SinlgleForm from './form';
import Binding from './Mixin';

let yeomanImage = require('../images/yeoman.png');

class AppComponent extends React.Component {
  render() {
    return (
      <div className="index">
          <img src={yeomanImage} alt="Yeoman Generator" />
          <div className="notice">Hello {this.props.author} - {this.props.age}</div>
          <SinlgleForm />
          <Binding />
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
