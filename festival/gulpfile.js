var gulp         = require('gulp');
var sass         = require('gulp-sass');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;
var autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', () => {
  return gulp.src([
    'node_modules/bootstrap/scss/bootstrap.scss',
    'node_modules/bootstrap/scss/bootstrap.scss',
    './scss/**/*.scss'
  ])
  .pipe(autoprefixer())
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(gulp.dest('./css'))
  .pipe(browserSync.stream());
});

gulp.task('browser-sync', ['sass'],function(){
  var archivos = [
    './css/**/*.css',
    './**/*.php',
    './scss/**/*.scss',
    './inc/**/*.php',
    './js/**/*.js',
    './images/**/*.**'
  ];
  browserSync.init(archivos,{
    proxy : 'http://localhost/boots_delatorre/festival/',
    notify : false
  })
});

gulp.task('js', () => {
  return gulp.src([
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js'
  ])
  .pipe(gulp.dest('./js'))
  .pipe(browserSync.stream());
});

gulp.task('font-awesome', () => {
  return gulp.src('node_modules/@fortawesome/fontawesome-free/css/all.min.css')
  .pipe(gulp.dest('./css'));
})

gulp.task('fonts', () => {
  return gulp.src('node_modules/@fortawesome/webfonts/*')
    .pipe(gulp.dest('./fonts'));
});

gulp.task('default', ['sass','js', 'browser-sync','font-awesome', 'fonts'], function() {
  gulp.watch(["./scss/*.scss"], ['sass']);
});
