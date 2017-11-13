import React from 'react';
import { 
  BrowserRouter as Router,
  Route,
  Link,
  NavLink
} from 'react-router-dom';
import { createBrowserHistory } from 'history/createBrowserHistory'

console.log(createBrowserHistory)

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

const App = () => {
  return (
    <Router>
      <div>
        <ul>
          <li>
            <Link to="/">Home</Link>
          </li>
          <li>
            <Link to="/about">About</Link>
          </li>
          <li>
            <Link to="/topics">Topics</Link>
          </li>
        </ul>
        <hr />
        {/*
          exact：匹配地址（path）与url地址（Link组件的to）完全相同。没有尾随字符
          strict:匹配地址（path）与url地址（Link组件的to）完全相同。可以有尾随字符
          按照 path 的值而不是按照 to 的值进行匹配
        */}
        <Route exact path="/" component={Home} />
        <Route strict path="/about/" component={About} />
        <Route path="/topics" component={Topics} />
      </div>
    </Router>
  )
}

const Home = () => {
  return (
    <div>
      <h2>Home</h2>
    </div>
  )
}

const About = () => {
  return (
    <div>
      <h2>About</h2>
    </div>
  )
}

const Topics = ({ match }) => {
  return (
    <div>
      <h2>Topics</h2>
      <ul>
        <li>
          <Link to={`${match.url}/rending`}>rending</Link>
        </li>
        {/*
          使用 Link 组件是没有办法设置样式的
          但是使用 NavLink 是可以设置样式的，可以使用calassName，也可以使用行内样式
        */}
        <li>
          <Link to={`${match.url}/components`} activeStyle={{
            color:'red',
            fontWeight:'bold'
          }}>components</Link>
        </li>
        <li>
          <NavLink to={`${match.url}/text`} activeStyle={{
            color:'red',
            fontWeight:'bold'
          }}>text</NavLink>
        </li>
      </ul>
      <Route path={`${match.url}/:topicId`} component={Topic} />
      <Route exact path={match.url} render={() => (<h3>请选择一个Topic</h3>)} />
    </div>
  )
}

const Topic = ({ match, location, history }) => {
  // console.log(match)
  // console.log(location)
  // console.log(history)
  return (
    <div>
      <h3>{match.params.topicId}</h3>
    </div>
  )
}

export default App;