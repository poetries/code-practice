import React, { Component } from 'react';
import {Link,Route,Redirect} from 'react-router-dom';
import {connect} from 'react-redux'
import {Logout} from '../actions';
import {Button} from 'antd-mobile';

class DashBoard extends Component {
    render() {
        console.log(this.props)
        const redirectToLogin = <Redirect to='/login'></Redirect>
        const app = (
            <div>
                <h1>你好登录成功，欢迎回来!</h1>
               {this.props.auth.isAuth? <Button onClick={this.props.Logout}>注销登录</Button> :null} 
            </div>
        )
        return this.props.auth.isAuth?app:redirectToLogin
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
        Logout
    }
)(DashBoard)