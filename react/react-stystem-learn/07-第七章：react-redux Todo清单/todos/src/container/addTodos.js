
/**
 * Addtodo的处逻辑
 */
import React, { Component } from 'react';
import {addTodo} from '../actions/index';
import {connect} from 'react-redux';

// 这里的dispatch是通过PRovider从store传递过来的
let AddTodo = ({dispatch}) => {
  let node;
  return (
    <div>
      <form onSubmit={e=>e.preventDefault()}>
        <input type="text" ref={text=>{node = text}}/>
        <button
          onClick={()=>{
            if(!node.value.trim())return;
            dispatch(addTodo(node.value))
            node.value = ''
          }}
        >添加</button>
      </form>
    </div>
  )
}

/**
 * connect的作用就是连接展示组件与容器组件
 */

AddTodo = connect()(AddTodo)

export default AddTodo
