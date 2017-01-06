//1、直接给jQuery添加全局函数

/*jQuery.myAlert = function(str){
	alert(str);
};
*/

//2、使用$.extend(obj)


/*jQuery.extend({
	myAlert:function(str){
		alert(str);
	},
	myAlert2:function(){
		alert(1111);
	}
});*/


// 3、使用命名空间

jQuery.lianying = {
	myAlert:function(str){
		alert(str);
	}
}