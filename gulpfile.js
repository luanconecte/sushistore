var gulp = require('gulp'),
	stylus = require('gulp-stylus'),
	watch = require('gulp-watch');

gulp.task("watch:stylus", function() {
	watch("assets/stylus/**/*.styl", function() {
		gulp.src("./assets/stylus/style.styl")
			.pipe(stylus())
			.pipe(gulp.dest("./assets/css"));
	});
});