import React from 'react';
import configureStore from '../store';
import {Router,Route,browserHistory} from 'react-router';
import {App,UserListApp,UserDetailApp} from '../containers';

let store = configureStore();

/*react-router 2.x必须配置browserHistory*/ 
const routes = (
    <Router history={browserHistory}>
        <Route path='/' component={App} />
        <Route path='/users' component={UserListApp} />
        <Route path='/users/:id' component={UserDetailApp} />
    </Router>
)

export default routes;