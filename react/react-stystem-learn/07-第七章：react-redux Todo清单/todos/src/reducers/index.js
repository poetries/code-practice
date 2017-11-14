/**
 * 合并reducers
 */

import { combineReducers } from 'redux'
import {todos} from './addTodo';
import {visibilityFilter} from './SetVisibility';

export default combineReducers({
  todos,
  visibilityFilter
});
