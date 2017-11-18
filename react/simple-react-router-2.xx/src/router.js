import React from 'react';
import {Router,Route,browserHistory} from 'react-router'; //router 2.x写法

// import {
//   BrowserRouter,
//   Route,
//   Link
// } from 'react-router-dom' // 4.x写法
import AA from './components/AA';
import BB from './components/BB';
import CC from './components/CC';
import App from './components/App';

const routes = ()=>(
    <Router history={browserHistory}>
        <Route path='/' component={App}>
            <Route path='/aa' component={AA}>AA</Route>
            <Route path='/bb' component={BB}>BB</Route>
            <Route path='/cc' component={CC}>CC</Route>
        </Route>
    </Router>
)

export default routes;