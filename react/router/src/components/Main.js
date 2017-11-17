require('normalize.css/normalize.css');
require('styles/App.css');

import React from 'react';
import {Link} from 'react-router';

let yeomanImage = require('../images/yeoman.png');

class AppComponent extends React.Component {
  render() {
    return (
      <div className="index">
        <img src={yeomanImage} alt="Yeoman Generator" />
        <div className="notice">Please edit <code>src/components/Main.js</code> to get started!</div>
        <div>
          <Link to='/'>首页</Link>
          <Link to='/tv'>电视节目</Link>
          <Link to='/fashion'>时尚</Link>
        </div>
        {this.props.children}
      </div>
    );
  }
}

AppComponent.defaultProps = {
};

export default AppComponent;
