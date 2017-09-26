/**
 * AMD Modules required for this script
 **/
var gulp = require('gulp'),
    less = require('gulp-less'),
    rename = require('gulp-rename'),
    path = require('path'),
    del = require('del'),
    concat = require('gulp-concat'),
    mincss = require('gulp-clean-css'),
    uglify = require('gulp-uglifyjs'),
    lessAutoPrefix = require('less-plugin-autoprefix');

/**
 * Global configuration
 **/
var dirs = {
    sources: {
        vendor: {
            css: [
                './vendor/supersized-3.2/slideshow/css/supersized.css',
                './vendor/GammaGallery/css/style.css'
            ],
            less: [
                './node_modules/font-awesome/less/font-awesome.less'
            ],
            fonts: [
                './node_modules/font-awesome/fonts/*',
                './vendor/GammaGallery/fonts/*'
            ],
            js: [
                './node_modules/jquery/dist/jquery.js',
                './node_modules/jquery-serializeobject/jquery.serializeObject.js',
                './node_modules/jquery.browser/dist/jquery.browser.js',
                './vendor/supersized-3.2/slideshow/js/supersized.3.2.0.js',
                './vendor/GammaGallery/gamma.js',
            ],
            img: [
                './vendor/GammaGallery/img/loader_dark.gif',
            ]
        },
        app: {
            less: './app/assets/less/main.less',
            fonts: [ './app/assets/fonts/*' ],
            img: [ './app/assets/img/**' ],
            js:   './app/assets/js/*.js'
        }
    },
    output: {
        fonts: './app/public/fonts/',
        img:   './app/public/img/',
        css:   './app/public/css/',
        js:    './app/public/js/'
    },
};

/**
 * Clean a given directory using dir+pattern for glob
 *
 * @param string dir      Top level directory to be cleared
 * @param string pattern  Pattern for files to search
 **/
function clearDir(dir, pattern) {
    console.log('Removing [' + pattern + '] from  [' + dir + '] output directory ...');
    return del(
        [ dir + pattern ],
        { force: true }
    );
}

/**
 * Compile LESS source files into plain CSS files
 *
 * @param {glob} src   Any source specification accepted as glob
 * @param string dest  Output path for compiled resources
 **/
function compileLess(src, dest) {
    console.log('Compiling LESS sources into plain CSS...');
    var autoprefix = new lessAutoPrefix({ browsers: ['last 2 versions'] });
    return gulp.src(src)
        .pipe(less({
            //    paths: [ path.join(__dirname, 'vendor/bootstrap/less') ],
            plugins: [autoprefix]
        }))
        .pipe(gulp.dest(dest));
}

/**
 * Copy CSS files into another folder
 *
 * @param string src  Path for source CSS files
 * @param string dest Name for the output folder
 **/
function copyCss(src, dest) {
    console.log('Copy CSS resources from [' + src + '] to [' + dest + '] ...');
    return gulp.src(src)
        .pipe(gulp.dest(dest));
}


/**
 * Concatenate several CSS files into a big one
 *
 * @param string src  Path for source CSS files
 * @param string dest Name for the output file
 **/
function concatCss(src, dest) {
    console.log('Concatenating CSS resources from [' + src + '*.css] to [' + dest + '] ...');
    return gulp.src(src)
        .pipe(concat(dest))
        .pipe(gulp.dest(dirs.output.css));
}

/**
 * Minify a CSS file
 *
 * @param string srcFile  Complete path to the input file
 * @param string destFile Basename of the output file
 **/
function minimizeCss(srcFile, destFile) {
    var srcFile = dirs.output.css + srcFile;
    console.log('Minifying CSS resources [' + srcFile + '] => [' + destFile + '] ...');
    return gulp.src(srcFile)
        .pipe(rename(destFile))
        .pipe(mincss({}))
        .pipe(gulp.dest(dirs.output.css));
}

/**
 * Copy vendor (FA, bootstrap,...) and app fonts to public dir
 **/
function copyFonts(srcVendor, srcApp) {
    var allFonts = srcVendor.concat(srcApp);
    console.log('Copy [' + allFonts + '] files to [' + dirs.output.fonts + '] ...');
    return gulp.src(allFonts)
        .pipe(gulp.dest(dirs.output.fonts));
}

/**
 * Copy images to public dir
 **/
function copyImages(srcVendor, srcApp) {
    var allImages = srcVendor.concat(srcApp);
    console.log('Copy [' + allImages + '] files to [' + dirs.output.img + '] ...');
    return gulp.src(allImages)
        .pipe(gulp.dest(dirs.output.img));
}

/**
 * Concatenate several JS files as a big one
 *
 * @param string srcDir   Path for source CSS files
 * @param string destFile Name for the output file
 **/
function concatJs(srcDir, destFile) {
    console.log('Concatenating [' + srcDir + '] files to [' + destFile + '] ...');
    return gulp.src(srcDir)
        .pipe(concat(destFile))
        .pipe(gulp.dest(dirs.output.js));
}

/**
 * Uglify a JS file
 *
 * @param string srcFile  Basename of the input file
 * @param string destFile Basename of the output file
 **/
function uglifyJs(srcFile, destFile) {
    var srcFile = dirs.output.js + srcFile;
    console.log('Uglifying [' + srcFile + '] to [' + destFile + '] ...');
    return gulp.src(srcFile)
        .pipe(uglify(destFile))
        .pipe(gulp.dest(dirs.output.js));
}

/**
 * Initiate a watch task on a dir/glob
 *
 * @param {glob}   src   The dir/pattern to watch
 * @param string[] tasks The tasks to be performed
 **/
function watchDir(src, tasks) {
    gulp.watch(src, tasks).on('change',function (event) {
        console.log("File [" + event.path + "] was " + event.type + ' ...');
    });
}

// Style tasks - Vendor
gulp.task('less:vendor:clear', function() { return clearDir(dirs.output.css + 'vendor/less', '*.css'); });
gulp.task('less:vendor', [ 'less:vendor:clear' ], function() { return compileLess(dirs.sources.vendor.less, dirs.output.css + 'vendor/less') });
gulp.task('css:vendor:clear', function() { return clearDir(dirs.output.css + 'vendor/css', '*.css'); });
gulp.task('css:vendor', [ 'css:vendor:clear' ], function() { return copyCss(dirs.sources.vendor.css, dirs.output.css + 'vendor/css') });
gulp.task('css:vendor:concat', [ 'less:vendor', 'css:vendor' ], function(){ return concatCss([dirs.output.css + 'vendor/css/*.css', dirs.output.css + 'vendor/less/*.css'], 'vendor.css'); });
gulp.task('css:vendor:min', [ 'css:vendor:concat' ], function(){ return minimizeCss('vendor.css','vendor.min.css'); });

// Style tasks - App
gulp.task('css:app:clear', function() { return clearDir(dirs.output.css + 'app/', '*.css'); });
gulp.task('less:app', [ 'css:app:clear' ], function() { return compileLess(dirs.sources.app.less, dirs.output.css + 'app/') });
gulp.task('css:app:concat', [ 'less:app' ], function(){ return concatCss(dirs.output.css + 'app/*.css', 'app.css'); });
gulp.task('css:app:min', [ 'css:app:concat' ], function(){ return minimizeCss('app.css','app.min.css'); });

gulp.task('css:clear', function() { return clearDir(dirs.output.css, '*'); });

// Fonts tasks
gulp.task('fonts:clear', function() { return clearDir(dirs.output.fonts, '*'); });
gulp.task('fonts:copy', [ 'fonts:clear' ],  function() { return copyFonts(dirs.sources.vendor.fonts, dirs.sources.app.fonts) });

// Images tasks
gulp.task('images:clear', function() { return clearDir(dirs.output.images, '*'); });
gulp.task('images:copy', [ 'fonts:clear' ],  function() { return copyImages(dirs.sources.vendor.img, dirs.sources.app.img) });

// Style tasks - vendor
gulp.task('js:vendor:clear', function() { return clearDir(dirs.output.js, 'vendor*.js'); });
gulp.task('js:vendor:concat', [ 'js:vendor:clear' ], function() { return concatJs(dirs.sources.vendor.js, 'vendor.js'); });
gulp.task('js:vendor:min', [ 'js:vendor:concat' ], function() { return uglifyJs('vendor.js', 'vendor.min.js'); });

// Style tasks - app
gulp.task('js:app:clear', function() { return clearDir(dirs.output.js, 'app*.js'); });
gulp.task('js:app:concat', [ 'js:app:clear' ], function() { return concatJs(dirs.sources.app.js, 'app.js'); });
gulp.task('js:app:min', [ 'js:app:concat' ], function() { return uglifyJs('app.js', 'app.min.js'); });

// Default task: launched when `gulp` invoked without args
gulp.task('default', [ 'fonts:copy', 'images:copy', 'js:vendor:min', 'js:app:min', 'css:vendor:min', 'css:app:min' ]);

// Watch task
gulp.task('watch', function() {
    watchDir(dirs.sources.app.js, [ 'js:app:min' ]);
    watchDir(dirs.sources.app.less, [ 'css:app:min' ]);
    watchDir(dirs.sources.vendor.js, [ 'js:vendor:min' ]);
    watchDir(dirs.sources.vendor.less, [ 'css:vendor:min' ]);
});
