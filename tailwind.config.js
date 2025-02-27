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
                    primary: "#FFDE17",
                    secondary: "#1A4984",
                    accent: "#edd089",
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
                    50: "#f2f7fd",
                    100: "#e5edf9",
                    200: "#c4d9f3",
                    300: "#90bae9",
                    400: "#5597db",
                    500: "#2f79c8",
                    600: "#205ea9",
                    700: "#1a4984",
                    800: "#1a4172",
                    900: "#1b385f",
                    950: "#12243f",
                },
                icran2: {
                    50: "#fefde8",
                    100: "#fffec2",
                    200: "#fff987",
                    300: "#ffee43",
                    400: "#ffde17",
                    500: "#efc403",
                    600: "#ce9800",
                    700: "#a46c04",
                    800: "#88540b",
                    900: "#734510",
                    950: "#432405",
                },
                icran: {
                    50: "#f6f6f6",
                    100: "#e7e7e7",
                    200: "#d1d1d1",
                    300: "#b0b0b0",
                    400: "#888888",
                    500: "#6d6d6d",
                    600: "#5d5d5d",
                    700: "#4f4f4f",
                    800: "#454545",
                    900: "#3d3d3d",
                    950: "#232323",
                },
            },
        },
    },
};
