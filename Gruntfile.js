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

  // Default task(s).
    grunt.registerTask('default',['git']);
   grunt.registerTask('git',['gitpush'],['gitadd'],['gitcommit']);


};

