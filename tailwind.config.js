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
            colors: {
                oYellow: "#F7B538",
                oLightGray: "#ADB5BD",
                oWhite: "#F8F9FA",
                oBlack: "#212529",
                oBlack1: "#343A40",
            },
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                md: "1.25rem",
            },
        },
    },
    plugins: [],
};
