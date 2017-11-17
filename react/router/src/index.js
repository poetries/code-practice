import 'core-js/fn/object/assign';
import React from 'react';
import {Route, Router, IndexRoute, hashHistory,browserHistory} from 'react-router';
import ReactDOM from 'react-dom';
import App from './components/Main';
import Show from './components/Show';
import TV from './components/TV';
import indexPage from './components/IndexPage';
import Fashion from './components/Fashion';
import {Link} from 'react-router';


const TVHome = ()=>(
    <div>TV首页</div>
)


// Render the main component into the dom
ReactDOM.render(
    <Router history={browserHistory} >
        <Route path='/' component={App}>
            <IndexRoute component={indexPage} />
            <Route path='tv' component={TV} >
                <IndexRoute component={TVHome} />
                <Route path='show/:id' component={Show} />
            </Route>
            <Route path='fashion' component={Fashion} />
        </Route>
    </Router >
    , document.getElementById('app'));
