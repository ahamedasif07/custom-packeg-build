/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // রুট এর php ফাইল
    "./inc/**/*.php",
    "./src/**/*.js",
    "./templates/**/*.php", // 👈 এই লাইনটি খুব গুরুত্বপূর্ণ, এটি যোগ করুন
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
