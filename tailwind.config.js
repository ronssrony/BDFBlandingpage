/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/components/**/*.{js,vue,ts}", "./src/composables/**/*.{js,vue,ts}", "./src/layouts/**/*.vue", "./src/pages/**/*.vue", "./src/plugins/**/*.{js,ts}", "./nuxt.config.{js,ts}", "./app.vue", "./error.vue",],
    theme: {
        extend: {
            colors: {
                'primary': '#E66808',
                'secondary': '#002B79',
            },
            fontFamily: {
                'sans': ['Inter', 'sans-serif'],
                sf: ['SF UI Display', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
                hs: ['Hind Siliguri', 'sans-serif'],
            },
            fontWeight: {
                'light': 300,
                'normal': 400,
                'medium': 500,
                'semibold': 600,
                'bold': 700,
                'extrabold': 800,
                'black': 900,
            }
        },
    },
    plugins: []
}
