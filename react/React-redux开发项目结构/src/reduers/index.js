import {combineReducers} from 'redux';
import example from './example';

const reducers = {
    example
}

export default combineReducers({
    ...reducers
})