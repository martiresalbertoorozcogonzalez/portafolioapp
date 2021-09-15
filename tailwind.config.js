const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'wave-pattern': 'url(/img/wave-white.png)',
                'wave-pattern-dots': 'url(/img/pattern-white-dots.png)',
                'wave-characters-red': 'url(/img/pattern-characters-red.png)',
                'character-mario': 'url(/img/character-l.png)',
                'wave-pink': 'url(/img/wave-pink.png)',
                'yellow-dots': 'url(/img/pattern-yellow-dots.png)'
            },
            screens: {
                'xsm': '320px'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
