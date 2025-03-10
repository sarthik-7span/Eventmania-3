// tailwind.config.js
/** @type {import('tailwindcss').Config} */
export default {
    content: ["*"],
    theme: {
        extend: {
            fontSize: {
                xxs: "10px"
            },
            height: {
                '5.5': '22px',
            },
            width: {
                '5.5': '22px',
            },
            fontFamily: {
                roboto: ["Roboto", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"]
            },
            colors: {
                ...colors,
                rainbowgray: "#171C21",
                rainbowgrayDark: "#0F1419",
                rainbow_text_gray: "#cddce8",
                rainbow_darkblue: "#006398",
                rainbow_royalblue: "#003351",
                rainbow_blue: "#93CCFF",
                lightgray: "#f4f4f4",
                lightgreen: "#00A200",
                lightred: "#EA334B",
                watergreen: "#57BEB5",
                danger: "#900B09",
                danger200: "#C00F0C",
                danger300: "#FEE9E7",
                gray1: "#111928",
                gray100: "#d9d9d9",
                gray150: "#F7F8F9",
                gray200: "#757575",
                gray250: "#64748B",
                gray300: "#767680",
                gray400: "#e3e3e3",
                gray500: "#b3b3b3",
                gray600: "#767676",
                gray700: "#cfc4c5",
                gray800: "#5e5e5e",
                gray900: "#F5F5F5",
                blue200: "#2d68f8",
                primaryLight: "#2C2C2C",
                primaryDark: "#1e1e1e",
                primary: {
                    50: "#F2F2F2",
                    100: "#5d5f5f",
                    300: "#808080",
                    400: "#4A4A4A",
                    500: "#d0021b",
                    600: "#000000",
                    700: "#333333",
                    800: "#1A1A1A",
                    900: "#0D0D0D",
                },
                secondary: {
                    400: "#4A4A4A",
                    500: "#009f10",
                    600: "#979797",
                    700: "#333333",
                    800: "#131313",
                    900: "#4C4546"
                },
            },
            gridTemplateColumns: {
                5: "repeat(5, minmax(0, 1fr))",
            },
        },
    },
    plugins: [],
};
