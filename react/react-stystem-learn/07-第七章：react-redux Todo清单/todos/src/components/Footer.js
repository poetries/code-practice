import React, { Component } from 'react'
import FilterLink from '../container/FilterLink';

const Footer = () => (
    <div className='footer'>
        <ul className="filters">
            <FilterLink filter="SHOW_ALL">All</FilterLink>
            {'  '}
            <FilterLink filter="SHOW_ACTIVE">Active</FilterLink>
            {'  '}
            <FilterLink filter="SHOW_COMPLETED">Completed</FilterLink>
        </ul>
    </div>
)


export default Footer
