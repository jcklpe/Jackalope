// Gulp.js configuration
'use strict';

const

    //source and build folders
    dir = {
        src: './assets/src/',
        build: './assets/build/',
        root: './',
    },



    // Gulp and plugins
    gulp = require('gulp'),
    gutil = require('gulp-util'),
    newer = require('gulp-newer'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    deporder = require('gulp-deporder'),
    concat = require('gulp-concat'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

// Browser-sync
var browsersync = false;



// The below allows you to work on your template from outside your server and have gulp copy the php files over to the theme folder along with the scss and js etc

//- PHP settings
const php = {
    src: dir.src + 'template/**/*.php', //*/
    build: dir.build
};

// copy PHP files
gulp.task('php', () => {
    return gulp.src(php.src)
        .pipe(newer(php.build))
        .pipe(gulp.dest(php.build));
});

// CSS settings
var css = {
    src: dir.src + 'scss/style.scss',
    watch: dir.src + 'scss/**/*.scss',
    build: dir.root,
    sassOpts: {
        outputStyle: 'expanded',
        //   imagePath       : images.build,
        precision: 3,
        errLogToConsole: true
    },
    processors: [
        require('postcss-assets')({
            // loadPaths: ['images/'],
            basePath: dir.build,
            baseUrl: '/wp-content/themes/jackalope/'
        }),
        require('autoprefixer')({
            browsers: ['last 2 versions', '> 2%']
        }),
        require('css-mqpacker'),
        require('cssnano'),
    ]
};

// CSS processing
gulp.task('css', () => {
    return gulp.src(css.src)
        .pipe(sourcemaps.init())
        .pipe(sass(css.sassOpts))
        .pipe(postcss(css.processors))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(css.build))
        .pipe(browsersync ? browsersync.reload({
            stream: true
        }) : gutil.noop());
});