import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import App from './components/App';
import configureStore from './stores';
import {Provider} from 'react-redux';

// Render the main component into the dom
const store = configureStore();

ReactDOM.render(<Provider store={store}>
 <App />
</Provider>, document.getElementById('app'));