"use strict";

Object.defineProperty(exports, "__esModule", {
	value: true
});
var name = "poetries";
var age = 22;
var like = function like(name, age) {
	return name + "今年" + age;
};
console.log(like("小明", 23));

exports.like = like;
exports.name = name;
exports.age = age;