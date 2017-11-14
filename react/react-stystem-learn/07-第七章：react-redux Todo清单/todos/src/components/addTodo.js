import React from 'react';
import {Title} from './Head';

export default class AddTask extends React.Component {
    render(){
        const {addTodo} = this.props
        let node;
        return (
          <div>
            <Title />
            <section className='main'>
                <input type="checkbox" className='toggle-all'/>
                <form onSubmit={e=>e.preventDefault()}>
                    <input type="text" ref={text=>{node = text}} className='new-todo'/>
                    <button
                        onClick={()=>{
                        if(!node.value.trim())return
                        addTodo(node.value)
                        node.value = ''
                        }}
                    style={{display:'none'}}></button>
                </form>
            </section>
          </div>
        )
    }
}

