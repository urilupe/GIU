module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        transform:['responsive', 'hover', 'focus', 'group-hover'],
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }