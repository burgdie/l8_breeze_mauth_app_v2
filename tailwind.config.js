const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        color_teal_light: "#9bcfb8",
        color_teal_med: "#40686a",
        color_teal_dark: "#072a24",
      },
    },
  },

  plugins: [require("@tailwindcss/forms")],

  // purge: [
  //   "./storage/framework/views/*.php",
  //   "./resources/**/*.blade.php",
  //   "./resources/**/*.js",
  //   "./resources/**/*.vue",
  // ],
};
