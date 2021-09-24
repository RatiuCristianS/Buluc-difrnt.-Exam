const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: {
      enabled: true,
      content: ['*.php'],
      safelist:[
        'change'
      ]
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
      screens: {
        
        
        'pc': '1024px',
        // => @media (max-width: 1023px) { ... }

        'tablet': {'max': '1023px'},
        // => @media (max-width: 1023px) { ... }
  
        'phone': {'max': '767px'},
        // => @media (max-width: 767px) { ... }
        'sm': '200px',
        // => @media (min-width: 640px) { ... }
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },
      extend: {
        fontFamily: {
          sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
          myfont:['DM Sans'],
          apple:['Homemade Apple'],
        },
      },
    },
    variants: {},
    plugins: [],
  }