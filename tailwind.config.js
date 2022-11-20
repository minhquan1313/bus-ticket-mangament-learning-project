/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["SVN-Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                md: "1.25rem",
            },
        },
    },
    plugins: [],
};
