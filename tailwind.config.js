/** @type {import('tailwindcss').Config} */
export default  {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/preline/dist/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily:{
        'rock-salt': ['"rock-salt"', 'cursive'],
        'montserrat': ['"Montserrat"', 'sans-serif'],
        'sans': ['Poppins', 'sans-serif'],
      },
      textAlign:{
        'justify':'justify',
      },
      color:{
        purple: {
          800: '#5B21B6',
          200: '#D6BCFA',
      },
        yellow:{
          400: '#FBBF24',
          500: '#F59E0B',
        },
        'custom-purple': '#190E36',
      },
      animation: {
        'extract': 'extract 0.5s ease-out'
      },
      keyframes: {
        extract: {
          '0%': { opacity: 0, transform: 'scale(0.9)' },
          '100%': { opacity: 1, transform: 'scale(1)' }
        }
      },
    },
  },
  plugins: [
    require('preline/plugin'),
    require('flowbite/plugin')
  ],
}
