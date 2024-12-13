import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
              'primary': '#0F0E20',
              'secondary': '#004236',
              'accent': '#23B930',
            },
            fontFamily: {
              'primary': ['Sporten Personal Use'],
              'secondary': ['Roboto']
            }
          },
    },
    plugins: [],
};
