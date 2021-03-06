var gulp 		= require('gulp');
var rename  	= require('gulp-rename');
var sass 		= require('gulp-sass');
var uglify 		= require('gulp-uglify');
var sourceMaps 	= require('gulp-sourcemaps');
var browserify 	= require('browserify');
var babelify 	= require('babelify');
var source      = require('vinyl-source-stream');
var buffer      = require('vinyl-buffer');
var browserSync = require('browser-sync').create();
var concat      = require('gulp-concat');
var reload      = browserSync.reload;
var minifyCSS   = require("gulp-clean-css");



// css gulp init
var styleSRC 	= 'css/style.css';
var styleDEST 	= './output/';
var styleWatch 	= './css/**/*.css';

// js gulp init
var jsSRC 		= 'custom.js';
var jsDEST 		= './output/js/';
var jsWatch 	= './js/**/*.js';

// browserSync parametres

gulp.task("clean-css", function(){
    return gulp.src( styleSRC )
    .pipe(minifyCSS({KeepSpecialComments: 1}))
    .pipe(sourceMaps.init())
    .pipe( rename({suffix: '.min'}))
    .pipe(sourceMaps.write('./'))
    .pipe(gulp.dest(styleDEST))
    .pipe(browserSync.stream());

});


gulp.task('concat', function(){
    return gulp.src(['node_modules/jquery/dist/jquery.min.js','js/popper.js','node_modules/bootstrap/dist/js/bootstrap.min.js', 'js/custom.js', './admin/js/admin.js'])
    .pipe( sourceMaps.init({ loadMaps: true }) )
    .pipe(uglify())
    .pipe(concat('custom.min.js'))
    .pipe( sourceMaps.write('./'))
    .pipe(gulp.dest(jsDEST))
    
});



gulp.task('serve', ['clean-css', 'concat'], function(){
    browserSync.init({
        proxy   : "http://localhost/wordpress"
    });
    gulp.watch(styleWatch , ['clean-css', reload]);
    gulp.watch(jsWatch, ['concat', reload]);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
