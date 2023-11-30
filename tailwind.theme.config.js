const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
   "container": {
      "center": true,
   },
   "backgroundSize": {
      'size-200': '200% 200%',
   },
   "backgroundPosition": {
      'pos-0': '0% 0%',
      'pos-100': '100% 100%',
   },
   "colors": {
      "blue": {
         "50": '#F5F9FF',
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
   },
   "transitionTimingFunction": {
      "css": "ease",
      "css-in": "ease-in",
      "css-out": "ease-out",
      "css-in-out": "ease-in-out",
      "in-sine": "cubic-bezier(0.12, 0, 0.39, 0)",
      "out-sine": "cubic-bezier(0.61, 1, 0.88, 1)",
      "in-out-sine": "cubic-bezier(0.37, 0, 0.63, 1)",
      "in-quad": "cubic-bezier(0.11, 0, 0.5, 0)",
      "out-quad": "cubic-bezier(0.5, 1, 0.89, 1)",
      "in-out-quad": "cubic-bezier(0.45, 0, 0.55, 1)",
      "in-cubic": "cubic-bezier(0.32, 0, 0.67, 0)",
      "out-cubic": "cubic-bezier(0.33, 1, 0.68, 1)",
      "in-out-cubic": "cubic-bezier(0.65, 0, 0.35, 1)",
      "in-quart": "cubic-bezier(0.5, 0, 0.75, 0)",
      "out-quart": "cubic-bezier(0.25, 1, 0.5, 1)",
      "in-out-quart": "cubic-bezier(0.76, 0, 0.24, 1)",
      "in-quint": "cubic-bezier(0.64, 0, 0.78, 0)",
      "out-quint": "cubic-bezier(0.22, 1, 0.36, 1)",
      "in-out-quint": "cubic-bezier(0.83, 0, 0.17, 1)",
      "in-expo": "cubic-bezier(0.7, 0, 0.84, 0)",
      "out-expo": "cubic-bezier(0.16, 1, 0.3, 1)",
      "in-out-expo": "cubic-bezier(0.87, 0, 0.13, 1)",
      "in-circ": "cubic-bezier(0.55, 0, 1, 0.45)",
      "out-circ": "cubic-bezier(0, 0.55, 0.45, 1)",
      "in-out-circ": "cubic-bezier(0.85, 0, 0.15, 1)",
      "in-back": "cubic-bezier(0.36, 0, 0.66, -0.56)",
      "out-back": "cubic-bezier(0.34, 1.56, 0.64, 1)",
      "in-out-back": "cubic-bezier(0.68, -0.6, 0.32, 1.6)",
   }
}
