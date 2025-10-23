import elements from "@tailwindplus/elements";
import flowbite from "flowbite/plugin";

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/@tailwindplus/elements/**/*.js",
  ],
  plugins: [elements, flowbite],
};
