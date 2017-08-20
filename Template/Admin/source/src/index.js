import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import 'antd/dist/antd.css';
import registerServiceWorker from './registerServiceWorker';
import { Router, Route, IndexRoute, Redirect,Link, hashHistory } from 'react-router';
ReactDOM.render(
    <Router history={hashHistory}>
            <Route path="/" component={App} />
    </Router>
    , document.getElementById('root'));
registerServiceWorker();