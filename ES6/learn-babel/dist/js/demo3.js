"use strict";

Object.defineProperty(exports, "__esModule", {
	value: true
});
var name = exports.name = "poetries";
var age = exports.age = 22;
var like = exports.like = function like(name, age) {
	return '${name}今年${age}';
};
console.log(like());