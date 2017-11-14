
import React from 'react';
import Count from './count';

const Link = ({ active, children, onClick }) => {
    if (active) {
        return <span>{children}</span>
    }
    return (
        <li 
            onClick={
                e => {
                    e.preventDefault()
                    onClick()
                }
            }
        >
            <a href="#" className='selected'>{children}</a>
        </li>
    )
}

export default Link