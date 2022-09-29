const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/laravel/jetstream/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
      },
    },
    colors: {
      black: "#000000",
      white: "#ffffff",
      primary: "#36393f",
      primaryLight: "#CFD8DC",
      fundo: "#1d1f22",
      secondaryLight: "#FFE9CA",
      third: "#383646",
      thirdLight: "#B5B2BF",
      red: colors.red,
      blue: colors.blue,
    },
  },
  variants: {
    opacity: ["responsive", "hover", "focus", "disabled"],
    cursor: ["hover"],
  },

  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("tailwindcss"),
  ],
};
