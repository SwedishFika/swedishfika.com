module.exports = function (grunt) {
	'use strict';
    grunt.initConfig({
        sass: {
            dist: {
              options: {
                style: 'expanded'
              },
              files: {
                'assets/css/style.max.css': 'assets/scss/style.scss'
              }
            }
        },
        cssmin: {
          add_banner: {
            options: {
              banner: '/* \n Theme Name: Swedish Fika\n Theme URI: http://www.swedishfika.com\n Description: The first version of Swedish Fika\n Version: 1.0\n Author: Alexander Radsby & Simon Kjellberg\n */'
            },
            files: {
              'style.css': ['assets/css/style.max.css']
            }
          }
        },
        watch: {
          sass: {
            files: [
            'assets/scss/**/*.scss'
            ],
            tasks: ['sass']
          },
          css: {
            files: [
            'assets/css/**/*.css'
            ],
            tasks: ['cssmin']
          }
        }
    });

    // These plugins provide necessary tasks
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default task
    // grunt.registerTask('default', ['jshint', 'concat', 'uglify']);
    grunt.registerTask('default', ['watch']);
};