const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            colors:{
                primary : {
                    '900':'#21325b',
                    '800':'#293e70',
                    '700':'#365396',
                    '600':'#4468bb',
                    '500':'#6986c9',
                    '400':'#8fa4d6',
                    '300':'#b4c2e4',
                    '200':'#c7d2eb',
                    '100':'#ecf0f8',
                },
                info    : {
                   '900':'#337aff',
                    '800':'#377dff',
                    '700':'#4d8bff',
                    '600':'#669cff',
                    '500':'#80acff',
                    '400':'#99bdff',
                    '300':'#b3cdff',
                    '200':'#ccdeff',
                    '100':'#e6eeff'
                },
                danger  : {
                    '900':'#ed4572',
                    '800':'#ed4c78',
                    '700':'#ef5d84',
                    '600':'#f17495',
                    '500':'#f48ba7',
                    '400':'#f6a2b8',
                    '300':'#f8b9ca',
                    '200':'#fad1dc',
                    '100':'#fde8ed'
                },
                success : {
                    '900':'#3fd985',
                    '800':'#55dd92',
                    '700':'#6ae2a0',
                    '600':'#7fe6ad',
                    '500':'#95eabb',
                    '400':'#aaeec9',
                    '300':'#bff2d6',
                    '200':'#d4f7e4',
                    '100':'#eafbf1'
                }
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
