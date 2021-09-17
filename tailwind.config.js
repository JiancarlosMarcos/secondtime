const { colors } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                transparent: 'transparent',
                current: 'currentColor',
                principal:'#131921',
                azulito:'#212529',
                secundario:'#ffc107',
                fondo:'#f2f2f2',
            },
        },
        container:{
            center: true,
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
