var gulp = require("gulp");
var babel = require("gulp-babel");

gulp.task("default",()=>{
	
	return gulp.src("scr/*.js")
			.pipe(babel())
			.pipe(gulp.dest("lib"));
});