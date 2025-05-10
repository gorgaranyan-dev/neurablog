import path from 'path';

export default {
    root: path.resolve(__dirname, 'resources'),  // Use the 'resources' folder for source files
    build: {
        outDir: path.resolve(__dirname, 'public'),  // Output the built files to the 'public' folder
        emptyOutDir: true,  // Clean the output folder before building
        rollupOptions: {
            input: path.resolve(__dirname, 'resources/js/main.js'),  // Your entry JS file (if any)
        },
    },
    server: {
        open: false,  // Don't automatically open the browser
    },
};
