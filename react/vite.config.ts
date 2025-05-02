import react from "@vitejs/plugin-react";
import { defineConfig } from "vite";

import tailwindcss from "@tailwindcss/vite";

// Versão com arquivos .js dividos separados após o build

// export default defineConfig({
//   plugins: [react(), tailwindcss()],
//   build: {
//     rollupOptions: {
//       input: {
//         internalApp: "./src/main.tsx",
//         phpWidgets: "./src/reactEntrypoint.tsx",
//       },
//       output: {
//         entryFileNames: (chunkInfo) => {
//           if (chunkInfo.name === "phpWidgets") {
//             return "phpWidgets.js"; // Nome para o arquivo de inserção do react
//           }
//           return "[name].js"; // Padrão para os outros
//         },

//         chunkFileNames: "assets/[name].js",
//         assetFileNames: "assets/[name][extname]",
//       },
//     },
//     outDir: "react",
//     emptyOutDir: true,
//   },
// });

// Versão base com apenas 1 arquivo JS

export default defineConfig({
  plugins: [react(), tailwindcss()],
  base: "./",
  build: {
    rollupOptions: {
      output: {
        entryFileNames: "assets/app.js",
        chunkFileNames: "assets/[name].js",
        assetFileNames: "assets/[name][extname]",
      },
    },
    outDir: "web/react",
    emptyOutDir: true,
  },
});
