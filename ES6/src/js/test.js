
let name = 'Scott';
let greeting = `hello ${name}`;
console.log(greeting);

import {api} from 'NeteaseCloudMusicApi'
api.search('年度之歌',data => {
    console.log(data)
})