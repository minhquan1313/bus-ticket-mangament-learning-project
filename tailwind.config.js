const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["SVN-Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                oYellow: "#F7B538",

                oRed: "#EE6055",

                oGreen: "#60D394",

                oLightGray: "#ADB5BD",

                oWhite: "#F8F9FA",

                oBlack: "#212529",
                oBlack1: "#343A40",
                oBlack2: "#495057",
                oBlack3: "#6C757D",
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

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
