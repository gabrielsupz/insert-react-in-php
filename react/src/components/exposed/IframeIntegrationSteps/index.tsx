export const IframeIntegrationSteps = () => {
  const steps = [
    {
      title: "1. Configurar Vite para múltiplos pontos de entrada",
      description:
        "No seu arquivo `vite.config.js`, adicione configurações para gerar arquivos HTML distintos para cada componente. Configure os pontos de entrada para cada componente React que você quer gerar um HTML separado.",
      code: `export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: 'src/main.js',
        calendar: 'src/components/Calendar.js',
        registerForm: 'src/components/RegisterForm.js',
      },
    },
  },
})`,
    },
    {
      title: "2. Fazer o build da aplicação React",
      description:
        "Execute `npm run build` para gerar os arquivos estáticos para cada componente.",
      code: "npm run build",
    },
    {
      title: "3. Copiar os arquivos do build para o Symfony",
      description:
        "Copie a pasta `dist/` gerada pelo Vite para o diretório público do Symfony (ex: `web/react-app`).",
      code: "cp -r dist/ /caminho/do/symfony/web/react-app",
    },
    {
      title: "4. Criar uma rota no Symfony para exibir os iframes",
      description:
        "Crie uma action e um template no Symfony que renderizem os iframes apontando para os arquivos HTML gerados para cada componente React.",
      code: `<iframe
  src="/react-app/calendar.html"
  style="width: 100%; height: 100%; border: none;"
  title="Calendário"
/>

<iframe
  src="/react-app/registerForm.html"
  style="width: 100%; height: 100%; border: none;"
  title="Formulário de Registro"
/>`,
    },
    {
      title: "5. Configurar base no vite.config.js",
      description:
        "Garanta que os caminhos relativos estejam corretos, definindo a base no Vite.",
      code: `export default defineConfig({
  base: '/react-app/',
})`,
    },
    {
      title: "6. Rebuild após ajustes",
      description:
        "Após ajustar os pontos de entrada no Vite, rode `npm run build` novamente para aplicar as mudanças.",
      code: "npm run build",
    },
  ];

  return (
    <div className="tw:max-w-3xl tw:mx-auto tw:p-4 tw:bg-white tw:rounded-2xl tw:shadow">
      <h1 className="tw:text-2xl tw:font-bold tw:mb-6">
        Integração React (Vite) com Symfony 1.4 via Iframe
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
