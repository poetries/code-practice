import {createStore,applyMiddleware,compose} from 'redux';
import {createLogger } from 'redux-logger'
import { routerMiddleware } from 'react-router-redux';
import {BrowserRouter} from 'react-router-dom';
import thunk from 'redux-thunk';
import reducers from '../reduers/';

const middleware = routerMiddleware(BrowserRouter)

// 返回功能更强大的高阶组件
const composedCreateStore = compose(
    applyMiddleware(thunk,middleware,createLogger()),//异步处理
    // 只支持Chrome插件的方式，不引入其他代码
    window.devToolsExtension && window.devToolsExtension()
)(createStore);

const configureStore = (initialState={}) => composedCreateStore(reducers,initialState);

export default configureStore;
