import * as ActionTypes from '../actions/fetch';

// 必须初始化结构。否则redux init的时候出现undefined
// state 可以是基本类型、数组、对象，取决于需求
const async_data = (state={isFetching:false},action) =>{
    switch (action.type) {
        case ActionTypes.RECEIVE_SUCCESS:
            return  {
              ...state,
              data:action.payload,
              isFetching:false
            };
        case ActionTypes.POST_REQUEST:
            return {
                ...state,
                isFetching:true
            }    
        default:
            return state;
    }
}
export default async_data;