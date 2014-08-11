module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    less: {
      app: {
        files: {
          'assets/app.min.css': 'assets/less/**.less'
        }
      }
    },

    cssmin: {
      css: {
        src: [
          'assets/styles/**.css',
          'style.css',
          'assets/app.min.css'
        ],
        dest: 'assets/main.min.css'
      }
    },

    coffee: {
      compile: {
        options: {
          bare: true,
          join: true
        },
        files: {
          'assets/main.min.js': ['assets/coffee/*.coffee']
        }
      }
    },

    watch: {
      less: {
        files: ['assets/less/*.less'],
        tasks: ['less']
      },
      coffee: {
        files: ['assets/coffee/*.coffee'],
        tasks: ['coffee']
      },
      prepare:{
        options: { spawn: false },
        files: ['assets/app.min.css', 'assets/main.min.css', 'assets/main.min.js'],
        tasks: ['cssmin', 'version', 'notify:ready']
      }
    },

    notify: {
      ready: {
        options: {
          title: 'Viagem Cultural',
          message: 'Theme files updated.'
        }
      }
    }

  });

  grunt.loadTasks('build/tasks');
  grunt.registerTask('default', ['less', 'cssmin', 'coffee', 'version']);
  grunt.loadNpmTasks('grunt-recess');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-notify');
  grunt.load
};