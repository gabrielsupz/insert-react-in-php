export const DomInjectionIntegrationSteps = () => {
  const steps = [
    {
      title: "1. Criação do componente React",
      description:
        "Crie um componente normalmente com React. Por exemplo, `MyComponent.tsx`, que será montado dinamicamente.",
      code: `export default function MyComponent({ userName }) {
  return <h1>Olá, {userName}!</h1>;
}`,
    },
    {
      title: "2. Função de montagem via DOM",
      description:
        "Crie uma função genérica para montar qualquer componente React em um elemento identificado por ID. Suporta props via atributo `data-props`.",
      code: `import { createRoot } from 'react-dom/client';

function mountReactComponent(Component, containerId) {
  const container = document.getElementById(containerId);
  if (container) {
    const raw = container.getAttribute("data-props");
    const props = raw ? JSON.parse(raw) : {};

    const root = createRoot(container);
    root.render(<Component {...props} />);
  }
}

export function insertAllReactComponents() {
  mountReactComponent(MyComponent, "react-my-component");
  mountReactComponent(Info, "react-info");
}`,
    },
    {
      title: "3. Configuração do Vite",
      description:
        "Ajuste o `vite.config.ts` para gerar os arquivos na pasta certa com nomes previsíveis.",
      code: `import react from "@vitejs/plugin-react";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [react()],
  build: {
    rollupOptions: {
      output: {
        entryFileNames: "assets/app.js",
        chunkFileNames: "assets/[name].js",
        assetFileNames: "assets/[name][extname]",
      },
    },
    outDir: "react", // saída para /web/react
    emptyOutDir: true,
  },
});`,
    },
    {
      title: "4. Build da aplicação React",
      description: "Execute o build com o comando abaixo:",
      code: "npm run build",
    },
    {
      title: "5. Copiar a pasta para o Symfony",
      description:
        "Após o build, coloque o conteúdo da pasta `react/` (ou `dist/`) dentro da pasta pública do Symfony, geralmente `/web/react`.",
    },
    {
      title: "6. Importar os arquivos JS/CSS no layout do Symfony",
      description:
        "No arquivo de layout principal do Symfony (geralmente em `/apps/frontend/templates/layout.php`), adicione as tags de importação dos arquivos React.",
      code: `<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/react/assets/index.css" />
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php include('header.php') ?>
    <?php echo $sf_content ?>
    <?php include('footer.php') ?>

    <script src="/react/assets/app.js"></script>
  </body>
</html>`,
    },
    {
      title: "7. Criar uma rota/tela PHP e inserir o container React",
      description:
        "Crie uma view/tela Symfony que contenha o `div` com `id` correspondente ao esperado na função `mountReactComponent`. Você pode passar props via `data-props`.",
      code: `<main style="padding: 20px;">
  <div
    id="react-my-component"
    data-props='{"userName":"Gabriel"}'
  ></div>
</main>`,
    },
    {
      title: "8. Executar a montagem ao carregar a página",
      description:
        "Certifique-se de que o script React chame `insertAllReactComponents()` quando carregado, por exemplo no `index.tsx`.",
      code: `import { insertAllReactComponents } from './mountReact';
insertAllReactComponents();`,
    },
  ];

  return (
    <div className="tw:max-w-4xl tw:mx-auto tw:p-4 tw:bg-white tw:rounded-2xl tw:shadow">
      <h1 className="tw:text-2xl tw:font-bold tw:mb-6">
        Integração React + Symfony 1.4 via Inserção Direta na DOM
      </h1>
      <ol className="tw:space-y-6">
        {steps.map((step, index) => (
          <li
            key={index}
            className="tw:bg-gray-50 tw:p-4 tw:rounded-lg tw:border tw:border-gray-200"
          >
            <h2 className="tw:font-semibold tw:text-lg tw:mb-1">
              {step.title}
            </h2>
            <p className="tw:text-sm tw:text-gray-700 tw:mb-2">
              {step.description}
            </p>
            {step.code && (
              <pre className="tw:bg-gray-900 tw:text-green-200 tw:text-sm tw:p-3 tw:rounded-lg tw:overflow-x-auto">
                <code>{step.code}</code>
              </pre>
            )}
          </li>
        ))}
      </ol>
    </div>
  );
};
