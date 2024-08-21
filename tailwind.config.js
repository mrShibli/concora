/** @type {import('tailwindcss').Config} */

module.exports = {
  // content: ['*'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      // 'Mobile': '0px',
      'Tablet': '640px', 
      'Laptop': '1280px', 
      // 'Laptop': '1024px', 
      'Desktop': '1400px', 
    },
    extend: {

      colors: {
        'Primary-c': '#4B49AC', 
        'White-c': '#ffffff',
        'Black-c': '#000000',
        'Indicates': '#f00b0b',
        'Dull-c': '#E0E3E8',
        'Low-dull-c': '#f7f4f4'

      },

    },
  },
  plugins: [],
}

