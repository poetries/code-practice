import React, { Component } from 'react'
import {connect} from 'react-redux'
import {Login} from '../actions';
import {Redirect} from 'react-router-dom';
import {Button} from 'antd-mobile';

class Auth extends Component {
    render() {
        return (
            <div>
                {this.props.auth.isAuth?<Redirect to='/dashboard' />:null}
               <h1>你没有权限，需要登录!!</h1>
               <Button onClick={this.props.Login}>登录</Button>   
            </div>
        )
    }
}
const mapStateToProps = (state)=>{
    console.log(state)
    return {
        auth: state.Auth
    }
}
export default connect(
    mapStateToProps, {
        Login
    }
)(Auth)