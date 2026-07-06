import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {

            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },

            colors: {

                primary: '#4F46E5',
                secondary: '#7C3AED',
                success: '#22C55E',
                warning: '#F59E0B',
                danger: '#EF4444',
                info: '#0EA5E9',
                dark: '#1F2937',

            },

            borderRadius: {

                xl: '1rem',
                '2xl': '1.5rem',

            },

            boxShadow: {

                card: '0 10px 30px rgba(0,0,0,.08)',
                soft: '0 5px 15px rgba(0,0,0,.08)',

            },

            transitionDuration: {

                400: '400ms',

            },

            scale: {

                102: '1.02',
                103: '1.03',

            },

        },
    },

    plugins: [
        forms,
    ],
};