import path from 'path';

export default {
    root: path.resolve(__dirname, 'resources'),
    build: {
        outDir: path.resolve(__dirname, 'public'),
        emptyOutDir: true,
        rollupOptions: {
            input: {
                dashboard: path.resolve(__dirname, 'resources/js/dashboard/dashboard.js'),
                public: path.resolve(__dirname, 'resources/js/public/public.js'),
            },
            output: {
                entryFileNames: 'js/[name].js',  // Outputs to public/js/dashboard.js and public/js/public.js
            }
        },
    },
    server: {
        open: false,
    },
};
