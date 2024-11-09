import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
        borderRadius: {
            DEFAULT: "0", // set all default border radius to 0
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    ...require("daisyui/src/theming/themes")["corporate"],
                    primary: "#7BDED3",
                    "primary-content": "#297E77",
                    secondary: "#90E3F4",
                    "secondary-content": "#408394",
                    accent: "#7FD7CD",
                    "accent-content": "#297E77",
                    neutral: "#1e2320",
                    "neutral-content": "#cdcecd",
                    "base-100": "#EFF7F6", // Background color in schema
                    "base-200": "#dbd9de", // Slightly darker for base-200
                    "base-300": "#bbbabd", // Slightly darker for base-300
                    "base-content": "#000000", // Foreground color in schema
                    info: "#7EE7FC",
                    "info-content": "#053B48",
                    success: "#17C964",
                    "success-content": "#052814",
                    warning: "#FFC107",
                    "warning-content": "#554D02",
                    error: "#F31260",
                    "error-content": "#310413",
                },
            },
        ],
    },

    plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
