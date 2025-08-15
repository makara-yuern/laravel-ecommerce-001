import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            width: {
              'p-200': '200%',
            },
        },
    },
    plugins: [forms],
};
