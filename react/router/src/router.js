import React from 'react';
import { BrowserRouter, Route } from 'react-router-dom'
import App from './components/Main';
import Show from './components/Show';
import TV from './components/TV';
import indexPage from './components/IndexPage';
import Fashion from './components/Fashion';

const Root = ()=>{
    return (
        <Router history={browserHistory} >
            <Route path='/' component={App}>
                <IndexRoute component={indexPage} />
                <Route path='tv' component={TV} >
                    <Route path='show' component={Show} />
                </Route>
                <Route path='fashion' component={Fashion} />
            </Route>
        </Router >
    )
}

export default Root;