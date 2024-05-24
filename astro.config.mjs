import { defineConfig } from 'astro/config';

// https://astro.build/config
export default defineConfig({
    prefetch: true,
    compressHTML: false,
    build: {
        inlineStylesheets: 'never'
    }
})