
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Provider,connect } from 'react-redux'
import {createLogger } from 'redux-logger'
import thunk from 'redux-thunk';
import { BrowserRouter, Switch, Route, Redirect,NavLink } from 'react-router-dom'
import './index.css';
import { createStore, combineReducers,applyMiddleware,compose } from 'redux'

// 连接redux判断用户登录信息
const initialState = {
    logged: false
  }
  
const loggedUserReducer = (state = initialState, action) => {
    
    if (action.type === 'LOGGIN_SUCCESS') {
      return Object.assign({}, state, {
        logged: action.logged
      })
    }
    if (action.type === 'LOGOUT_SUCCESS') {
        return Object.assign({}, state, {
          logged: action.logged
        })
    }
    if (action.type === 'GET_LOGGED_USER') {
        return Object.assign({}, state, {
          pending: false
        })
    }
    
    return state
 }

const reducers = combineReducers({
    loggedUserState: loggedUserReducer
})

const composedCreateStore = compose(
    applyMiddleware(thunk,createLogger()),
    // 只支持Chrome插件的方式，不引入其他代码
    window.devToolsExtension && window.devToolsExtension()
)(createStore);

const configureStore = (initialState={}) => composedCreateStore(reducers,initialState);

const store = configureStore()


// 请求方法
const login = () => {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        store.dispatch({
          type: 'LOGGIN_SUCCESS',
          logged: true
        })
        resolve()
      }, 500)
    })
  }
  
const logout = () => {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        store.dispatch({
          type: 'LOGOUT_SUCCESS',
          logged: false
        })
        resolve()
      }, 500)
    })
  }
 const getLoggedUser = () => {
    setTimeout(() => {
      store.dispatch({
        type: 'GET_LOGGED_USER'
      })
    }, 500)
  }

// ============== 配置授权路由，连接redux判断用户信息
class AuthorizedRoute extends Component {
    render() {
        return (
            <div>
                {/*认真通过才会加载首页基本布局页面*/}
                {/*通过true、false判断登录成功*/}
               {true?<PrimaryLayout />:<Redirect to='/login' />}
            </div>
        );
    }
    componentWillMount() {
    //    getLoggedUser()
    }
}
// const stateToProps = (state) => {
//     console.log(state)
//     return {
        
//     }
// }
// connect(stateToProps)(AuthorizedRoute)


// 登录页
const LoginPage = ({history}) => (
    <div>
      <h1>Login Page</h1>
      <button onClick={()=>{login().then(()=>{
          history.push('/app')
      })}}>登录</button>
    </div>
)

// 登录后看到的基本布局页面
const PrimaryLayout = () => (
    <div>
        <header className="primary-header">
            <h1>Welcome to our app!</h1>
            <nav>
            <NavLink to="/app" exact activeClassName="active">Home</NavLink>
            <NavLink to="/app/users" activeClassName="active">Users</NavLink>
            <NavLink to="/app/products" activeClassName="active">Products</NavLink>
            </nav>
        </header>

        <button onClick={()=>{login().then(()=>{
          window.location.href = '/login'
      })}}>退出</button>
    </div>
)

ReactDOM.render(
    <Provider store={store}>
        <BrowserRouter>
            <div>
                <Switch>
                    <Route path="/login" component={LoginPage} />
                    <AuthorizedRoute path='/app' />
                    
                    {/*以上匹配不到的时候，下面才生效*/}
                    <Redirect to="/login" />
                </Switch>
            </div>
        </BrowserRouter>
    </Provider>
, document.getElementById('root'));

