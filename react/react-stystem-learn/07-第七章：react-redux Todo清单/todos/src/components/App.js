import React from 'react';
import AddTodo from '../container/addTodos';
import VisibileTodoList from '../container/VisibilityTodoList';
import Footer from './Footer';

const App = () => (
    <div>
        <AddTodo />
        <VisibileTodoList />
        <Footer />
    </div>
)

export default App;
