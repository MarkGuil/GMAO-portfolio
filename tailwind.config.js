/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{php,js}"],
  theme: {
    extend: {
      boxShadow: {
        'inner-2': 'inset 0 0 40px 28px white',
      },
      spacing: {
        '85': '21rem',
      },
      scale: {
        '115': '1.15',
        '120': '1.20',
        '200': '2.00',
        '250': '2.50',
        '300': '3.00',
      },
      fontFamily: {
        'allura': ['Allura', 'cursive'],
        'sacramento': ['Sacramento', 'cursive'],
        'crimson': ['Crimson Text', 'serif'],
      },
      screens: {
        '3xl': '1920px',
        '3k': '2130px',
        '4k': '2560px',
      },
      colors: {
        'dark-blue': '#0205a1',
        'dark-bluer': '#010488',
      },
      backgroundImage: {
        'home-small': "linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('images/bglarge/bgsmall.jpg')",
        'home-large': "linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('images/background/3bg.jpg')",
        'about-large': "linear-gradient(rgba(6, 78, 59, 0.4), rgba(6, 78, 59, 0.4)), url('images/bg.png')",
        'skill-large': "linear-gradient(rgba(6, 78, 59, 0.8), rgba(6, 78, 59, 0.8)), url('images/skills-bg/skill-bg-1-min2.jpg')",
      },
      animation: {
        'zoom-in': 'zoom .8s ease-in',
        'slow-bounce': 'slowbounce 3s ease-in-out infinite alternate',
        'nav-bounce': 'navbounce .5s ease-in-out',
        'wave1': 'wave1 10s linear -2s infinite',
        'wave2': 'wave2 8s linear -2s infinite',
        'wave3': 'wave2 6s linear -2s infinite',
        'stroke-dashoffset': 'strokeDashoffset 1.1s ease-out, fill 1.1s',
      },
      keyframes: {
        zoom: {
          '0%': { 
            opacity: 0,
            transform: 'scale(1.2)' 
          },
          '100%': { 
            opacity: 1,
            transform: 'scale(1)' 
          },
        },
        slowbounce: {
          '0%': {
            transform: 'translateY(-5%)'
          },
          '100%': {
            transform: 'translateY(5)'
          },
        },
        navbounce: {
          '0%': {
            transform: 'scaleY(0)'
          },
          '80%': {
            transform: 'scaleY(1.1)'
          },
          '100%': {
            transform: 'scaleY(1)'
          },
        },
        wave1: {
          '0%': {
            transform: 'translate(85px, 0%)'
          },
          '100%': {
            transform: 'translate(-90px, 0%)'
          },
        },
        wave2: {
          '0%': {
            transform: 'translate(-90px, 0%)'
          },
          '100%': {
            transform: 'translate(85px, 0%)'
          },
        },
        strokeDashoffset: {
          '0%': {
            'stroke-dasharray': '850',
            'stroke-dashoffset': '-850'
          },
          '100%': {
            'stroke-dasharray': '850',
            'stroke-dashoffset': '0'
          },
        }
      },
    },
    maxWidth: {
      'max-w-8xl': '1320px',
    },
  },
  fontSize: {
    '10xl': '10rem'['10rem', {
        lineHeight: '1',
      }],
      '11xl': '11rem',
  },
  variants: {
    color: ['hover', 'active'],
    visibility: ['hover', 'active']
  },
  plugins: [],
}