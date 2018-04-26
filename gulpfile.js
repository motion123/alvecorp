/**
 * Created by tomino on 18/04/19.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var jade = require('gulp-jade');
var browserSync =require('browser-sync');
var rename = require('gulp-rename');

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./"       //対象ディレクトリ
            ,index  : "index.html"      //インデックスファイル
        }
    });
});


gulp.task('convertToCss', function() {
    gulp.src('./src/scss/style.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('jadeindex', () => {
    return gulp.src('./src/jade/index.jade')
        .pipe(jade({
            pretty: true
        }))
        .pipe(gulp.dest('./'))
});

gulp.task('jade', () => {
    return gulp.src('./src/jade/**/*.jade')
        .pipe(jade({
            pretty: true
        }))
        .pipe(gulp.dest('./html'))
        .pipe(rename({
            extname: '.php'
        }))
        .pipe(gulp.dest('./html'));
});



gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['browser-sync'], function() {
    gulp.watch('./src/scss/*.scss',['convertToCss']);
    gulp.watch('./src/jade/**/*.jade',['jadeindex','jade']);
    gulp.watch("./index.html",        ['bs-reload']);
    gulp.watch("./style.css", ['bs-reload']);
    gulp.watch("./src/js/**/*.js",['bs-reload']);
});
