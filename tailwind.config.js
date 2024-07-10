/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#edf2f4',  // Warna biru kustom
                secondary: '#8d99ae',  // Warna hitam kustom
                accent: '#2b2d42',  // Warna kuning kustom
            },
            fontFamily: {
                'elegant': ['Playfair Display', 'serif'],
                 'minimal': ['Bebas Neue', 'sans-serif'],
                 'all': ['Roboto', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
