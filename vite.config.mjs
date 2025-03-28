import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite'
export default defineConfig({
    build: {
        manifest: true,
        rollupOptions: {
          input: 'resources/js/main.js',
        },
        outDir: 'build'
      },
      plugins: [
        tailwindcss(),
      ],
  server: {
    cors: true, // Activer CORS pour le serveur de développement
    headers: {
      'Access-Control-Allow-Origin': '*', // Autoriser toutes les origines
      'Access-Control-Allow-Methods': 'GET,POST,PUT,DELETE,OPTIONS',
      'Access-Control-Allow-Headers': 'Content-Type, Authorization',
    },
    proxy: {
      '/api': {
        target: 'http://portfoliopro.test',
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/api/, ''),
      },
    },
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: `@import "@fortawesome/fontawesome-free/scss/fontawesome.scss";
                          @import "@fortawesome/fontawesome-free/scss/solid.scss";
                          @import "@fortawesome/fontawesome-free/scss/brands.scss";`
        }
      }
    }
  },
});
