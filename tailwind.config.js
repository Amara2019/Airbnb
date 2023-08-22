/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ["./src/**/*.{html,js}", "./public/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: '#214539',
        secondary: '#5B7B7A',
        ancent: '#5B7B7A',
        "color-light": '#E0F2E9',
      },
    },
  },
  plugins: [],
}
