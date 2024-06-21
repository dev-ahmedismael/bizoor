/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            container: {
                center: true,
            },
            colors: {
                primary: "#1f4e3d",
                secondary: "#e9f1ee",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
