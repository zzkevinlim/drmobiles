module.exports = {
  corePlugins: {
    preflight: true,
  },
  important: true,
  mode: 'jit',
  purge: {
    enabled: true,
    content: [
      './assets/js/*.{js,vue}',
      './assets/js/**/*.{js,vue}',
      './assets/sass/*.scss',
      './assets/sass/**/*.scss',
      './*.php',
      './**/*.php',
    ]
  },
  darkMode: false,
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1890px',
    },
    extend: {
      fontFamily: {
        'roboto' : ['Roboto', 'sans-serif'],
        'montserrat' : ['Montserrat', 'sans-serif'],
        'sarpanch' : ['Sarpanch', 'sans-serif'],
      },
      colors: {
        'dark-blue': {
          DEFAULT: '#0404C6',
          '50': '#B2B2FD',
          '100': '#9999FD',
          '200': '#6767FC',
          '300': '#3535FB',
          '400': '#0505F8',
          '500': '#0404C6',
          '600': '#030394',
          '700': '#020262',
          '800': '#010130',
          '900': '#000000'
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('@tailwindcss/line-clamp'),
  ],
};
