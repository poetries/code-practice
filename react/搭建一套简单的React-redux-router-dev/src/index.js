import React from 'react';
import {render} from 'react-dom';
import App from './containers';//./containers/index'不用写index 会匹配到
import {Provider} from 'react-redux';
import routes from './routers';
import configureStore from './store';

let store = configureStore();

render (
    <Provider store={store}>
        {/* <App />不用这样写，组件应该交给路由托管，这样路由才会发生作用，组件切换都是路由负责 */}
        {routes}
    </Provider>,
    document.getElementById('app')
)