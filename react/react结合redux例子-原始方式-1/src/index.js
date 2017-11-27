import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import 'antd-mobile/dist/antd-mobile.css'; 
import {
    store,
    actionCreator_count,
    actionCreator_fetchdata_arr,
    async_fetch_data,
    async_fetch_promise_data,
    actionCreator_fetchdata_obj,
    actionCreator_bool
} from './practice-redux';


const render = ()=>{
    ReactDOM.render(<App 
        store={store}
        actionCreator_count={actionCreator_count}
        actionCreator_fetchdata_arr={actionCreator_fetchdata_arr}
        async_fetch_data={async_fetch_data}
        async_fetch_promise_data={async_fetch_promise_data}
        actionCreator_fetchdata_obj={actionCreator_fetchdata_obj}
        actionCreator_bool={actionCreator_bool}
     />, document.getElementById('root'));

}
// 重新渲染
render()
store.subscribe(render)