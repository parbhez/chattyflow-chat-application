import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'primary': '#8976F3',
                'primary-dark': '#4A2BFA',
                'primary-light': '#b19cff',
                'secondery': '#72D1DC',
                'primary-gray': '#F5F7FB',
                'body': '#F5F7FB',
                'bord': '#CDCDCD',
                'text-light': '#828FA0',
              },
        },
    },

    plugins: [forms],
};
