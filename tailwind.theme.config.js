const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
   "container": {
      "center": true,
   },
   "colors": {
      "blue": {
         "100": "#d4e3f7",
         "200": "#a5c5ee",
         "300": "#79a9e6",
         "400": "#4a8ade",
         "500": "#1f6ed6",
         "600": "#1857aa",
         "700": "#124381",
         "800": "#0c2c55",
         "900": "#06172d"
      },
      "white": {
         "100": "#ffffff",
         "200": "#ffffff",
         "300": "#ffffff",
         "400": "#ffffff",
         "500": "#ffffff",
         "600": "#ffffff",
         "700": "#999999",
         "800": "#666666",
         "900": "#333333"
      },
      "black": {
         "100": "#cccccc",
         "200": "#999999",
         "300": "#666666",
         "400": "#333333",
         "500": "#000000",
         "600": "#000000",
         "700": "#000000",
         "800": "#000000",
         "900": "#000000"
      },
      "purple": {
         "100": "#ccd2d9",
         "200": "#99a4b3",
         "300": "#66778c",
         "400": "#334966",
         "500": "#001c40",
         "600": "#001633",
         "700": "#001126",
         "800": "#06172d",
         "900": "#00060d"
      }
   },
   "fontSize": {
      "xs": "0.625rem",
      "sm": "0.8125rem",
      "base": "1rem",
      "md": "1.25rem",
      "lg": "1.562rem",
      "xl": "1.938rem",
      "2xl": "2.438rem",
      "3xl": "3.062rem",
      "4xl": "3.812rem",
      "5xl": "4.750rem",
      "6xl": "5.938rem",
      "7xl": "7.438rem",
      "8xl": "9.312rem",
   },
   "fontFamily": {
      "sans": ['Inter', ...defaultTheme.fontFamily.sans],
   },
   "gridTemplateRows": {
      "7": "repeat(7, minmax(0, 1fr))"
   },
   "gridRowEnd": {
      "8": "8"
   }
}
