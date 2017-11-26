/**
 * react-router 4.x版本写法
 */

import 'core-js/fn/object/assign';
import React from 'react';
import ReactDOM from 'react-dom';
// 4.xx写法
import {BrowserRouter as Router,Route,Link,NavLink,Redirect,withRouter,Prompt } from 'react-router-dom'

/*
  Link的属性：to:string
    to的值    表示
    /         根目录
    /about    跟目录下面的about页面
    / {matck.url}/rending

    match对象中指的是  url

    to:object
      如果是对象的话，一般是用在 表单元素中

    replace:替换当前的地址，而不是添加新的目录
    
  Route的path属性
    path    表示
    /       根目录
    /about    跟目录下面的about页面
    / {match.url}/:id

    match对象中指的是  path

  上述的两个属性是不可缺少的，否则会报错
*/

/*
  BrowserRouter，HashRouter，MemoryRouter封装好的三个Router组件
  BrowserRouter：一个包含HTML5的历史Api（pushState, replaceState and the popstate event）的Router
  HashRouter：一个可以使用URL哈希值的Router，可能存在兼容性的问题（IE）
  MemoryRouter：可以将URL的历史存放在内存中，一般用于测试
*/

const App = ()=>{
    return (
        <Router>
           <div>
                 <ul>
                    <li><Link to='/'>Home</Link></li>
                    <li><Link to='/about'>About</Link></li>
                    <li><Link to='/topics'>Topics</Link></li>
                </ul>
                <Test />
                <hr/>
                {/*exact    精确匹配 不填就是false*/}
                {/*重定向到首页*/}
                {/* <Route exact  path='/'  render={()=><Redirect to="/about"/>} /> */}
                <Route exact  path='/' component={Home} />
                <Route path='/about' component={About} />
                <Route path='/topics' component={Topics} />
           </div>
        </Router>
    )
}

const  Test   = withRouter(({history,location,match})=>{ 
    console.log(history,match,location)
    return <div>{location.pathname}</div>
})
const NotFind = ()=>(
    <div>
        <h1>NotFind</h1>
    </div>
)
const Home = ()=>(
    <div>
        <h1>Home</h1><Prompt message="您确定您要离开当前页面吗？"/>

    </div>
)
const About = ()=>(
    <div>
        <h1>About</h1>
    </div>
)
const Topics = ({match,location,history})=>{
    console.log(history)
    return (
        <div>
            <h2>Topics</h2>
            <ul>
                <li><Link to={`${match.url}/rendering`}>Rendering with React</Link></li>
                <li><Link to={`${match.url}/Components`}>Components</Link></li>
                <li><Link to={`${match.url}/Props-v-State`}>Props v. State </Link></li>
                <button onClick={()=>history.push('/about')}>跳转到About</button>
                <li>
                    {/*NavLink当它与当前URL匹配时，它的特殊版本将为呈现的元素添加样式属性*/}
                    <NavLink to={`${match.url}/text`} activeStyle={{
                        fontWeight: 'bold',
                        color: 'red'
                    }}>text</NavLink>
                </li>
            </ul>
            
            <Route path={`${match.url}/:topicId`} component={Topic} />
            <Route exact path={match.url} render={() => (
            <h3>Please select a topic.</h3>
            )}/>
        </div>
    )
}
const Topic = ({match})=>(
    <div>
        <h3>{match.params.topicId}</h3>
    </div>
)
ReactDOM.render(
<App />, document.getElementById('app'));
