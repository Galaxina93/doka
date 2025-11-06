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
                primary: '#C72026',        // kräftiges Rot ähnlich dem im Logo
                'primary-dark': '#9A1A1F', // dunkleres Rot für Hover/Schattierung
                'primary-light': '#E05A5F' // helleres Rot für Akzente
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

}
