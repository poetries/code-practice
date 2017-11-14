// 处理数组过滤

import { connect } from 'react-redux';
import Link from '../components/Link';
import { setVisibilityFilter } from '../actions/index';

// 这里的ownProps指的是 FilterLink
const mapStateToProps = (state, ownProps) => ({
  active:ownProps.filter === state.visibilityFilter
})
const mapDispatchToProps = (dispatch, ownProps) => ({
  onClick: () => {
      dispatch(setVisibilityFilter(ownProps.filter))
  }
})

const FilterLink = connect(
  mapStateToProps,
  mapDispatchToProps
)(Link);

export default FilterLink
