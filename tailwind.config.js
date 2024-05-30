import defaultTheme from 'tailwindcss/defaultTheme'
import typography from '@tailwindcss/typography'
import forms from '@tailwindcss/forms'

export default {
  content: ["./**/*.{html,njk,webc,md,svg}"],
  theme: {
    colors: {
      transparent: 'transparent',
      black: '#000',
      white: '#fff',
      gray: {
        50: '#EDEFF1',
        100: '#D5D7D9',
        200: '#BCBEBF',
        300: '#8A8B8C',
        400: '#6F859E',
        500: '#5D7085',
        600: '#4B5A6B',
        700: '#344151',
        800: '#1F2833',
        900: '#0F141A',
      },
      gold: {
        300: '#D9C393',
        400: '#DBC779',
        500: '#A9995D',
        600: '#8F814F',
        700: '#786C3F',
      },
      orange: {
        300: '#FF925C',
        400: '#FC8144',
        500: '#E5743C',
        600: '#F66335',
      },
      green: {
        300: '#90E6BD',
        400: '#72C69E',
        500: '#56AC83',
        600: '#349A69',
      },
      blue: {
        300: '#3AB1FF',
        400: '#269CEA',
        500: '#188EDB',
        600: '#0F76B9',
        700: '#0F71B3',
      },
      violet: {
        300: '#CFB8FF',
        400: '#B290F8',
        500: '#A27AF3',
        600: '#8659E8',
      },
    },
    extend: {
      fontFamily: {
        serif: ['Alegreya', ...defaultTheme.fontFamily.serif],
        sans: ['Barlow', ...defaultTheme.fontFamily.sans],
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.gray.700'),
            a: {
              color: theme('colors.blue.600'),
            },
            blockquote: {
              borderColor: theme('colors.orange.500'),
            },
            figcaption: {
              color: theme('colors.gray.500'),
            },
            dt: {
              fontFamily: [theme('fontFamily.serif')],
            }
          },
        },
      }),
    },
  },
  plugins: [typography, forms],
}
