var gulp = require( 'gulp' ),
watch = require('gulp-watch'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import');

gulp.task('php', function() {
    console.log("imagine php things happening.");
});

gulp.task('styles', function() {
    return gulp.src('./styles/styles.css')
    .pipe(postcss([cssImport, nested, cssvars, autoprefixer]))
    .pipe(gulp.dest('./temp/styles'));
});

gulp.task('import', function() {
    
});

gulp.task('watch', function () {

    watch('./index.php', function() {
        gulp.start('php');
    });

    watch('./styles/**/*.css', function() {
        gulp.start('styles');
    });

});

gulp.task('default', function() {
    gulp.start('watch');
});