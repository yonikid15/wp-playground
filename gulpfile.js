var gulp = require( 'gulp' );
var watch = require('gulp-watch');

gulp.task('php', function() {
    console.log("imagine php things happening.");
});

gulp.task('watch', function () {

    watch('./index.php', function() {
        gulp.start('php');
    });

    watch('./app/assets/styles/**/*.css', function() {
        gulp.start('styles');     
    });

});

gulp.task('default', function() {
    gulp.start('watch');
});