import React from 'react';

const Todo = ({ onClick, completed, text }) => {
    return (
        <li
            onClick={onClick}
            style={{
                textDecoration: completed ? 'line-through' : 'none',
                color: completed ? 'red' : 'black'
            }}
        >
            <div className='view'>
                <input type="checkbox" className='toggle'/>
                <label>{text}</label>
                <button className='destroy'></button>
            </div>
        </li>
    )
}

export default Todo;