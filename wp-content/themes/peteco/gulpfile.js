var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "localhost:8888/peteco"
  })
})

gulp.task('sass', function(cb) {
  return gulp.src('scss/*.scss')
    .pipe(sass())
    .pipe(concat('style.css'))
    .pipe(gulp.dest(''))
    .pipe(browserSync.reload({
      stream: true
    }))
    cb(err);
});

gulp.task('scripts', function() {
  return gulp.src('js/parts/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(''))
    .pipe(browserSync.reload({
      stream: true
    }))
});


// This Funtion Waits for The sass function to complete
gulp.task('css', ['sass'], function() {
  return gulp.src('style.css')
    .pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
    .pipe(gulp.dest(''))
});


gulp.task('watch', ['browserSync', 'sass', 'css', 'scripts'], function (){
  gulp.watch('scss/*.scss', ['sass']); 
  gulp.watch('style.css', ['css']); 
  gulp.watch('*.php', browserSync.reload); 
  gulp.watch('partials/*.php', browserSync.reload); 
  gulp.watch('js/parts/*.js', ['scripts']); 
  gulp.watch('js/*.js', browserSync.reload); 
});

gulp.task('noMamp', ['sass', 'css', 'scripts'], function (){
  gulp.watch('scss/*.scss', ['sass']); 
  gulp.watch('style.css', ['css']); 
  gulp.watch('js/parts/*.js', ['scripts']); 
  
});
