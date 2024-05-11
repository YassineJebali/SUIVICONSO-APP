/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {
    extend: {colors: {
      'custom-color-seasalt': '#FAFAFA', // Add your custom color here
    }},
  },
  plugins: [],
}

