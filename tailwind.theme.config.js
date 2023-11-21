const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
   "container": {
      "center": true,
   },
   "colors": {
      "orange": {
         "100": "#ffe7cf",
         "200": "#ffcfa0",
         "300": "#ffb870",
         "400": "#ffa041",
         "500": "#ff8811",
         "600": "#cc6d0e",
         "700": "#99520a",
         "800": "#663607",
         "900": "#331b03"
      },
      "white": {
         "100": "#ffffff",
         "200": "#ffffff",
         "300": "#ffffff",
         "400": "#ffffff",
         "500": "#ffffff",
         "600": "#cccccc",
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
         "100": "#d7d8df",
         "200": "#afb2c0",
         "300": "#888ba0",
         "400": "#606581",
         "500": "#383e61",
         "600": "#2d324e",
         "700": "#22253a",
         "800": "#161927",
         "900": "#0b0c13"
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
      "4xl": "3.812rem"
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
   // "borderRadius": {
   //    "none": "0",
   //    "xs": "0.125rem",
   //    "sm": "0.3125rem",
   //    "default": "0.5rem",
   //    "lg": "0.75rem",
   //    "xl": "3.125rem"
   // }
}
