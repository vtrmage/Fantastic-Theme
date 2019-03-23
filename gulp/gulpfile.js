var gulp       = require('gulp'),
    livereload = require('gulp-livereload'),
    uglify     = require('gulp-uglify');

  

  const sass       = require('gulp-sass');
const rename       = require("gulp-rename");
const sourcemaps   = require('gulp-sourcemaps');
const path         = {
  sass: '../sass/app.scss'
};
const sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
};

gulp.task('minify', async function(){
  gulp.src('../app/modules/Listicles/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('../minifications/'));
});


gulp.task('sass_minify', function() {

    return gulp.src(path.sass)
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('../minifications'))

});


gulp.task('watch', ['sass_minify'], function(){
   gulp.watch(src.path, ['sass_minify']);
});

gulp.task('watch', ['sass_minify'], function() {

    gulp.watch(src.watchCSS, ['sass']);
    //gulp.watch(src.watchJS, ['scripts']);
});

gulp.task('default', async function(){
  console.log('jira com a jiromba do jiren');
});
