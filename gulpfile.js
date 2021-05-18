var gulp         = require('gulp');
var clean        = require('gulp-clean');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
var imagemin     = require('gulp-imagemin');
var concat       = require('gulp-concat');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {
	var files = [
		'./dev/css/style.scss',
		'./dev/*.php',
		'./dev/js/**/*.js',
	];
	browserSync.init(files, {
		proxy: "http://localhost:8080/projetos/InternetWorkIT"
	});
	gulp.watch("dev/scss/*.scss", ['sass']);
	gulp.watch("dev/*.php").on('change', browserSync.reload);
	gulp.watch("dev/js/*.js").on('change', browserSync.reload);
	gulp.watch("dev/js/*.js", ['concat']);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
	return gulp.src("dev/scss/*.scss")
		.pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer({
		browsers: ['last 5 versions'],
		cascade: false
	}) )
		.pipe(gulp.dest("dev/css"))
		.pipe(browserSync.stream());
});

gulp.task('concat', function() {
	return gulp.src(['./dev/js/src/**/*.*', './dev/js/script.js'])
		.pipe(concat('scripts-min.js'))
		.pipe(gulp.dest('dev/js/'));
});

gulp.task('server', ['serve']);


/*==================================================================================*/


gulp.task('build', ['copyJs']);

gulp.task('duplicate', ['clean'], function () {
	return gulp.src('dev/**/*')
		.pipe(gulp.dest('dist/'));
});

gulp.task('images', ['duplicate'], function () {
	gulp.src('./dev/images/**/*.*')
		.pipe(imagemin())
		.pipe(gulp.dest('dist/images/'));
});

gulp.task('clearJsCss', ['images'],  function () {
	return gulp.src(['dist/css/', 'dist/js/', 'dist/scss/'])
		.pipe(clean());
});

gulp.task('copyCss', ['clearJsCss'],  function () {
	return gulp.src('dev/css/style.css')
		.pipe(gulp.dest('dist/css/'));
});

gulp.task('copyJs', ['copyCss'],  function () {
	return gulp.src('dev/js/scripts-min.js')
		.pipe(gulp.dest('dist/js/'));
});

gulp.task('clean', function () {
	return gulp.src('dist/')
		.pipe(clean());
});