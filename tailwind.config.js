import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// tailwind.config.js
module.exports = {
    content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './resources/js/**/*.vue',
    ],


    theme: {
      extend: {
        fontFamily: {
          poppins: ['Poppins', 'sans-serif'],
        },
      },
    },
    plugins: [forms],
  };
  