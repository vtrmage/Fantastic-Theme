const gulp         = require ('gulp');
const sass         = require ('gulp-sass');
const sourcemaps   = require('gulp-sourcemaps');
const rename       = require("gulp-rename");
const browserSync  = require ('browser-sync').create();
const touch        = require('gulp-touch-cmd');


function compile_sass(){
  // Aqui estou  escolhendo o arquivo de origem
   return gulp.src('../sass/app.scss')
   .pipe(sourcemaps.init())
   // Para mostrar os erros de uma forma mais amigavel
   .pipe(sass({errLogToConsole: true,outputStyle: 'compressed'}).on('error', sass.logError))
   //.pipe(rename({suffix: '.min'}))
   .pipe(sourcemaps.write('../minifications'))
   .pipe(gulp.dest('../minifications'))
   .pipe(browserSync.stream())
   .pipe(touch());
}

function watch(){
  browserSync.init({
    proxy:"http://localhost:8888/project/"
  });
  gulp.watch('../sass/**/*.scss', gulp.parallel('compile_sass'));
  gulp.watch('../**/*.php').on('change', browserSync.reload);
  gulp.watch('../app/**/*.php').on('change', browserSync.reload);
}
exports.compile_sass = compile_sass;
exports.watch        = watch;
