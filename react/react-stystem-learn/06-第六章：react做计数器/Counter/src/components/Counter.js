import React, { Component } from 'react';

class Counter extends Component {
    state = {
        count:0
    }
    hanldeClick(key){
        if (key === 'ADD') {
            this.setState({
                count:this.state.count+1
            })
        } else {
            this.setState({
                count:this.state.count-1
            })
        }
    }
    change(){
        if (this.state.count%2!==0) {
            this.hanldeClick('ADD')
        }
    }
    delay(){
        setTimeout(()=>{
            this.hanldeClick('ADD')
        },1000)
    }
    render(){
        return (
            <div>
                点击了{this.state.count}次
                <button onClick={this.hanldeClick.bind(this,'ADD')}>+</button>
                <button onClick={this.hanldeClick.bind(this)}>-</button>
                <button onClick={this.change.bind(this)}>奇数变偶数</button>
                <button onClick={this.delay.bind(this)}>延时加一</button>
            </div>
        )
    }
}

export default Counter;