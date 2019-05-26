module.exports = function( grunt ) {

	grunt.util.linefeed = '\n';

	grunt.initConfig( {

		pkg: grunt.file.readJSON( 'package.json' ),

		jshint: {
			files: ['Gruntfile.js', 'js/*.js'],
			options: {
				globals: {
					jQuery: true
				}
			}
		},
		
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		
		copy: {
			main: {
				files: [

					// Animate
					{
						expand: false,
						src: ['bower_components/animate.css/animate.css'],
						dest: 'lib/animate.css',
						filter: 'isFile'
					},

					{
						expand: false,
						src: ['bower_components/animate.css/animate.min.css'],
						dest: 'lib/animate.min.css',
						filter: 'isFile'
					},

					// ToolTipster
					{
						expand: false,
						src: ['node_modules/tooltipster/src/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.css'],
						dest: 'lib/tooltipster-sideTip-light.css',
						filter: 'isFile'
					},

                    /*{
                        expand: false,
                        src: ['node_modules/tooltipster/dist/css/tooltipster.bundle.css'],
                        dest: 'lib/tooltipster.bundle.css',
                        filter: 'isFile'
                    },*/
					{
						expand: false,
						src: ['node_modules/tooltipster/dist/css/tooltipster.bundle.min.css'],
						dest: 'lib/tooltipster.bundle.min.css',
						filter: 'isFile'
					},

					{
						expand: false,
						src: ['node_modules/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css'],
						dest: 'lib/tooltipster-sideTip-light.min.css',
						filter: 'isFile'
					},

                    /*{
                        expand: false,
                        src: ['node_modules/tooltipster/dist/js/tooltipster.bundle.js'],
                        dest: 'lib/tooltipster.bundle.js',
                        filter: 'isFile'
                    },*/
					{
						expand: false,
						src: ['node_modules/tooltipster/dist/js/tooltipster.bundle.min.js'],
						dest: 'lib/tooltipster.bundle.min.js',
						filter: 'isFile'
					},

					// jQuery Smooth Scroll
					{
						expand: false,
						src: ['node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js'],
						dest: 'lib/jquery.smooth-scroll.js',
						filter: 'isFile'
					},
					{
						expand: false,
						src: ['node_modules/jquery-smooth-scroll/jquery.smooth-scroll.min.js'],
						dest: 'lib/jquery.smooth-scroll.min.js',
						filter: 'isFile'
					},

					// Slick Slider
					{
						expand: true,
						cwd: 'bower_components/slick-carousel/slick/',
						src: ['**'],
						dest: 'lib/slick/'
					},

				]
			}
		},

		clean: {
			ellipsis: [
				'ellipsis.css.map',
			],
			slickLib: [
				'lib/slick/config.rb'
			]
		},
		
		watch: {
			
			css: {
				files: 'sass/**/**/*',
				tasks: [ 'compass', 'clean' ]
			},

			js: {
				files: 'js/*.js',
				tasks: [ 'jshint' ]
			},

			config: {
				files: 'Gruntfile.js',
				tasks: [ 'default' ]
			}
			
		}

	});

	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-contrib-compass' );
	grunt.loadNpmTasks( 'grunt-contrib-copy' );
	grunt.loadNpmTasks( 'grunt-contrib-clean' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );

	grunt.registerTask( 'default', [
		'jshint',
		'compass',
		'copy',
		'clean',
		'watch',
	] );

};