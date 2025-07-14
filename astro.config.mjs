import { defineConfig } from "astro/config";
import sitemap from "@astrojs/sitemap";

// https://astro.build/config
export default defineConfig({
    site: 'https://inby.dev',
    prefetch: true,

    build: {
        assets: "assets",
    },

    responsiveImages: true,

    integrations: [
        sitemap({
            changefreq: 'monthly',
            priority: 1.0,
            lastmod: new Date('2025-05-14'),
        }),
    ],
});
