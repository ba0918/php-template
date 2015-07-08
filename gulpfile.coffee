gulp  = require 'gulp'
shell = require 'gulp-shell'
del   = require 'del'

gulp.task 'default', ['build']

gulp.task 'clean', (done) -> del(['build'], done)
gulp.task 'build', ['build:phpunit']
gulp.task 'build:phpunit', ['clean'], shell.task ['sh vendor/bin/phpunit']

gulp.task 'watch', ->
  gulp.watch ['test/**/*.php'], ['build:phpunit']
