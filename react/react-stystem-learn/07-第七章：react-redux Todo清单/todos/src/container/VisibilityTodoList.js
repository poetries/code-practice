/**
 * 处理可见于不可见组件的逻辑
 */
import {connect} from 'react-redux';
import TodoList from '../components/TodoList';
import {toggleTodo} from '../actions/index';
import * as actionType from '../constant/index';
console.log(toggleTodo)

// todos是返回的数组，filter是过滤的选项如SHOW_ALL SHOW_ACTIVE.
const getVisibilityTodos = (todos,filter)=>{
  switch(filter) {
    case actionType.SHOW_ALL:
      return todos;
    case actionType.SHOW_ACTIVE:
      return todos.filter(t => !t.completed);
    case actionType.SHOW_COMPLETED:
      return todos.filter(t => t.completed);
    default:
      throw new Error('未知的'+filter);
  }
}

// 把状态转化为展示组件的属性转递过去
/**
 *
 * @param {*} state 也就是
 * export default CombineReducers({
  Todos,
  SetVisibility
  *});
 * @param {*} ownProps 返回的容器组件本身的参数 如<Filter name="poetries">此时的ownProps就是name了
 */

const mapStateToProps = (state) => {
  return {
    todos: getVisibilityTodos(state.todos,state.visibilityFilter)
  }
}

const mapDispatchToProps = () => {
    onTodoClick: toggleTodo
}

const VisibileTodoList = connect(
  mapStateToProps,
  mapDispatchToProps
)(TodoList)

export default VisibileTodoList;
