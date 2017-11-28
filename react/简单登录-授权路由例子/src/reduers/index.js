import {combineReducers} from 'redux';
import {Auth,News_data} from './example';

const reducers = {
  Auth,
  News_data
}

export default combineReducers({
    ...reducers
})
