import styled,{css} from 'styled-components';

export const Button = styled.button`
    border-radius: 3px;
    padding: 0.25em 1em;
    margin: 0 1em;
    background: ${props=>props.primary?"palevioletred":"transparent"};
    color: ${props=>props.primary?"white":"palevioletred"};
    border: 2px solid palevioletred;
`;


export const AButton = styled(Button)`
    background:yellow;
`
export const TomatoButton = Button.extend`
    width:200px;
    height:10%;
`

export const Input = styled.input.attrs({
    className:"poetries",
    type:"password",
    placeholder:"请输入...."
})`
color: palevioletred;
font-size: 1em;
border: 2px solid palevioletred;
border-radius: 3px;
`