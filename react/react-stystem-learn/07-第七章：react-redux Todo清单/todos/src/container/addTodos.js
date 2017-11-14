/**
 * Addtodo的处逻辑
 */
import React, { Component } from 'react';
import {addTodo} from '../actions/index';
import AddTask from '../components/addTodo';
import {connect} from 'react-redux';

const mapStateToProps = (state, ownProps) => ({
  
})

const mapDispatchToProps = {
  addTodo:addTodo
}

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(AddTask);

