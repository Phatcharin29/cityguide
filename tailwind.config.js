const sizes = {
  sm: "640px",
  md: "768px",
  lg: "1024px",
  xl: "1280px",
  "2xl": "1536px",
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.html", "./**/*.js", "!./node_modules"],
  screens: sizes,
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: ".75rem",
        xl: "0",
      },
    },
    screens: sizes,
    extend: {
      backgroundImage: {},
      size: sizes,
      width: sizes,
      maxWidth: sizes,
      minWidth: sizes,
      fontSize: {
        xs: ["13px", "1.5"],
        sm: ["14px", "1.5"],
        base: ["16px", "1.5"],
        md: ["16px", "1.5"],
        lg: ["20px", "1.5"],
        xl: ["25px", "1.5"],
        "2xl": ["31px", "1.5"],
        "3xl": ["39px", "1.5"],
        "4xl": ["49px", "1.5"],
        "5xl": ["61px", "1.5"],
        "6xl": ["90px", "1.5"],
        "7xl": ["120px", "1.5"],
      },
    },
  },
  plugins: [],
}

