import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import App from './App';
import routes from './routers';
import configureStore from './store/configureStore';

const store = configureStore();

// Render the main component into the dom
ReactDOM.render(<Provider store={store}>
  {routes}
</Provider>, document.getElementById('app'));
