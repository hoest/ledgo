var gulp = require('gulp');

var jshint = require('gulp-jshint');
var sourcemaps = require('gulp-sourcemaps');
var stylint = require('gulp-stylint');
var stylus = require('gulp-stylus');
var uglify = require('gulp-uglify');
var rimraf = require('gulp-rimraf');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var watch = require('gulp-watch');
var jeet = require('jeet');
var rupture = require('rupture');
var axis = require('axis');
var autoprefixer = require('autoprefixer-stylus');

gulp.task('clean', function () {
  return gulp.src('./_public/**/*', {read: false})
             .pipe(rimraf());
});

gulp.task('stylus', function () {
  return gulp.src(['./src/stylus/*.styl', '!./src/stylus/_*.styl'])
             .pipe(stylint())
             .pipe(stylus({
               compress: true,
               use: [rupture(), jeet(), axis(), autoprefixer()]
             }))
             .pipe(concat('style.css'))
             .pipe(gulp.dest('./_public/'));
});

gulp.task('concat', function () {
  return gulp.src(['./_public/css/*.css'])
             .pipe(concat('styles.css'))
             .pipe(gulp.dest('./_public/'));
});

gulp.task('js', function() {
  return gulp.src('./src/js/*.js')
             .pipe(jshint())
             .pipe(jshint.reporter('jshint-stylish'))
             .pipe(uglify())
             .pipe(gulp.dest('./_public/js/'));
});

gulp.task('html', function() {
  return gulp.src(['./src/*.html', './src/*.php'])
             .pipe(gulp.dest('./_public'));
});

gulp.task('images', function() {
  return gulp.src(['./src/img/**/*'])
             .pipe(imagemin({
               progressive: true,
               svgoPlugins: [{removeViewBox: false}],
             }))
             .pipe(gulp.dest('./_public/img/'));
});

gulp.task('watch', function() {
  gulp.watch(['./src/stylus/*.styl'], ['stylus']);
  gulp.watch(['./src/*.html', './src/*.php'], ['html']);
  gulp.watch('./src/js/*.js', ['js']);
  gulp.watch('./src/img/**/*.js', ['images']);
});

gulp.task('default', ['stylus', 'js', 'html', 'images']);
