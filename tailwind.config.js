/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}",
  "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ["Roboto", "sans-serif"],
        'jacquard12': ["Jacquard 12", 'system-ui'],
        'oswald': ["Oswald", "sans-serif"],
        'hankenGrotesk': ["Hanken Grotesk", "sans-serif"],
        'hk_Grotesk': ["HK Grotesk", "sans-serif"],
       
      },
    
    },
  },
  plugins: [  
    require('flowbite/plugin'),

]
}

