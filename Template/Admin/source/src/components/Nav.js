import React from 'react';

let Nav = React.createClass({
    render() {
        return (
            <div id="sidebar-nav" className="sidebar">
                <div className="sidebar-scroll">
                    <nav>
                        <ul className="nav">
                            <li><a href="#/about" className="active"><i className="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        )
    }
});
export default Nav;