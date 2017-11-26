
import React from 'react';
import { connect } from 'react-redux';
import {async_fetch_data} from '../actions/fetch';

class App extends React.Component {
  render() {
    
    // console.log(this.props.async_fetch_data('reactjs'))
    return (
        <div>
          <ul>
            {
              this.props.data?this.props.data.map((item,index)=>{
                return <li key={index}>{item.url}</li>
              }):'加载中....'
            }
          </ul>
        </div>
    )
  }
  componentDidMount(){
    this.props.async_fetch_data('reactjs');
  }
}

const mapStateToProps = (state, ownProps) => {
  return {
    data:state.data
  }
}

export default connect(
  mapStateToProps,
  {
    async_fetch_data
  }
)(App)
