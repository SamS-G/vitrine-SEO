import postcssImport from 'postcss-import';
import postcssPresetEnv from 'postcss-preset-env';
import autoprefixer from 'autoprefixer';
import postcssCsso from 'postcss-csso';
import purgecssModule from '@fullhuman/postcss-purgecss';

// Vérifier que purgecss est bien une fonction
const purgecss = purgecssModule.default || purgecssModule;

export default {
    plugins: [
        postcssImport(),
        postcssPresetEnv({ stage: 1 }),
        autoprefixer(),
        postcssCsso(),
        process.env.NODE_ENV === 'production'
            ? purgecss({
                content: [
                    './resources/views/**/*.blade.php',
                    './resources/css/**/*.css',
                    './resources/js/**/*.js',
                ],
                safelist: {
                    standard: [
                        'container', 'row', 'col', 'navbar', 'nav', 'btn',
                        'alert', 'card', 'd-flex', 'd-grid', 'text-center',
                        'text-muted'
                    ],
                    greedy: [
                        // ✅ Classes FontAwesome utilisées
                        /fa-(facebook|square-facebook|instagram|envelope-open-text|mobile-screen-button|envelope|phone|plus|arrow-right|beat|at|flip)/
                    ]
                }
            })
            : false
    ]
};
