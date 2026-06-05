import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                // Bootstrap 5.3 still uses @import / legacy color fns; silence its deprecations.
                quietDeps: true,
                // We intentionally use @import (Bootstrap-compatible); hush that one notice.
                silenceDeprecations: ['import'],
            },
        },
    },
    server: {
        // Bind to IPv4 so the dev-server URL written to public/hot is reachable
        // (Vite 8 otherwise resolves localhost to IPv6 [::1] on Windows, which
        // makes assets fail to load when the app is opened on 127.0.0.1).
        host: '127.0.0.1',
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
