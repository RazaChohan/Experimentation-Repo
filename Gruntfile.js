module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
gitadd: {
    task: {
      options: {
        force: true
      },
      files: {
        src: ['*']
      }
    }
  },
   shell: {
        options: {
            stderr: false
        },
        target: {
            command: 'git commit'
        }
    },
gitcommit: {
    your_target: {
      options: {
        cwd: ""
      },
      files: [
        {
          src: ["*"],
          expand: true,
          cwd: ""
        }
      ]
    }
  },
  gitpull: {
    your_target: {
      options: {

      }
    }
  },
gitpush: {
    your_target: {
      options: {
        // Target-specific options go here.
      }
    }
  },
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-git');
   grunt.loadNpmTasks('grunt-shell');

  // Default task(s).
    grunt.registerTask('default',['git']);
   grunt.registerTask('git',['gitadd','shell','gitpull','gitpush']);


};

