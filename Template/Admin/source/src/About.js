import React, { Component } from 'react';
import './statics/App.css';
import Button from 'antd/lib/button';
class About extends Component {
    render() {
        return (
            <div>
                <Button>324234dfdfgsdfsdfsdfsdfdsfd</Button>
                {this.props.children}
            </div>
        );
    }
}

export default About;
