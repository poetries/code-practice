/**
 * 定义处理action的reducers
 */
import * as actionType from '../constant/index';

//传入当前的状态空数、action
export const todos = (state = [],action)=>{
  switch(action.type){ // 匹配用户触发的actionType
    case actionType.ADD_TODO:
    // 合并上一次的状态和当前的状态 返回todos数组
      return [
        ...state,//把数组展开合并
        {
          id:action.id,
          text:action.text,
          completed:false//用户控制TODO是否处于点击完成的状态 默认false 没点击
        }
      ]
      // TODO列表来回切换 遍历add_todo返回的数组 通过completed来判断
    case actionType.TOGGLE_TODO:
      return state.map(todo=>(todo.id===action.id)?{...todo,completed:!todo.completed}:todo)
    default:
      return state;//匹配不到返回state
  }
}
