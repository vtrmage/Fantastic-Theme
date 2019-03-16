var gulp = require('gulp');

gulp.task('vai', function(){
  console.log('vai negao');
});

//Css
gulp.task('minify', function(){
  var jeronimo=12 , megan=5, vamp=10, i=1;
  var juno = jeronimo*megan-vamp;
  console.log('Aqui voce vai ver outra conta man, CSS '+ juno + ' O VALOR PERFEITOOOO');


  for (i; i<=juno; i++){
    console.log( i );
  }
});

//scripts
gulp.task('scripts', function(){
     console.log('Incriptoooo MAN');
});

gulp.task('default', function(){
  var numero=323, codigo=23455, tese=numero * codigo;
  console.log('jira com a jiromba do jiren');

  console.log('O valor da conta [e] '+tese);


});
