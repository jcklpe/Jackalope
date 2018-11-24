// Gulp.js configuration
"use strict";

// the reason for doing things in this way below is so that you have the freedom to not only  use gulp to render your scss etc  in your teamplate folder, but also so that you can actually do all your theme development off server and then upload a build folder with just the necessary files and nothing else.  I've set things up to be uploaded but the original Sitepoint tutorial I followed did it like this and I thought it was a good idea to keep that functionality in there as a possibility.
// in order to switch the mode over you just have to change the build folder. "../templatefoldername" etc
// reference article: https://web.archive.org/web/20181031233538/https://www.sitepoint.com/fast-gulp-wordpress-theme-development-workflow/

//source and build folders
const dir = {
    src: "./assets/src/",
    build: "./assets/build/",
    root: "./"
  },
  // Gulp and plugins
  gulp = require("gulp"),
  gutil = require("gulp-util"),
  newer = require("gulp-newer"),
  imagemin = require("gulp-imagemin"),
  sass = require("gulp-sass"),
  postcss = require("gulp-postcss"),
  deporder = require("gulp-deporder"),
  concat = require("gulp-concat"),
  stripdebug = require("gulp-strip-debug"),
  uglify = require("gulp-uglify"),
  sourcemaps = require("gulp-sourcemaps"),
  babel = require("gulp-babel"),
  gulpImport = require("gulp-imports"),
  jsImport = require("gulp-js-import");

// Browser-sync
var browsersync = false;

// The below allows you to work on your template from outside your server and have gulp copy the php files over to the theme folder along with the scss and js etc

//- PHP
//config
const php = {
  src: dir.src + "template/**/*.php", //*/
  build: dir.build
};

// copy PHP files
gulp.task("php", () => {
  return gulp
    .src(php.src)
    .pipe(newer(php.build))
    .pipe(gulp.dest(php.build));
});

//- CSS
//config
var css = {
  src: dir.src + "scss/*.scss",
  watch: dir.src + "scss/**/*.scss", //*/
  build: dir.build,
  sassOpts: {
    outputStyle: "expanded",
    //   imagePath       : images.build,
    precision: 3,
    errLogToConsole: true
  },
  processors: [
    require("postcss-assets")({
      // loadPaths: ['images/'],
      basePath: dir.build,
      baseUrl: "/wp-content/themes/jackalope/"
    }),
    require("autoprefixer")({
      browsers: ["last 2 versions", "> 2%"]
    }),
    require("css-mqpacker"),
    require("cssnano")
  ]
};

// CSS processing
gulp.task("css", () => {
  return gulp
    .src(css.src)
    .pipe(sourcemaps.init())
    .pipe(sass(css.sassOpts))
    .pipe(postcss(css.processors))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(css.build))
    .pipe(
      browsersync
        ? browsersync.reload({
            stream: true
          })
        : gutil.noop()
    );
});

//-Javascript
//config
const jshead = {
  src: dir.src + "js/head.js", //*/
  build: dir.build + "./",
  watch: dir.src + "js/**/*.js" //*/
};

gulp.task("jshead", function() {
  return gulp
    .src(jshead.src)
    .pipe(sourcemaps.init())
    .pipe(gulpImport())
    .pipe(uglify())
    .pipe(stripdebug())
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(jshead.build))
    .pipe(
      browsersync
        ? browsersync.reload({
            stream: true
          })
        : gutil.noop()
    );
});

const jsfooter = {
  src: dir.src + "js/footer.js", //*/
  build: dir.build + "./",
  watch: dir.src + "js/**/*.js" //*/
};

gulp.task("jsfooter", function() {
  return gulp
    .src(jsfooter.src)
    .pipe(sourcemaps.init())
    .pipe(gulpImport())
    .pipe(uglify())
    .pipe(stripdebug())
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(jsfooter.build))
    .pipe(
      browsersync
        ? browsersync.reload({
            stream: true
          })
        : gutil.noop()
    );
});

gulp.task("js", ["jshead", "jsfooter"]);

//- Build
gulp.task("build", ["php", "css", "js"]);

//- Watch

gulp.task("watch", () => {
  gulp.watch(css.watch, ["css"]);

  //gulp.watch(php.src, ["php"], browsersync ? browsersync.reload : {});

  gulp.watch(jshead.watch, ["jshead"]);

  gulp.watch(jsfooter.watch, ["jsfooter"]);
});

// default task
gulp.task("default", ["build", "watch"]);

//-Image Uploads optimization

gulp.task("image", () =>
  gulp
    .src("../../uploads/**/*")
    .pipe(
      imagemin({
        verbose: true
      })
    )
    .pipe(gulp.dest("../../uploads/"))
);
