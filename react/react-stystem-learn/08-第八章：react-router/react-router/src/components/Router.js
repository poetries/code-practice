import React from 'react';
import { Router,Route,Link } from 'react-router-dom';
import { createBrowserHistory } from 'history/createBrowserHistory'

const history = createBrowserHistory();
const Example = () => {
    return (
        <Router history={history}>
            <div>
                <p><Link to='/'>主页</Link></p>

                <Route path='/' />
            </div>
        </Router>
    )
}

export default Example;