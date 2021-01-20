const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
    ],
  },
  theme: {
    colors: {
      current: defaultTheme.colors.current,
      transparent: defaultTheme.colors.transparent,
      white: defaultTheme.colors.white,
      black: defaultTheme.colors.black,
      gold: {
          300: '#DBC779',
          400: '#C2AF6B',
          500: '#A9995D',
          600: '#8F814F',
      },
      onyx: {
          300: '#4A5769',
          400: '#38424F',
          500: '#262D36',
      },
      silver: {
          500: '#EDEFF1',
          600: '#D5D7D9',
          700: '#BCBEBF',
          800: '#8A8B8C',
      },
      gray: {
          300: '#D6E0EB',
          400: '#BFC8D1',
          500: '#A7AFB7',
          600: '#90979E',
          700: '#797F85',
          800: '#62666B',
      },
      orange: {
          300: '#FF925C',
          400: '#FF8143',
          500: '#E5743C',
          600: '#CC6735',
          700: '#B25A2F',
          800: '#804121',
      },
      green: {
          300: '#9BC297',
          400: '#77A872',
          500: '#658F61',
          600: '#537550',
          700: '#415C3E',
          800: '#2F422D',
      },
      blue: {
          300: '#7ABBE5',
          400: '#1B8CD6',
          500: '#187BBC',
          600: '#156BA3',
          700: '#125A8A',
          800: '#0D4163',
      },
    },
    extend: {
      fontFamily: {
        sans: ['Barlow', ...defaultTheme.fontFamily.sans],
        display: ['Archivo', ...defaultTheme.fontFamily.sans],
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.silver.500'),
            a: {
              color: theme('colors.gold.300'),
            },
            strong: {
              color: theme('colors.white'),
            },
            code: {
              color: theme('colors.green.300'),
            },
            pre: {
              backgroundColor: theme('colors.black.400'),
            },
            img: {
              borderRadius: theme('borderRadius.lg'),
              boxShadow: theme('boxShadow.lg'),
            },
            blockquote: {
              color: theme('colors.white'),
              borderColor: theme('colors.blue.300'),
            },
            'h1, h2, h3, h4, h5, h6': {
              color: theme('colors.blue.300'),
            },
          },
        },
      }),
    },
  },
  variants: {},
  plugins: [require('@tailwindcss/typography')],
}
