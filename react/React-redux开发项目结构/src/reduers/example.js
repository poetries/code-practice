import * as ActionTypes from '../../constants/ActionTypes';

// 必须初始化结构。否则redux init的时候出现undefined
const initialState = {
    users: [],
    usersById:[]
}

const User = (state=initialState,action) =>{
    switch (action.type) {
        case ActionType.SET_USER:
            return  {
                ...state,
                users:action.data.users,
                usersById:action.data.usersById
            }
        default:
            return state;
    }
}
export default User 