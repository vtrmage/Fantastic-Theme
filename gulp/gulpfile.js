const gulp        = require ('gulp');
const sass        = require ('gulp-sass');
const browserSync = require ('browser-sync').create();


function compile_sass(){
  // Aqui estou  escolhendo o arquivo de origem
   return gulp.src('../sass/app.scss')
   // Para mostrar os erros de uma forma mais amigavel
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest('../minifications'))
   .pipe(browserSync.stream());
}

function watch(){
  browserSync.init({
    proxy:"http://localhost:8888/project/"
  });
  gulp.watch('../sass/**/*.scss', gulp.parallel('compile_sass'));

  gulp.watch('../app/**/*.php').on('change', browserSync.reload);
}
exports.compile_sass = compile_sass;
exports.watch        = watch;
