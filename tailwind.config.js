import themeConfig from './tailwind.theme.config'

module.exports = {
    content: [
        "./theme/**/*.{php,twig,html,js}",
        "./theme/views/**/*.{php,twig,html,js}",
        "./theme/src/js/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: themeConfig.colors,
            fontSize: themeConfig.fontSize,
            fontFamily: themeConfig.fontFamily,
            container: themeConfig.container,
            backgroundSize: themeConfig.backgroundSize,
            backgroundPosition: themeConfig.backgroundPosition,
            gridTemplateRows: themeConfig.gridTemplateRows,
            gridRowEnd: themeConfig.gridRowEnd,
            transitionTimingFunction: themeConfig.transitionTimingFunction,
            typography: ({ theme }) => ({
                blue: {
                    css: {
                        '--tw-prose-body': theme('colors.black[300]'),
                        '--tw-prose-headings': theme('colors.black[500]'),
                        '--tw-prose-lead': theme('colors.blue[700]'),
                        '--tw-prose-links': theme('colors.blue[500]'),
                        '--tw-prose-bold': theme('colors.black[500]'),
                        '--tw-prose-counters': theme('colors.blue[600]'),
                        '--tw-prose-bullets': theme('colors.blue[500]'),
                        '--tw-prose-hr': theme('colors.blue[100]'),
                        '--tw-prose-quotes': theme('colors.black[300]'),
                        '--tw-prose-quote-borders': theme('colors.blue[500]'),
                        '--tw-prose-captions': theme('colors.black[300]'),
                        '--tw-prose-code': theme('colors.blue[900]'),
                        '--tw-prose-pre-code': theme('colors.blue[100]'),
                        '--tw-prose-pre-bg': theme('colors.blue[900]'),
                        '--tw-prose-th-borders': theme('colors.blue[300]'),
                        '--tw-prose-td-borders': theme('colors.blue[200]'),
                        '--tw-prose-invert-body': theme('colors.blue[200]'),
                        '--tw-prose-invert-headings': theme('colors.white'),
                        '--tw-prose-invert-lead': theme('colors.blue[300]'),
                        '--tw-prose-invert-links': theme('colors.white'),
                        '--tw-prose-invert-bold': theme('colors.white'),
                        '--tw-prose-invert-counters': theme('colors.blue[400]'),
                        '--tw-prose-invert-bullets': theme('colors.blue[600]'),
                        '--tw-prose-invert-hr': theme('colors.blue[700]'),
                        '--tw-prose-invert-quotes': theme('colors.blue[100]'),
                        '--tw-prose-invert-quote-borders': theme('colors.blue[700]'),
                        '--tw-prose-invert-captions': theme('colors.blue[400]'),
                        '--tw-prose-invert-code': theme('colors.white'),
                        '--tw-prose-invert-pre-code': theme('colors.blue[300]'),
                        '--tw-prose-invert-pre-bg': 'rgb(0 0 0 / 50%)',
                        '--tw-prose-invert-th-borders': theme('colors.blue[600]'),
                        '--tw-prose-invert-td-borders': theme('colors.blue[700]'),
                    },
                },
            }),
        },
    },
    plugins: [
        require('flowbite/plugin'),
        function ({ addVariant }) {
            addVariant('child', '& > *');
            addVariant('child-hover', '& > *:hover');
        },
        // require('@tailwindcss/forms')
        require('@tailwindcss/typography')
    ],
    safelist: [
        'navbar.active',
    ]
}