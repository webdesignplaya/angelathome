'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var sourceMap = require('gulp-sourcemaps');
var minified = require('gulp-minify-css')
var rename = require("gulp-rename");
var filepath = require('./gulp/filepaths');


gulp.task('sass',function(){
	console.log(filepath.src.styles);
	console.log(filepath.dest.styles);
	sass(filepath.src.styles,{sourcemap:true})
	.pipe(sourceMap.init())
	.on('error',sass.logError)
	.pipe(sourceMap.write())
	.pipe(minified())
	.pipe(rename('main.min.css'))
	.pipe(sourceMap.write())
	.pipe(gulp.dest(filepath.dest.styles))
})