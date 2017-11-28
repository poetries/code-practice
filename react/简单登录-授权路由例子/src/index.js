import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import Root from './containers/Root'
import configureStore from './store/configureStore';
import 'antd-mobile/dist/antd-mobile.css';

const store = configureStore();


ReactDOM.render(<Root store={store} />, document.getElementById('root'));
