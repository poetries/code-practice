/**
 * react-router 2.x版本写法
 */

import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
import {Router,Route,Link,browserHistory,IndexRoute} from 'react-router';

class App extends React.Component {
    render() {
      return (
        <div>
          
          <ul style={{clear:'both'}}>
            <li><Link to='/'>首页</Link></li>
            <li><Link to='/aa'>AA</Link></li>
            <li><Link to='/bb'>BB</Link></li>
            <li><Link to='/cc'>CC</Link></li>
          </ul>
          <div>
            {/*这里显示App路由下的子元素*/}
            {this.props.children}
          </div>
        </div>
      );
    }
  }

class AA extends React.Component {
    render() {
        return (
            <div>
                <h2>这是AA页面</h2>
                <ul style={{clear:'both'}}>
                    <li><Link to='/aa/a1'>A1</Link></li>
                </ul>
                <div>
                    {this.props.children}
                </div>
           </div>
        )
    }
}

const A1 = ()=>(
    <div>
        这是A1页面
    </div>
)
const AAIndex = ()=>(
    <div>
        这是AA首页
    </div>
)
const BB = ()=>(
    <div>
        这是BB页面
    </div>
)
const CC = ()=>(
    <div>
        这是CC页面
    </div>
)
const IndexPage = ()=>(
    <div>
       <h1>这里是首页</h1>
    </div>
)

ReactDOM.render(
<Router history={browserHistory}>
    <Route path='/' component={App}>
        <IndexRoute component={IndexPage} />
        <Route path='aa' component={AA}>
            <IndexRoute component={AAIndex} />
            <Route path='a1' component={A1} />
        </Route>
        <Route path='bb' component={BB}>BB</Route>
        <Route path='cc' component={CC}>CC</Route>
    </Route>
</Router>, document.getElementById('app'));
