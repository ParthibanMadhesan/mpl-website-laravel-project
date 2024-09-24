/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
        "orange":"bg-gray-700"
      },
      fontFamily:{
        "hanken-grotesk":["Hanken Grotesk","san-serif"]
      },
      fontSize:{
        "2xs":"0.625rem"  //10px=>10/16=>0.625
      }
    },
  },
  plugins: [],
}

