/******************/
/** Basic Imports */
/******************/
var gulp        = require('gulp'),
    methods     = {
        minify:     require('gulp-clean-css'),
        postcss:    require('gulp-postcss'),
        imagemin:   require('gulp-imagemin')
    },
    sass        = require('gulp-sass'),
    config      = require('./config.json'),
    log         = require('gulp-util').log,
    tasks       = [],
    debug       = true,
    extras      = ['<link rel="stylesheet" type="text/css" href="/styles/screen.css">',
                    '<script src="/javascript/html5shiv.min.js"></script>',
                    '<script src="https://use.typekit.net/zaf1yku.js"></script>',
                    '<script>try{Typekit.load({ async: true });}catch(e){}</script>',
                    '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>',
                    '<script src="/javascript/jquery.plugins.js"></script>',
                    '<script src="/javascript/jquery.modules.js"></script>',
                    '<script src="/javascript/picturefill.min.js" async></script>',
                    '<script src="/javascript/pf.intrinsic.min.js" async></script>'];

/**
 * This task moves all the assets to the styleguide and www folders.
 */
gulp.task('assets', function() {
    return gulp.src(config.source + '/assets/**/*')
        .pipe(gulp.dest(config.output.build))
        .pipe(gulp.dest(config.output.styleguide));
});

/**
 * This task will build all the css and run the registred tasks.
 */
gulp.task('build', function() {
    var stream = gulp.src(config.source + '/sass/screen.scss')
        .pipe(sass());

    for(var index in tasks) {
        if(tasks.hasOwnProperty(index)) {
            var conf = config.plugins[tasks[index]],
                plugin = tasks[index];

            if(plugin && conf !== false) {
                log('Running: ' + plugin);
                stream = stream.pipe(methods[plugin](conf))
            }
        }
    }

    stream.pipe(gulp.dest(config.output.styleguide + '/styles'))
        .pipe(gulp.dest(config.output.build + '/styles'));

    return stream;
});

gulp.task('styleguide', function() {
    var styleguide = require('sc5-styleguide').generate({
        title: 'Brickson Pattern Library',
        rootPath: config.output.styleguide,
        server: debug,
        overviewPath: config.source + '/overview.md',
        sideNav: true,
        previousSection: true,
        nextSection: true,
        disableHtml5Mode: true,
        extraHead: extras
    });

    gulp.src(config.source + '/sass/**/*.scss')
        .pipe(styleguide)
        .pipe(gulp.dest(config.output.styleguide));

    return gulp.src(config.source + '/sass/screen.scss')
        .pipe(sass())
        .pipe(require('sc5-styleguide').applyStyles())
        .pipe(gulp.dest(config.output.styleguide));
});

/**
 * This task will watch all the sass files and build the css/ minify and build the styleguide.
 */
gulp.task('default', function() {
    var watch = config.watch.map(function(item) {
            return config.source + '/' + item;
        }) || config.source + '/sass/**/*.scss';

    // We will start the build and styleguide when we want it,
    // This gives us the time to build our plugins array which we will need.
    gulp.start(['build', 'styleguide', 'assets']);
    gulp.watch(watch, ['build', 'styleguide', 'assets']);
});

gulp.task('test', function() {
    // Now only to fill in the blanks.
});

gulp.task('production', function() {
    console.log('Called production task!')
});
