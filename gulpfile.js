
// Imports

var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    minify      = require('gulp-clean-css'),
    styleguide  = require('sc5-styleguide'),
    postcss     = require('gulp-postcss');

// Path definitions

var sourcePath      = 'source';
var htmlWild        = sourcePath + '/**/*.php';
var phpWild         = sourcePath + '/**/*.php';
var styleSourcePath = sourcePath + '/sass';
var scssWild        = styleSourcePath + '/**/*.scss';
var scssRoot        = styleSourcePath + '/screen.scss';
var overviewPath    = sourcePath + '/overview.md';

var buildPath = 'build';
var styleBuildPath = buildPath + '/styles';
var styleguideAppRoot = '/styleguide';
var styleguideBuildPath = buildPath + styleguideAppRoot;

var tmpPath = 'tmp';
var styleguideTmpPath = tmpPath + '/styleguide';

// Building the application
//
// In reality the app would ofcourse be a lot more complex.
// Here the app simply consists of some HTML so we get to examine how
// the styles would be used in the application. A key relevation is
// that the markup needs to be written into the app. There is no magic
// that would bring the markup for a page into the app from the pages
// section in the styleguide.

gulp.task('html', function() {
    return gulp.src(htmlWild)
        .pipe(gulp.dest(buildPath));
});

gulp.task('scss', function() {
    return gulp.src(scssRoot)
        .pipe(sass())
        .pipe(gulp.dest(buildPath + '/prototype/styles'))
        .pipe(gulp.dest(buildPath + '/www/styles'));
});

gulp.task('assets', function() {
    gulp.src([sourcePath + '/javascript/**'])
    // Do image sprites, optimizations etc.
        .pipe(gulp.dest(buildPath + '/www/javascript'))
        .pipe(gulp.dest(styleguideTmpPath + '/javascript'));
    gulp.src([sourcePath + '/fonts/**'])
    // Do image sprites, optimizations etc.
        .pipe(gulp.dest(buildPath + '/www/fonts'))
        .pipe(gulp.dest(styleguideTmpPath + '/fonts'));
    gulp.src([sourcePath + '/images/**'])
    // Do image sprites, optimizations etc.
        .pipe(gulp.dest(buildPath + '/www/images'))
        .pipe(gulp.dest(styleguideTmpPath + '/images'));
    gulp.src([sourcePath + '/www/**'])
    // Do image sprites, optimizations etc.
        .pipe(gulp.dest(buildPath + '/www'))
});

gulp.task('prototype', function() {
    gulp.src([sourcePath + '/prototype/**'])
    // Do image sprites, optimizations etc.
        .pipe(gulp.dest(buildPath + '/prototype'))
});
// Building styleguide for static hosting to be displayed as a part of the application
//
// Here we build the styleguide so it can be included in a web folder within the app.
// The benefit for including the styleguide at /styleguide path of the app is that
// everyone can always find a master copy of the style guide. Another benefit is that
// this copy will be load balanced by the web server, so it can handle heavy loads.
// All interactive features are disabled to prevent users from tampering with the
// styles.

gulp.task('staticStyleguide:generate', function() {
    return gulp.src(scssWild)
        .pipe(styleguide.generate({
            title: 'Brickson Pattern Library',
            rootPath: styleguideBuildPath,
            appRoot: styleguideAppRoot,
            overviewPath: overviewPath,
            sideNav: true,
            previousSection: true,
            nextSection: true,
            extraHead: [
                '<link rel="stylesheet" type="text/css" href="/screen.css">',
                '<script src="/javascript/html5shiv.min.js"></script>',
                '<script src="https://use.typekit.net/zaf1yku.js"></script>',
                '<script>try{Typekit.load({ async: true });}catch(e){}</script>',
                '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>',
                '<script src="/javascript/jquery.plugins.js"></script>',
                '<script src="/javascript/jquery.modules.js"></script>',
                '<script src="/javascript/picturefill.min.js" async></script>',
                '<script src="/javascript/pf.intrinsic.min.js" async></script>'
            ],
        }))
        .pipe(gulp.dest(styleguideBuildPath));
});

gulp.task('staticStyleguide:applystyles', function() {
    console.log(styleguideBuildPath);
    return gulp.src(scssRoot)
        .pipe(sass({
            errLogToConsole: true
        }))
        .pipe(postcss({}))
        .pipe(minify())
        .pipe(styleguide.applyStyles())
        .pipe(gulp.dest(styleguideBuildPath));
});

gulp.task('staticStyleguide', ['staticStyleguide:generate', 'staticStyleguide:applystyles']);

// Running styleguide development server to view the styles while you are working on them
//
// This task runs the interactive style guide for use by developers. It runs a built-in server
// and contains all the interactive features and should be updated automatically whenever the
// styles are modified.

gulp.task('styleguide:generate', function() {
    return gulp.src(scssWild)
        .pipe(styleguide.generate({
            title: 'Brickson Pattern Library',
            server: true,
            rootPath: styleguideTmpPath,
            overviewPath: overviewPath,
            sideNav: true,
            previousSection: true,
            nextSection: true,
            disableHtml5Mode: true,
            extraHead: [
                '<link rel="stylesheet" type="text/css" href="/screen.css">',
                '<script src="https://use.typekit.net/zaf1yku.js"></script>',
                '<script>try{Typekit.load({ async: true });}catch(e){}</script>',
                '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>',
                '<script src="/javascript/jquery.plugins.js"></script>',
                '<script src="/javascript/jquery.modules.js"></script>',
                '<script>document.createElement( "picture" );</script>',
                '<script src="/javascript/picturefill.min.js" async></script>'
            ],
            beforeBody: '<div class="debug-rhythm debug-layout">',
            afterBody: '</div>'
        }))
        .pipe(gulp.dest(styleguideTmpPath));
});

gulp.task('styleguide:applystyles', function() {
    return gulp.src(scssRoot)
        .pipe(sass({
            errLogToConsole: true
        }))
        .pipe(styleguide.applyStyles())
        .pipe(gulp.dest(styleguideTmpPath));
});

gulp.task('styleguide', ['styleguide:generate', 'styleguide:applystyles']);

// Developer mode

gulp.task('dev', ['html', 'scss', 'assets', 'styleguide', 'prototype'], function() {
    gulp.watch(htmlWild, ['html', 'prototype']);
    gulp.watch(scssWild, ['scss', 'styleguide', 'prototype']);
    console.log(
        '\nDeveloper mode!\n\nSC5 Styleguide available at http://localhost:3000/\n'
    );
});

// The basic build task

gulp.task('default', ['html', 'scss', 'assets', 'prototype', 'staticStyleguide'], function() {
    console.log(
        '\nBuild complete!\n\nFresh build available in directory: ' +
        buildPath + '\n\nCheckout the build by commanding\n' +
        '(cd ' + buildPath + '; python -m SimpleHTTPServer)\n' +
        'and pointing yout browser at http://localhost:8000/\n' +
        'or http://localhost:8000/styleguide/ for the styleguide\n\n' +
        'Run gulp with "gulp dev" for developer mode and style guide!\n'
    );
});