'use strict';

var _NeteaseCloudMusicApi = require('NeteaseCloudMusicApi');

var name = 'Scott';
var greeting = 'hello ' + name;
console.log(greeting);

_NeteaseCloudMusicApi.api.search('年度之歌', function (data) {
    console.log(data);
});