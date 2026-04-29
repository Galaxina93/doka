/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    darkMode: 'class',

    theme: {
        extend: {
            animation: {
                'fade-in': 'fadeIn 0.8s ease-out forwards',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: 0 },
                    '100%': { opacity: 1 },
                },
            },
            colors: {
                primary: '#0C92F5',
                'primary-dark': '#097ACD',
                'primary-light': '#3CACF7',
                'accent-blue': '#00509B'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

}
