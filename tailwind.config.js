const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss");

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'josefin': ['Josefin Sans']
            },
            borderWidth: {
                '5': '5px'
            },
            margin: {
                '-6.5': '-1.625rem',
                '-380px': '-21rem',
                '500px': '30rem',
                '-750px': '-42rem'
            },
            spacing: {
                'big': '68rem',
                'small': '27rem',
                'block': '26rem',
            }
        },
        /*Disable default colors*/
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: {
                light: 'rgba(237,230,224,0.83)',
                DEFAULT: '#FFFFFF'
            },
            gray: colors.trueGray,
            indigo: colors.indigo,
            yellow: colors.amber,
            'black': {
                DEFAULT: '#444243'
            },
            'brown': {
                light: 'rgba(130,85,80,0.57)',
                DEFAULT: '#825550'
            },
            'red': {
                light: 'rgba(247,89,71,0.57)',
                DEFAULT: '#F75947'
            },
            'lightbrown': {
                light: 'rgba(237, 230, 224, 0.26)',
                DEFAULT: '#EDE6E0'
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
