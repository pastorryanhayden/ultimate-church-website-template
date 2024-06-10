import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
 
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: [
//                 ...refreshPaths,
//                 'app/Livewire/**',
//             ],
//         }),
//     ],
// })

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js", "resources/css/filament/admin/theme.css"],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: "localhost",
            protocol: "ws",
        },
    },
});