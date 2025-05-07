import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import livewire from '@defstudio/vite-livewire-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: false,
        }),
        livewire({
            refresh: [
                ...refreshPaths, // Tracking changes wherever app.js is called
                'app/Http/Livewire/**', // To monitor LiveWire components (if applicable)
                'app/Custom/Path/**', // You can show the path to the files you want the vite tool to follow.
            ]
        }),
        tailwindcss(),
    ],
    server: {
        port: 5173,
        host: '0.0.0.0',
        strictPort: true,
        origin: `${process.env.DDEV_PRIMARY_URL.replace(/:\d+$/, "")}:5173`,
        cors: {
            origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(\.ddev\.site)(?::\d+)?$/,
        },
    },
});
