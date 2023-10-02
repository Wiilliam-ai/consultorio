/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'fondo-home':"url('/public/img/icons/fondoHome.jpg')"
      }
    },
  },
  plugins: [],
}
