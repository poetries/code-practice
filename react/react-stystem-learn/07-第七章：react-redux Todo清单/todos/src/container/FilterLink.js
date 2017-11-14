// 处理数组过滤

import { connect } from 'react-redux';
import Link from '../components/Link';
import { setVisibilityFilter } from '../actions/index';

// 这里的ownProps指的是 FilterLink
const mapStateToProps = (state, ownProps) => {
  return {
    active:ownProps.filter === state.visibilityFilter
  }
}

/**
 如果mapDispatchToProps是一个函数，会得到dispatch和ownProps（容器组件的props对象）两个参数。
 */
const mapDispatchToProps = (dispatch, ownProps) => ({
  onClick: () => {
      dispatch(setVisibilityFilter(ownProps.filter))
  }
})

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(Link);

