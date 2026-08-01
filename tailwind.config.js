/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#2563EB',
                    dark: '#1D4ED8',
                },
                dark: '#0F172A',
                surface: '#F8FAFC',
                body: '#1E293B',
                border: '#E2E8F0',
            },
            fontFamily: {
                sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            boxShadow: {
                soft: '0 10px 30px -12px rgba(15, 23, 42, 0.15)',
                'soft-lg': '0 20px 45px -15px rgba(15, 23, 42, 0.2)',
            },
            backdropBlur: {
                glass: '16px',
            },
        },
    },
    plugins: [],
};
