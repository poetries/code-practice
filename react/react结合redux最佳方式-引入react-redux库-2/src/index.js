import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import 'antd-mobile/dist/antd-mobile.css'; 
import { Provider } from 'react-redux'
import {createStore,applyMiddleware} from 'redux';
import thunk from 'redux-thunk';
import {createLogger } from 'redux-logger'
import {rootReducers} from './practice-redux';

 const store  = createStore(rootReducers,
    window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__(),//chrome调试开始关于redux
    applyMiddleware(thunk,createLogger()))


ReactDOM.render(<Provider store={store}>
    <App />
</Provider>, document.getElementById('root'));

