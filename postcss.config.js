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
                    './resources/css/**/*.css'
                ],
                safelist: {
                    standard: [
                        'container', 'row', 'col', 'navbar', 'nav', 'btn',
                        'alert', 'card', 'd-flex', 'd-grid', 'text-center',
                        'text-muted', 'bg-primary', 'text-white'
                    ],
                    deep: [/fa-/, /col-/] // Garde Bootstrap Grid et FontAwesome
                }
            })
            : false
    ]
};
