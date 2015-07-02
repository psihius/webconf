module.exports = function (grunt) {
	var lib_path = 'lib/',
		dist_path = 'assets/',
		svg_path = 'app/svg/',
		data_path = 'app/data/';
	grunt.initConfig({
		watch: {
			options: {
				livereload: true,
			},
			jade: {
				files: "app/**/*.jade",
				tasks: ["jade", "clean:css", "copy:css", "hashres"]
			},
			stylus: {
				files: "app/**/*.styl",
				tasks: ["clean:css", "stylus", "postcss", "copy:css", "hashres"]
			},
			js: {
				files: "app/js/*.js",
				tasks: ["clean:js", "uglify"]
			},
			json: {
				files: "data/*.json",
				tasks: ["merge-json", "jade", "clean:css", "copy", "hashres"]
			},
			svg: {
				files: [svg_path + "*.svg"],
				tasks: ["svgstore"]
			},
		},

		jade: {
			main: {
				options: {
					pretty: true,
					data: grunt.file.readJSON('data/data.json'),
				},
				files: [
					{
						expand: true,
						cwd: "app/templates",
						src: ["**/*.jade"],
						dest: "site/templates",
						ext: ".php",
					},
					{
						expand: true,
						cwd: "app/snippets",
						src: ["**/*.jade"],
						dest: "site/snippets",
						ext: ".php",
					},
				],
			},
		},
		stylus: {
			main: {
				options: {
					compress: false,
				},
				files: [{
					src: 'app/main.styl',
					dest: dist_path + 'css_temp/main.css'
				}]
			},
		},
		hashres: {
			prod: {
				src: [dist_path + 'css/main.css'],
				dest: 'site/snippets/head.php'
			},
		},
		clean: {
			js: [dist_path + "js/*.js"],
			css: [dist_path + "css/*.css"],
			css_temp: [dist_path + "css_temp/*.css"]
		},
		copy: {
			css: {
				files: [{
					expand: true,
					cwd: dist_path + "css_temp/",
					src: ["*.css"],
					dest: dist_path + "css/",
					ext: ".css"
				}]
			},
		},
		uglify: {
			options: {
				sourceMap: true,
				sourceMapName: dist_path + 'js/script.map',
				mangle: false
			},
			dist: {
				files: [{
					dest: dist_path + 'js/script.js',
					src: [
						// lib_path + 'jquery/dist/jquery.min.js',
						// lib_path + 'featherlight/release/featherlight.min.js',
						// lib_path + 'jQuery-Collapse/src/jquery.collapse.js',
						// lib_path + 'jQuery-Collapse/src/jquery.collapse_storage.js',

						// lib_path + 'flexie/dist/flexie.min.js',
						'app/js/script.js'
					]
				}]
			}
		},
		"merge-json": {
			group: {
				src: [
					data_path + "*.json"
				],
				dest: "data/data.json"
			}
		},
		postcss: {
			options: {
				map: true,
				processors: [
					require('autoprefixer-core')({
						browsers: ['> 1%', 'last 2 versions', 'IE 9']
					}),
				],
			},
			dist: {
				src: dist_path + 'css_temp/main.css'
			}
		},
		svgstore: {
			options: {
				prefix: 'icon-',
				cleanup: false,
				svg: {
					style: 'display: none;'
				}
			},
			default: {
				files: [{
					src: [
						svg_path + "*.svg"
					],
					dest: dist_path + "images/svg-defs.svg"
				}]
			},
		},
	});

	grunt.loadNpmTasks("grunt-contrib-jade");
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks("grunt-contrib-watch");
	grunt.loadNpmTasks("grunt-contrib-copy");
	grunt.loadNpmTasks('grunt-hashres');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-merge-json');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-svgstore');

	grunt.registerTask("default", [ "svgstore", "merge-json", "clean", "jade:main", "stylus:main", "postcss", "copy:css", "hashres:prod", "uglify", "watch"]);

};
