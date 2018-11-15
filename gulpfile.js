var gulp = require('gulp');
var sass = require('gulp-sass');

function handleError(err) {
  console.log(err.toString());
  this.emit('end');
}

sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('common/scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('common/css'));
});

gulp.task('compress', function() {
  gulp.src('common/js/main.js')
    .pipe(minify({
        ext:{
            src:'.js',
            min:'.min.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '.min.js']
    }))
    .pipe(gulp.dest('common/js/'))
});

gulp.task('watch', function(){
  gulp.watch('common/scss/*.{sass,scss}', ['dev']);
  gulp.watch('common/js/main.js', ['compress']);
});

gulp.task('dev', ['sass']);

gulp.task('default', ['sass']);