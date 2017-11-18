require('normalize.css/normalize.css');

import React from 'react';
import {Link} from 'react-router';

import '../styles/App.css';

export default  class App extends React.Component {
  render() {
    return (
      <div>
        <ul>
          <li><Link to='/'>首页</Link></li>
          <li><Link to='/aa'>AA</Link></li>
          <li><Link to='/bb'>BB</Link></li>
          <li><Link to='/cc'>CC</Link></li>
        </ul>
        <div>
          {/*这里显示App路由下的子元素*/}
          {this.props.children}
        </div>
      </div>
    );
  }
}

