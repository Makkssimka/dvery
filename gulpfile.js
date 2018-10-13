var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync');

gulp.task('sass', function () {
    return gulp.src('sources/style/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('public/style'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('browserSync', function () {
   browserSync({
       proxy: 'dvery.ro',
       open: false
   });
});

gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('sources/style/*.sass', ['sass']);
    gulp.watch('template/**/*.php', browserSync.reload);
    gulp.watch('app/*.php', browserSync.reload);
    gulp.watch('core/*.php', browserSync.reload);
    gulp.watch('public/script/*.js', browserSync.reload);
});
