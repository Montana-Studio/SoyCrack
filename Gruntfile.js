module.exports = function(grunt){
	require('jit-grunt')(grunt);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		watch:{
			configFiles:{
				files:['prod/sass/**/*.scss','prod/js/**/*.js','app/wp-content/themes/soycrack/**/*.php'],
				options:{
					livereload: true,
				},
			},
			sass:{
				files:['prod/sass/**/*.scss'],
				tasks: ['sass:deve'],
				options:{
					livereload:true,
				},
			},
			javascript:{
				files:['prod/js/**/*.js','Gruntfile.js'],
				tasks:['jshint','uglify:beauty'],
				options:{
					livereload:true,
				},
			},
		},

		sass: {
			deve: {
				options: {
					style: 'nested'
				},
				files: {
					'app/wp-content/themes/soycrack/css/main.css': 'prod/sass/main.scss'
				},
			},
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'app/wp-content/themes/soycrack/css/main.css': 'prod/sass/main.scss'
				},
			},
		},
		jshint:{
			all:[
				'Gruntfile.js','prod/js/scripts.js'
			]
		},

		uglify:{
			beauty:{
				options:{
					beautify:true
				},
				files:{
			        'app/wp-content/themes/soycrack/js/output.min.js': ['prod/js/scripts.js'],
			        'app/wp-content/themes/soycrack/js/swipe.min.js':['prod/js/swipe.min.js']
			    }
			},
			all:{
				files:{
			        'app/wp-content/themes/soycrack/js/output.min.js': ['prod/js/scripts.js'],
			        'app/wp-content/themes/soycrack/js/swipe.min.js':['prod/js/swipe.min.js']
			    }
			}
		},

		imagemin: {
			dynamic: {
		      files: [{
		        expand: true,
		        optimizationLevel: 3,                
		        cwd: 'prod/img/',
		        src: ['**/*.{png,jpg,gif}'],
		        dest: 'app/wp-content/themes/soycrack/img/'
		      }]
		    }
		},
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

	grunt.registerTask('dev', ['watch']);
	grunt.registerTask('default', ['sass:dist','uglify:all','imagemin']);

};