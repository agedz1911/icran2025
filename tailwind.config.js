import preset from "./vendor/filament/support/tailwind.config.preset";
import daisyui from "daisyui";
export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    plugins: [daisyui],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#870808",
                    secondary: "#282561",
                    accent: "#d8aa58",
                    muted: "#8492a6 ",
                    neutral: "#e5e7eb",
                    info: "#0000ff",
                    success: "#00ff00",
                    warning: "#f2e900",
                    error: "#ff0000",
                },
            },
        ],
    },
    theme: {
        extend: {
            colors: {
                maroon: {
                    50: "#fff0f0",
                    100: "#ffdcdc",
                    200: "#ffbfbf",
                    300: "#ff9393",
                    400: "#ff5555",
                    500: "#ff2121",
                    600: "#ff0000",
                    700: "#d90000",
                    800: "#b30101",
                    900: "#870808",
                    950: "#510000",
                },
                icran: {
                    50: "#f1f3fd",
                    100: "#dfe3fa",
                    200: "#c6cef7",
                    300: "#9eaff2",
                    400: "#7185e9",
                    500: "#4f5ee2",
                    600: "#3a3fd6",
                    700: "#3331c4",
                    800: "#342e9f",
                    900: "#2b2a7e",
                    950: "#282561",
                },
                icran2: {
                    50: "#fcf3f9",
                    100: "#fae9f6",
                    200: "#f6d4ed",
                    300: "#f0b1dd",
                    400: "#e581c6",
                    500: "#d95bae",
                    600: "#c63c90",
                    700: "#ab2b75",
                    800: "#8e2661",
                    900: "#772453",
                    950: "#460f2e",
                },
            },
        },
    },
};
