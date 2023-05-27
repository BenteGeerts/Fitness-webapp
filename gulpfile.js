const gulp = require('gulp');
const {parallel, series} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require('gulp-sass-glob');
const watch = require('watch');
const browserSync = require('browser-sync').create();
const imagemin = require('gulp-imagemin');
const cssnano = require('gulp-cssnano');
const rename = require("gulp-rename");


function buildStyle() {
    return gulp.src('./resources/scss/app.scss')
        .pipe(sassGlob())
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(rename("style.css"))
        .pipe(gulp.dest('./public/css'));
}

function imageMin() {
    return gulp.src('./resources/images/*.{jpg,png,svg}')
        .pipe(imagemin([
            imagemin.mozjpeg({quality: 80, progressive: true}),
            imagemin.optipng({optimizationLevel: 2})
        ]))
        .pipe(gulp.dest('./public/images'));
}

function watchAll() {
    gulp.watch('./public/index.php', browsersyncReload);
    gulp.watch('./resources/**/*.scss', series(buildStyle, browsersyncReload));
    gulp.watch('./resources/**/*.{jpg,png,svg}', series(imageMin, browsersyncReload));
}

function browsersyncServe(cb) {
    browserSync.init({
        server: {
            baseDir: './public'
        }
    });
    cb();
}

function browsersyncReload(cb) {
    browserSync.reload();
    cb();
}

exports.dev = series(watchAll);
exports.build = parallel(buildStyle, imageMin);
