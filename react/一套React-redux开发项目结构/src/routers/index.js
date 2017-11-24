import React from 'react';
import {Route,BrowserRouter as Router, Switch} from 'react-router-dom'; //v4
import App from '../App';

const routes = (
    <Router>
        <Switch>
           <Route exact path='/' component={App} />
        </Switch>
    </Router>
)

export default routes;
