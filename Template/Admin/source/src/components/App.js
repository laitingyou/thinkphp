import React, { Component } from 'react';
import '../statics/App.css';
import Nav from './Nav';
import RightNav from './RightNav';
import Login from './Login';
class App extends Component {
    render() {
        return (
            <div>
                <RightNav/>
                <Nav/>
                <div className="main">
                    <div className="main-content">
                        <div className="container-fluid">
                            <Login/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default App;
