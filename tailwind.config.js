const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/preline/dist/*.js',
    ],

    // enable dark mode via class strategy
    darkMode: 'class',

    theme: {
        fontSize: {
            xs: '0.6rem',
            xm: '0.7rem',
            sm: '0.8rem',
            base: '0.9rem',
            xl: '1.3rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',
        },
        fontWeight: {
            hairline: 100,
            thin: 200,
            light: 300,
            normal: 400,
            medium: 500,
            semibold: 600,
            bold: 800,
            extrabold: 800,
            black: 900,
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('preline/plugin'),
        require('tailwindcss-debug-screens'),
    ],
};
