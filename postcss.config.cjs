const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const purgecss = require('@fullhuman/postcss-purgecss').default;

module.exports = {
    plugins: [
        autoprefixer(),
        ...(process.env.NODE_ENV === 'production'
            ? [
                purgecss({
                    content: [
                        './resources/views/**/*.blade.php',
                        './resources/js/**/*.vue',
                        './resources/**/*.html'
                    ],
                    safelist: {
                        standard: [/^btn-/, /^text-/, /^bg-/, /^fa-/],
                        deep: [/^nav-/, /^dropdown-/, /^modal-/],
                        greedy: [/^alert-/, /^card-/, /^carousel-/]
                    },
                    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
                }),
                cssnano({ preset: 'default' }) // Minification CSS
            ]
            : [])
    ]
};
