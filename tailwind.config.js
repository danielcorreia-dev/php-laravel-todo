/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Inter", "ui-sans-serif", "system-ui"],
        },
        extend: {},
    },
    plugins: [],
};
