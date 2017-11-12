import React, { Component } from 'react';

export default class Header extends Component {
    constructor(props){
        super(props);
        this.state = {
            preLogin:"请登录",
            flag:false
        }
        this.handleClick = this.handleClick.bind(this);
    }
    handleClick(){
        this.setState({
            loadingLogin:"正在登录，请稍后....",
            flag:!this.state.flag
        })
    }
    /*生命周期钩子*/
    componentWillMount(){
        /**
         *  与其他 JavaScript 框架集成，如初始化 jQuery 插件；
            使用 setTimeout/setInterval 设置定时器；
            通过 Ajax/Fetch 获取数据；
            绑定 DOM 事件
         */
        alert("组件将要挂载");
        fetch("http://localhost:3000/").then((data)=>{
            console.log(data);
        })
    }
    componentDidMount(){
        alert("组件挂载完毕");
    }
    shouldComponentUpdate(){
        alert("组件是否要渲染");
        return true;
    }
    componentWillUpdate(){
        alert("组件将要更新");
    }
    componentDidUpdate(){
        alert("组件更新完毕");
    }
    componentWillReceiveProps(){
        alert("组件props改变了");
    }
    render(){
        return (
            <div className="header">
                <h1 onClick={this.handleClick}>{this.props.title}</h1>
                <p>{this.props.text}</p>
                <h1>{this.state.flag?this.state.loadingLogin:this.state.preLogin}</h1>
            </div>
        )
    }
}