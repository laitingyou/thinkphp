/**
 * Created by root on 17-8-20.
 */
import React from 'react';
import logo from '../statics/img/logo-dark.png';

let Login= React.createClass ({
    getInitialState: function () {
        return {
            input: ''
        };
    },
    onChange(e){
        this.setState({input:e.target.value});
        console.log(e.target.value)
    },
    render() {
        return (
                <div className="auth-box">
                    <div className="left">
                        <div className="content">
                            <div className="header">
                                <div className="logo text-center">
                                    <img src={logo} alt="Klorofil Logo"/>
                                </div>
                                <p className="lead">Login to your account</p>
                            </div>
                            <form className="form-auth-small" action="">
                                <div className="form-group">
                                    <label for="signin-email" className="control-label sr-only">Email</label>
                                    <input type="email" className="form-control" id="signin-email" onChange={this.onChange}  placeholder="Email"/>
                                </div>
                                <div className="form-group">
                                    <label for="signin-password" className="control-label sr-only">Password</label>
                                    <input type="password" value={this.state.input} className="form-control" id="signin-password"  placeholder="Password"/>
                                </div>
                                <div className="form-group clearfix">
                                    <label className="fancy-checkbox element-left">
                                        <input type="checkbox"/>
                                            <span>Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" className="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div className="bottom">
                                    <span className="helper-text"><i className="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div className="right">
                        <div className="overlay"></div>
                        <div className="content text">
                            <h1 className="heading">Free Bootstrap dashboard template</h1>
                            <p>by The Develovers</p>
                        </div>
                    </div>
                    <div className="clearfix"></div>
                </div>
        )
    }
})

export default Login;