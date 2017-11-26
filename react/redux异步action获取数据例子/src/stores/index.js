import {createStore,applyMiddleware,compose} from 'redux';
import {createLogger } from 'redux-logger'
import Thunk from 'redux-thunk';
import promiseMiddleware from 'redux-promise';
import rootReducer from '../reducers/index';


// 返回功能更强大的高阶组件
const composedCreateStore = compose(
    applyMiddleware(Thunk,promiseMiddleware,createLogger()),//异步处理
    // 只支持Chrome插件的方式，不引入其他代码
    window.devToolsExtension && window.devToolsExtension()
)(createStore);

const configureStore = (initialState={}) => composedCreateStore(rootReducer,initialState);

export default configureStore;