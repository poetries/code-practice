import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import Counter from './components/index'
// import Counter from './components/Counter'
import Reducer from './reducers/index'
import { createStore } from 'redux';

let store = createStore(Reducer);
console.log(store.getState())
const render =() => ReactDOM.render(
    /*
        {type:'ADD'}与{type:'DEL'}就是我们需要传递的两个 action

        ()=>store.dispatch({type:'ADD'}) 等同于

        function(){
            return store.dispatch({type:'ADD'}
        }
    */
    <Counter 
        value={store.getState()}
        onAdd={()=>store.dispatch({type:'ADD'})}
        onDel={()=>store.dispatch({type:'DEL'})}
    />, 
    document.getElementById('app')
);
// render自执行一次
render();

// 每次dispatch都会触发更新重新渲染
store.subscribe(render)