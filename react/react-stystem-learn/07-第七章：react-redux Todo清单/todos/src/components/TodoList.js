import React from 'react';
import Todo from './todo';
import Count from './count';

const TodoList = ({ todos, count, onTodoClick }) => {
    // console.log(todos)
    // console.log(onTodoClick)
    return (
        <div style={{position:'relative'}}>
          <Count count={count} />
            <ul className='todo-list'>
                {
                    todos.map(todo =>
                        <Todo
                            key={todo.id}
                            {...todo}
                            onClick={() => onTodoClick(todo.id)}
                        />
                    )
                }
            </ul>
        </div>
    )
}

export default TodoList;
