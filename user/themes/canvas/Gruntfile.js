// Load Grunt
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Tasks
        sass: { // Begin Sass Plugin
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: [{
                    expand: true,
                    cwd: 'scss',
                    src: ['*.scss'],
                    dest: 'css/compiled',
                    ext: '.css'
                },
                {
                    expand: true,
                    cwd: 'scss/shortcodes',
                    src: ['*.scss'],
                    dest: 'css/compiled/shortcodes',
                    ext: '.css'
                }]
            }
        },
        watch: { // Compile everything into one task with Watch Plugin
            css: {
                files: ['scss/*.scss', 'scss/shortcodes/*.scss'],
                tasks: ['sass', 'cssmin']
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'css/compiled',
                    dest: 'css',
                    src: ['*.css'],
                    ext: '.min.css'
                },{
                    expand: true,
                    cwd: 'css/compiled/shortcodes',
                    dest: 'css/shortcodes',
                    src: ['*.css'],
                    ext: '.min.css'
                }]
            }
        }
    });
    // Load Grunt plugins
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Register Grunt tasks
    grunt.registerTask('compile', ['sass', 'cssmin']);
    grunt.registerTask('default', ['watch']);
};