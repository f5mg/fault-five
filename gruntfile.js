module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),


		sass: {
			dist: {
				options: {
					sourcemap: 'none'
				},
				files: [{
					expand: true,
					cwd: 'sass',
					src: ['*.scss'],
					dest: 'css',
					ext: '.css'
				}]
			}
		},
		
		cssmin : {
			target: {
    files: [{
      expand: true,
      cwd: 'css',
      src: ['*.css', '!*.min.css'],
      dest: 'css',
      ext: '.min.css'
    }]
  }
		},

		concat: {
					options: {
						separator: '/*concat*/'
					},
					dist: {
						src: ['css/main.min.css'],
						dest: 'style.min.css'
					}
				},

		uglify: {
			build: {
				src: ['js/*.js'],
				dest: 'script.min.js'
			}
		},
		watch: {
			css: {
				files: 'sass/*.scss',
				tasks: ['sass', 'cssmin', 'concat']
			},
			js: {
				files: 'js/*.js',
				tasks: ['uglify']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');


	grunt.registerTask('default', ['watch']);
};
