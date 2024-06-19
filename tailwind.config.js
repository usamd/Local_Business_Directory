import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

// tailwind.config.js
module.exports = {
    content: [
      './resources/chat/index.blade.php',
      './resources/js/app.js',
      './resources/js/app.vue',
    ],
    theme: {
      extend: {
        colors: {
          'bg-primary': '#15202B',
          'bg-secondary': '#113D2C',
          'text-primary': '#00FF00',
        },
        fontFamily: {
          poppins: ['Poppins', 'sans-serif'],
        },
      },
    },
    plugins: [],
  };
  