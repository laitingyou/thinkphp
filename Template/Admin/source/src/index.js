import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './components/App';
import About from './About';
import Welcome from './components/Welcome';
import Login from './components/Login';
import 'antd/dist/antd.css';
import registerServiceWorker from './registerServiceWorker';
import { Router, Route, IndexRoute, Redirect,Link, hashHistory } from 'react-router';
window.Link = Link;
window.react = React;
ReactDOM.render(
    <Router history={hashHistory}>
        <Route path="/" component={App}>
            <IndexRoute component={Welcome}/>
            <Route path="login" component={Login}/>
            <Route path="about" component={About}/>
        </Route>
    </Router>
    , document.getElementById('root'));
registerServiceWorker();