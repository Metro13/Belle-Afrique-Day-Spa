module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}
