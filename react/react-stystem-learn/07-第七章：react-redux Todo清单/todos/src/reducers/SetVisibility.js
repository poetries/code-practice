/**
 * 处理TODO可见与不可见的reducer
 */
import * as actionType from '../constant/index';

// 初始状态是自己设置的 后面的状态会转化
// 接收当前状态(设置默认的过滤SHOW_ALL，如设置某些选项卡的active一样)，和action返回新的state
export const visibilityFilter = (state='SHOW_ALL',action)=>{
  switch(action.type) {
    case actionType.SET_VISIBILITY:
      return action.filter;
    default:
      return state;
  }
}
