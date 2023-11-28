/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    fontFamily: {
      iransans: ["IRANSansX"],
    },
    extend: {
      colors: {
        laundry: {
          50: "#f2f8fd",
          100: "#e3effb",
          200: "#c1dff6",
          300: "#8ac5ef",
          400: "#4ca7e4",
          500: "#3498db",
          600: "#176fb2",
          700: "#145990",
          800: "#144c78",
          900: "#164064",
          950: "#0f2942",
        },
      },
    },
  },
  plugins: [],
};
