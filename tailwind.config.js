/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#3B82F6",
                secondary: "#8B5CF6",
                dark: "#050814",
            },
            fontFamily: {
                cairo: ["Cairo", "sans-serif"],
            },
        },
    },
    plugins: [],
}