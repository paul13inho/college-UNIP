/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                "w-screen": "400px",
            },
            height: {
                "h-screen": "700px",
            }
        },
    },
    plugins: [],
}
