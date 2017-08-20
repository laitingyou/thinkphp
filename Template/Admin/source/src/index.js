import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import Container from './components/Container';
import About from './About';
import Welcome from './components/Welcome';
import Login from './components/Login';
import Main from './components/Main';
import 'antd/dist/antd.css';
import registerServiceWorker from './registerServiceWorker';
import { Router, Route, IndexRoute, Redirect,Link, hashHistory } from 'react-router';
window.Link = Link;
window.react = React;
registerServiceWorker();
ReactDOM.render(
    <Router history={hashHistory}>
        <Route path="/" component={Container}>
            <IndexRoute component={Login}/>
            <Route path="main" component={Main}/>
        </Route>
    </Router>
    , document.getElementById('root'));
