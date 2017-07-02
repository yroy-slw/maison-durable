var gulp = require('gulp'),
    concat = require('gulp-concat'),
    lessCss = require('gulp-less'),
    cleanCss = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    jshint = require('gulp-jshint'),
    watch = require('gulp-watch'),
    gutil = require( 'gulp-util' ),
    ftp = require( 'vinyl-ftp' );

var less_paths = [
  'theme/style.less'
];

gulp.task('less', function () {
  gulp.src(less_paths)
      .pipe(lessCss())
      .pipe(autoprefixer({
        browsers: ['last 6 versions'],
        cascade: false
      }))
      .pipe(concat('styles.css'))
      .pipe(cleanCss({
        aggressiveMerging: false
      }))
      .pipe(gulp.dest('theme/'));
});

//Configuration FTP
var user = 'fjcg_yroydev';
var password = 'kenshiro1982';
var host = 'fjcg.ftp.sharedbox.com'; 
var port = 21; 
var localFilesGlob = ['./**/*'];
var remoteFolder = '/web/site_2017/wp-content/themes/'

// helper function to build an FTP connection based on our configuration
function getFtpConnection() { 
    return ftp.create({
        host: host,
        port: port,
        user: user,
        password: password,
        parallel: 10,
        log: gutil.log
    });
}


/**
* Deploy task.
* Copies the new files to the server
*
* Usage: gulp ftp-deploy`
*/
gulp.task('ftp-deploy', function() {

    var conn = getFtpConnection();

    return gulp.src(localFilesGlob, { base: '.', buffer: false })
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files
        .pipe( conn.dest( remoteFolder ) )
    ;
});

/**
* Watch deploy task.
* Watches the local copy for changes and copies the new files to the server whenever an update is detected
*
* Usage: gulp ftp-deploy-watch`
*/
gulp.task('ftp-deploy-watch', function() {

    var conn = getFtpConnection();

    gulp.watch(localFilesGlob)
    .on('change', function(event) {
      console.log('Changes detected! Uploading file "' + event.path + '", ' + event.type);

      return gulp.src( [event.path], { base: '.', buffer: false } )
        .pipe( conn.newer( remoteFolder ) ) // only upload newer files
        .pipe( conn.dest( remoteFolder ) )
      ;
    });
});



gulp.task('default', ['less'],function(){
    gulp.watch('less/*.less', ['less']);
});