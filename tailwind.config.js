import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            stroke: (theme) => ({
                custom: theme("colors.black"),
                strokeWithe: "#ffffff",
                strokeAzul: "#2E609D",
            }),
            fill: (theme) => ({
                fillWhite: "#FFFFFF",
                fillGrisStrong: "#575756",
                fillGrisSuave: "#565555",
                fillVerde: "#289A7B",
                fillAzul: "#007FC8",
            }),
            fontWeight: {
                medium: "500",
                regular: "400",
                semibold: "600",
            },
            keyframes: {
                FadeInUp: {
                  "0%": { transform: "translateY(15px)", opacity: "0" },
                  "100%": { transform: "translateY(0px)", opacity: "1" },
                },
            },
            animation: {
                fade: "FadeInUp 700ms ease 1 forwards",
            },
            boxShadow: {
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.08), 0 1px 2px 0 rgba(0, 0, 0, 0.02)",
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.02)",
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.01)",
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.01)",
            },
            outline: {
                blue: "2px solid rgba(0, 112, 244, 0.5)",
            },
            fontFamily: {
                helveticaBold: ["helveticaBold", "sans-serif"],
                helveticaMedium: ["helveticaMedium", "sans-serif"],
                helveticaRegular: ["helveticaRegular", "sans-serif"],
                helveticaLight: ["helveticaLight", "sans-serif"],
            },
            fontSize: {
                xs: ["0.75rem", { lineHeight: "1.5" }],
                sm: ["0.875rem", { lineHeight: "1.5715" }],
                base: ["1rem", { lineHeight: "1.5", letterSpacing: "-0.01em" }],
                lg: [
                    "1.125rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                xl: [
                    "1.25rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                "2xl": [
                    "1.5rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "3xl": [
                    "1.88rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "4xl": [
                    "2.25rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "5xl": [
                    "3rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "6xl": [
                    "3.75rem",
                    { lineHeight: "1.2", letterSpacing: "-0.02em" },
                ],

                text8: "8px",
                text10: "10px",
                text12: "12px",
                text14: "14px",
                text16: "16px",
                text18: "18px",
                text20: "20px",
                text22: "22px",
                text24: "24px",
                text26: "26px",
                text28: "28px",
                text32: "32px",
                text34: "34px",
                text36: "36px",
                text40: "40px",
                text44: "44px",
                text46: "46px",
                text48: "48px",
                text50: "50px",
                text52: "52px",
                text56: "56px",
                text60: "60px",
                text64: "64px",
                text72: "72px",
                text76: "76px",
                text80: "80px",
            },

            backgroundImage: {
                Hero_Doctor_mobile:
                    "url('/public/images/img/Hero_Doctor_mobile.png')",
                Hero_Doctor: "url('/public/images/img/Hero_Doctor.png')",
            },

            backgroundColor: {
                primario: "#232B52",
                secundario: "#007FC8",
                terciario: "#161A32",
            },
            textColor: {
                primario: "#232B52",
                secundario: "#007FC8",
                terciario: "#161A32",
            },
            borderColor: {
                selectCheck: "#173525",
                borderOrange: "#E38533",
                borderverde: "#33BF82",
            },

            screens: {
                xs: "320px",
                "2xs": "370px",
                sm: "640px",
                "2sm": "700px",
                md: "768px",
                "1md": "850px",
                "2md": "900px",
                "3md": "980px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            borderWidth: {
                3: "3px",
            },
            minWidth: {
                36: "9rem",
                44: "11rem",
                56: "14rem",
                60: "15rem",
                72: "18rem",
                80: "20rem",
            },
            maxWidth: {
                "8xl": "88rem",
                "9xl": "96rem",
            },
            zIndex: {
                60: "60",
            },
            backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '100%': '100%',
                '16': '4rem',
            },
        },
    },

    plugins: [
        forms,
        typography,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant("sidebar-expanded", ({ modifySelectors, separator }) => {
                modifySelectors(
                    ({ className }) =>
                        `.sidebar-expanded .${e(
                            `sidebar-expanded${separator}${className}`
                        )}`
                );
            });
        }),
    ],
};
