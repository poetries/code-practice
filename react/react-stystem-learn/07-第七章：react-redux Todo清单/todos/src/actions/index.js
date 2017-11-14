/**
 * 定义action creator
 */

import * as actionType from '../constant/index';

let nextTodo = 0;

export const addTodo = (text)=>({
  type:actionType.ADD_TODO,
  id:nextTodo++,
  text
})

export const toggleTodo = (id)=>({
  type:actionType.TOGGLE_TODO,
  id
})

export const setVisibilityFilter = (filter)=>{
  return {
    type:actionType.SET_VISIBILITY,
    filter
  }
}
