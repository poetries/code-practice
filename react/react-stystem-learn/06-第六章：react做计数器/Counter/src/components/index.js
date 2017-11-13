/*
    不使用redux：
        1、用户操作简单
        2、用户之间没有协作
        3、不需要与服务器的大量交互
    使用redux：
        上面三条取反
        组件需要共享
        一个组件需要改变另一个组建的状态
*/
/*
    redux的核心
        store：看成是一个保存数据的地方，一个容器。（react中的一个数据库）
            整个应用  只能有  有一个store

            提供的方法：
                提供 getState() 方法获取 state；
                提供 dispatch(action) 方法更新 state；唯一一个更新state的方法

                通过 subscribe(listener) 注册监听器; 监听action、state的变化，一旦state
                发生变化，就是行这个 listener。一般 react 的项目就是组件的render
                或者是setState方法。返回一个函数A，调用A接触监听


                通过 subscribe(listener) 返回的函数注销监听器。
        action：
            通过 state 的状态来改变显示的东西（View）。但是，用户接触不到state，
            接触的是View。state变化导致View变化。这个Action就是View发出的通知，
            表示state应该要变化了
            action是一个对象，{} ，里面至少有一个属性  type（必须拥有），表示的就是
            action的名字，其他的属性可以自己设置
                {
                    type:'ADD',
                    text,   ==> text:text
                    id    ==> id:id
                }
        reducer：
            render单独放在一个文件夹里面（reducers）
            用来改变状态的一个函数
            reducer 就是一个纯函数，接收旧的 state 和 action，返回新的 state。
            store收到action以后，给出一个新的state，View发生改变。
            这种state的计算过程就是reducer
*/
import React, { Component } from 'react';

class Counter extends Component {
    change=()=>{
        if(this.props.value%2 !== 0 ){
            this.props.onAdd()
        }
    }
    delay=()=>{
        setTimeout(this.props.onAdd,1000)
    }
    render(){
        console.log(this.props)
        // 通过 下面的这种方式拿到 组件传递的属性
        const { value,onAdd,onDel } = this.props;
        console.log(onAdd,onDel)
        return (
            <div>
                点击了{value}次
                <button onClick={onAdd}>+</button>
                <button onClick={onDel}>-</button>
                <button onClick={this.change}>基变偶</button>
                <button onClick={this.delay}>延时加一</button>
            </div>
        )
    }
}

export default Counter;