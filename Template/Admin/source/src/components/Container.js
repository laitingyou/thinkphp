import React, { Component } from 'react';
import '../statics/App.css';
import Nav from './Nav';
import RightNav from './RightNav';
import Login from './Login';
class Container extends Component {
    constructor(props) {
        super(props);
    }
    state={
            loading:false
    }
    componentWillMount(){
    }


    render() {
        return (
            <div>

              <RightNav/>
                <Nav/>
                <div className="main">
                    <div className="main-content">
                        <div className="container-fluid">
                            {this.props.children}
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Container;
