
module.exports = function(grunt) {

  grunt.initConfig({
      // directories
      dirs:{
            sass: "sass/",
            jsPlugins: "js/plugins/",
            jsScripts: "js/scripts/",
            jsBuild: "js/build/",
            svgs: "svgs/",
            cssBuild: "css/",
            svgsBuild: "svgs/"
        },
      // concat - combine list of files into one in js/build
      concat:{
            plugins: {
                files: [
                    {src: [
                        '<%= dirs.jsPlugins %>*.js'
                    ],
                    dest: '<%= dirs.jsBuild %>plugins.js', separator: ';'},
                ],
            },
            scripts: {
                files: [
                    {src: [
                        '<%= dirs.jsScripts %>*.js'
                    ],
                    dest: '<%= dirs.jsBuild %>scripts.js', separator: ';'},
                ],
            },
        },

        // uglify -- combine and minimize source files into one

        uglify:{
            min: {
                files: [
                    {src: [
                        '<%= dirs.jsBuild %>plugins.js',
                        '<%= dirs.jsBuild %>scripts.js',

                    ],
                    dest: '<%= dirs.jsBuild %>js.min.js'},
                ],
            },
        },

      // sass
      sass: {
          dist: {
            files: {
              '<%= dirs.cssBuild %>style.css': '<%= dirs.sass %>style.scss'
            }
          }
    },

    // svg stuff
    svgstore: {
          options: {
            prefix : 'shape-', // This will prefix each <g> ID
            formatting:{
                indetnt_size: 2
            },
            svg: { // will add and overide the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
                viewBox : '0 0 100 100',
                xmlns: 'http://www.w3.org/2000/svg',
                class:'svg-sprite' // <-- This line is new
            },
            cleanup: ['fill', 'style']
          },
          default : {
              files: {
                '<%= dirs.layouts %>svg-defs.svg': ['<%= dirs.svgs %>*.svg'],
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
    //postcss
    postcss: {
        options: {
            processors: [
            require('autoprefixer')({browsers: ['last 4 versions']}),
            require('cssnano')()
            ]
        },
        dist: {
            src: '<%= dirs.cssBuild %>style.css',
            dest: '<%= dirs.cssBuild %>style-min.css'
        }
    },

    //browserSync
    browserSync: {
        dev: {
            options: {
                proxy: 'https://screens8.prod.dd:8443/',
                background: true
            }
        }
    },

    //reload
    bsReload: {
        css: {
            reload: true
        },
        scripts: {
            reload: true
        },
        svg: {
            reload: true
        }
    },

    //watch
    watch: {
        options: {
            spawn: false
        },
        css: {
            files: ['sass/**/*.scss'],
            tasks: ['sass','postcss', 'bsReload:css']
        },
        scripts: {
            files: ['<%= dirs.jsBuild %>*.js', '<%= dirs.jsScripts %>*.js',  '<%= dirs.jsPlugins %>*.js'],
            tasks: ['concat', 'uglify', 'bsReload:scripts']
        },
        svg: {
            files: ["<%= dirs.svgs %>*.svg"],
            tasks: ["svgmin", "svgstore", "bsReload:svg"]
        }
    }


  });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-svgmin');
    grunt.loadNpmTasks('grunt-svgstore');


    grunt.registerTask('css', ['sass', 'postcss']);
    grunt.registerTask('svg', ['svgmin', 'svgstore']);
    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'postcss', 'svgmin', 'svgstore', 'browserSync', 'watch']);
};
