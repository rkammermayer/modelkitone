import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  base: './', // Relativer Pfad – wichtig, damit es in /public korrekt geladen wird
  build: {
    outDir: 'src/dist', // Zielordner für den Build
    emptyOutDir: true   // löscht dist vor jedem Build
  }
})
