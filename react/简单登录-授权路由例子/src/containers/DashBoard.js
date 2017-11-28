import React, { Component } from 'react';
import {Link,Route,Redirect} from 'react-router-dom';
import {connect} from 'react-redux'
import {Logout} from '../actions';
import {Button} from 'antd-mobile';
import {get_news_data} from '../actions';
import { Toast } from 'antd-mobile';

import axios from 'axios';

// axios全局拦截器
// 拦截请求
axios.interceptors.request.use(config=>{
    Toast.loading("加载中",0);
    return config;
})
// 拦截响应
axios.interceptors.response.use(config=>{
    setTimeout(()=>{
        Toast.hide();
    },0)
    return config;
})


class DashBoard extends Component {
    render() {
        const redirectToLogin = <Redirect to='/login'></Redirect>
        const app = (
            <div>
                <h1>你好登录成功，欢迎回来!</h1>
               {this.props.auth.isAuth? <Button onClick={this.props.Logout}>注销登录</Button> :null} 
               <ul>
                {
                this.props.news&&this.props.news.map((item,index)=>{
                    return <li key={index}>{item.url}</li>
                })
                }
          </ul>
            </div>
        )
        return this.props.auth.isAuth?app:redirectToLogin
    }
    componentDidMount(){
        this.props.get_news_data('reactjs');
    }
}

const mapStateToProps = (state)=>{
    console.log(state)
    return {
        auth: state.Auth,
        news:state.News_data.payload
    }
}
export default connect(
    mapStateToProps, {
        Logout,
        get_news_data
    }
)(DashBoard)