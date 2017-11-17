import React from 'react'

export default class TV extends React.Component {
    render (){
        return (
            <div>
                <h2>电视节目列表节目</h2>
                {this.props.children}
            </div>
        )
    }
}