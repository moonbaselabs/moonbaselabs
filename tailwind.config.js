import defaultTheme from 'tailwindcss/defaultTheme'
import typography from '@tailwindcss/typography'
import forms from '@tailwindcss/forms';

export default {
  content: ["./**/*.{html,njk,webc,svg}"],
  theme: {
    colors: {
      transparent: 'transparent',
      black: '#000',
      white: '#fff',
      gold: {
        300: '#DBC779',
        400: '#C2AF6B',
        500: '#A9995D',
        600: '#8F814F',
      },
      navy: {
        300: '#6F859E',
        400: '#5D7085',
        500: '#4B5A6B',
        600: '#344151',
      },
      onyx: {
        300: '#4A5769',
        400: '#38424F',
        500: '#262D36',
        600: '#1D232A',
        700: '#141A1F',
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
              '&:hover': {
                color: theme('colors.gold.400'),
              },
            },
            strong: {
              color: theme('colors.white'),
            },
            code: {
              color: theme('colors.green.300'),
            },
            pre: {
              color: theme('colors.green.300'),
              backgroundColor: theme('colors.onyx.600'),
            },
            img: {
              borderRadius: theme('borderRadius.lg'),
              boxShadow: theme('boxShadow.lg'),
            },
            blockquote: {
              color: theme('colors.white'),
              borderColor: theme('colors.blue.300'),
            },
            figcaption: {
              color: theme('colors.navy.300'),
            },
            'h1, h2, h3, h4, h5, h6': {
              color: theme('colors.blue.300'),
              fontFamily: [theme('fontFamily.display')],
            },
            'dt': {
              color: theme('colors.white'),
            }
          },
        },
      }),
    },
  },
  plugins: [typography, forms],
}