import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import {store} from './stores/Store';
import {Provider} from 'react-redux';
import App from './components/App';

import './styles/App.css';

// Render the main component into the dom
ReactDOM.render(
  // 把store传入Provider使得下面的所有子组件都能访问到store的 getState、dispatch、subscribe方法
  <Provider store={store}>
      <App />
  </Provider>, document.getElementById('app'));
