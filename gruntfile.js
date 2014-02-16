module.exports = function (grunt) {
	'use strict';
    grunt.initConfig({
        watch: {
          sass: {
            files: [
            'assets/scss/**/*.scss'
            ],
            tasks: ['sass']
          },
          css: {
            files: [
            'assets/css/style.min.css'
            ],
            tasks: ['cssmin']
          }
        },
        sass: {
            dist: {
              options: {
                style: 'expanded'
              },
              files: {
                'assets/css/style.css': 'assets/scss/style.scss'
              }
            }
        },

        cssmin: {
          combine: {
            files: {
              'assets/css/style.css': ['css/style.css']
            }
          }
        },
    });

    // These plugins provide necessary tasks
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Default task
    // grunt.registerTask('default', ['jshint', 'concat', 'uglify']);
    grunt.registerTask('default', ['watch']);
};