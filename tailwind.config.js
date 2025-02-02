/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/livewire/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './node_modules/preline/dist/*.js',
    "./resources/components/**/*.blade.php",
  ],
  theme: {
    extend: {
      container: {
        padding: '1rem',
        center: true,
      },
      colors: {
        accent: {
          200: "#EBF3FE",
          300: "#539BFF",
          400: "#4784d9",
          500: "#ECF2FF",
          600: "#5D87FF",
          700: "#4f73d9",
        },
        accentDark:{
          1: "#27272a",
          2: "#737373",
          3: "#a3a3a3",
          4: "#d4d4d4",
          5: "#e5e5e5"
        },
        dark: {
          1: "#171717",
          2: "#262626",
          3: "#404040"
        },
        border: {
          1: "#d1d5db",
          2: "#9ca3af"
        },
        borderDark: {
          1: "#404040",
          2: "#525252"
        },
        button: {
          1: "#2563eb",
          2: "#1d4ed8"
        },
        cyan: {
          400: "#E8F7FF",
          500: "#49BEFF",
          600: "#3ea2d9",
        },
        teal: {
          400: "#E6FFFA",
          500: "#13DEB9",
          600: "#10bd9d",
        },
        yellow: {
          400: "#FEF5E5",
          500: "#FFAE1F",
          600: "#d9941a",
        },
        gray: {
          100: "#ebf1f6",
          200: "#DFE5EF",
          400: "#e5eaef",
          500: "#5A6A85",
          600: "#2a3547",
          700: "#202936",
        },
        transparent: "transparent",
        white: "#fff",
      },
      fontFamily: {
        sans: ["Plus Jakarta Sans", "sans-serif"],
      },
      borderRadius: {
        none: "0px",
        md: "7px",
        full: "50%",
        "2xl": "15px",
        "3xl": "9999px",
      },
      extend: {
        boxShadow: {
          md: "rgba(145,158,171,0.2) 0px 0px 2px 0px,rgba(145,158,171,0.12) 0px 12px 24px -4px",
          xl: "inset 0 1px 2px rgba(90,106,133,0.075)",
        },
      },
    },
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),

  ],
}

