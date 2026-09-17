import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                // Body & UI bawaan menggunakan Plus Jakarta Sans
                sans: ['"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],

                // Class khusus font-heading untuk Poppins
                heading: ['"Poppins"', "sans-serif"],
            },
        },
    },

    plugins: [forms],
};
