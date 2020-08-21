module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        dirs:{
            css: "css/",
            scss: "sass/",
            jsPlugins: "js/plugins/",
            jsScripts: "js/scripts/",
            jsBuild: "js/build/",
            svgs: "svgs/",
            svgsBuild: "svgs/build/",
            templates: "templates/"
        },
        //files array format
        concat:{
            plugins: {
                files: [
                    {src: [
                        '<%= dirs.jsPlugins %>modernizr.custom.js',
                        '<%= dirs.jsPlugins %>jquery-nav.js',
                        '<%= dirs.jsPlugins %>jquery.pin.js',
                        '<%= dirs.jsPlugins %>magnific-popup.js',
                        '<%= dirs.jsPlugins %>jquery.imagesloaded.js',
                        '<%= dirs.jsPlugins %>jquery.isotope.js',
                        '<%= dirs.jsPlugins %>jquery.flickity.js',
                        //'<%= dirs.jsPlugins %>jquery.flexslider.js'
                    ],
                    dest: '<%= dirs.jsBuild %>campAS-plugins.js', separator: ';'},
                ],
            },
            scripts: {
                files: [
                    {src: [
                        '<%= dirs.jsScripts %>as-scripts.js',
                        '<%= dirs.jsScripts %>popups.js',
                        '<%= dirs.jsScripts %>as-carousel.js'
                    ],
                    dest: '<%= dirs.jsBuild %>campAS-scripts.js'},
                ],
            },
        },

        uglify:{
            min: {
                files: [
                    {src: [
                        '<%= dirs.jsBuild %>campAS-plugins.js',
                        '<%= dirs.jsBuild %>campAS-scripts.js',

                    ],
                    dest: '<%= dirs.jsBuild %>campAS-js.min.js'},
                ],
            },
        },

        compass: {
            options:{
                sourcemap: true
            },
            dev: {

                src: '<%= dirs.css %>',
                dest: '<%= dirs.scss %>',

            }
        },
        postcss: {
            options: {
                map: true,
                processors:[
                    //require('postcss-easy-import'),
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                ]
            },
            dist: {
                src: 'css/as.css',
                dest: 'css/as-build.css'
            }
        },

        svgstore: {
          options: {
            prefix : 'shape-', // This will prefix each <g> ID
            formatting:{
                indetnt_size: 2
            },
            svg: { // will add and overide the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
                viewBox : '0 0 100 100',
                xmlns: 'http://www.w3.org/2000/svg',
                class:'sr-only' // <-- This line is new
            },
            cleanup: ['fill', 'style']
          },
          default : {
              files: {
                '<%= dirs.templates %>svg-defs.svg': ['<%= dirs.svgsBuild %>*.svg'],
              }
            }
        },
        svgmin: {
            dist: {
                expand: true,
                cwd: "<%= dirs.svgs %>",
                src: "*.svg",
                dest: "<%= dirs.svgsBuild %>"
            }
        },

        browserSync: {
            dev: {
                options: {
                    proxy: 'as.dd:8083',
                    background: true
                }
            }
        },
        bsReload: {
            css: {
                reload: true
            },
            svg: {
                reload: true
            },
            scripts: {
                reload: true
            },
            all: {
                reload: true
            }
        },

        watch: {
            options: {
                spawn: false
            },
            scripts: {
                files: ['<%= dirs.jsBuild %>*.js', '<%= dirs.jsScripts %>*.js'],
                tasks: ['concat', 'uglify', 'bsReload:scripts']
            },
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['compass', 'postcss', 'bsReload:css']
            },
            svg: {
                files: ["<%= dirs.svgs %>*.svg"],
                tasks: ["svgmin", "svgstore", "bsReload:svg"]
            },
            templates: {
                files: ["<%= dirs.templates %>*.php"],
                tasks: ["bsReload:all"]
            }
        }
    });

        grunt.loadNpmTasks('grunt-contrib-concat');
        grunt.loadNpmTasks('grunt-contrib-uglify');
        grunt.loadNpmTasks('grunt-contrib-watch');
        grunt.loadNpmTasks('grunt-contrib-compass');
        grunt.loadNpmTasks('grunt-svgstore');
        grunt.loadNpmTasks('grunt-svgmin');
        grunt.loadNpmTasks('grunt-browser-sync');
        grunt.loadNpmTasks('grunt-postcss');
        grunt.loadNpmTasks('grunt-autoprefixer');
        //add browser sync
        //grunt.loadNpmTasks('grunt-browser-sync');
        grunt.registerTask('default', ['compass', 'postcss', 'concat', 'svgmin', 'svgstore', 'uglify', 'browserSync', 'watch']);

};
