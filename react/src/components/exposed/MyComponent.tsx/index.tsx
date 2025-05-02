interface Props {
  userName: string;
}

export const MyComponent = ({ userName }: Props) => {
  return (
    <div className="tw:border tw:rounded-4xl tw:w-full tw:px-5 tw:py-6 tw:mt-4 tw:flex tw:flex-col tw:gap-6 tw:mx-2 tw:bg-white tw:shadow-sm">
      <h1 className="tw:font-bold tw:text-2xl">Olá, {userName}!</h1>

      <p className="tw:text-base tw:text-gray-800">
        Esta é uma aplicação de <strong>teste</strong> que demonstra como
        integrar componentes <strong>React</strong> em páginas{" "}
        <strong>PHP</strong> legadas, utilizando abordagens modernas e seguras.
      </p>

      <section className="tw:flex tw:flex-col tw:gap-2">
        <h2 className="tw:font-semibold tw:text-lg">Etapas principais</h2>
        <ul className="tw:list-disc tw:ml-5 tw:space-y-1 tw:text-sm">
          <li>
            Escolher o meio de integração com React: via DOM ou via iframe.
          </li>
          <li>
            Para integração via <strong>iframe</strong>,{" "}
            <a
              href="/iframe"
              className="tw:underline tw:text-blue-600 hover:tw:text-blue-800"
            >
              veja aqui
            </a>
            .
          </li>
          <li>
            Para integração via <strong>DOM</strong>,{" "}
            <a
              href="/dom"
              className="tw:underline tw:text-blue-600 hover:tw:text-blue-800"
            >
              veja aqui
            </a>
            .
          </li>
        </ul>
      </section>

      <section className="tw:flex tw:flex-col tw:gap-2">
        <h2 className="tw:font-semibold tw:text-lg">Cuidados importantes</h2>
        <ul className="tw:list-disc tw:ml-5 tw:space-y-1 tw:text-sm">
          <li>
            Estilos CSS podem conflitar entre React e a aplicação PHP. Por isso,
            recomendamos o uso de prefixos no Tailwind ao usar integração via
            DOM.
          </li>
          <li>
            Utilize o <code>prefix</code> no Tailwind (como <code>tw:</code>)
            para evitar sobreposição de estilos.
          </li>
          <li>
            Prefira o Tailwind v3, que possui suporte mais amplo a navegadores
            legados comparado à v4.
          </li>
          <li>
            Algumas adaptações podem exigir ajustes manuais em arquivos PHP
            existentes.
          </li>
        </ul>
      </section>

      <section className="tw:flex tw:flex-col tw:gap-2">
        <h2 className="tw:font-semibold tw:text-lg">
          Diferença entre integração via DOM e iframe
        </h2>
        <ul className="tw:list-disc tw:ml-5 tw:space-y-1 tw:text-sm">
          <li>
            <strong>Iframe:</strong> garante isolamento total entre os estilos
            do React e da aplicação PHP. Cada componente React pode ter seu
            próprio HTML separado e não é afetado nem afeta o restante da
            aplicação.
          </li>
          <li>
            <strong>DOM:</strong> o React é inserido diretamente no DOM da
            aplicação PHP. Nesse caso, os estilos CSS de ambos os lados
            compartilham o mesmo escopo, podendo gerar conflitos de layout e
            aparência.
          </li>
          <li>
            Ao usar DOM, é essencial prefixar as classes (ex: <code>tw:*</code>)
            e evitar estilos globais para minimizar interferências entre os
            contextos, porém ao usar DOM é possível deixar seu componente
            adaptável a alterações da aplicação príncipal.
          </li>
        </ul>
      </section>

      <section className="tw:flex tw:flex-col tw:gap-2">
        <h2 className="tw:font-semibold tw:text-lg">
          Funcionalidades suportadas
        </h2>
        <ul className="tw:list-disc tw:ml-5 tw:space-y-1 tw:text-sm">
          <li>
            Passar dados do PHP para o React usando atributos{" "}
            <code>data-*</code> em elementos DOM.
          </li>
          <li>
            Reutilizar os mesmos componentes React em diferentes páginas, com
            configurações dinâmicas.
          </li>
        </ul>
      </section>

      <p className="tw:text-sm">
        Para mais informações, acesse a página{" "}
        <a
          href="/sobre"
          className="tw:underline tw:text-blue-600 hover:tw:text-blue-800"
        >
          Sobre
        </a>
        .
      </p>

      <div className="tw:flex tw:flex-wrap tw:items-center tw:justify-center tw:gap-4 tw:pt-4 tw:border-t tw:mt-6">
        <span title="React">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
            alt="React"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="PHP">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
            alt="PHP"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="TypeScript">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg"
            alt="TypeScript"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="JavaScript">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
            alt="JavaScript"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="CSS3">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
            alt="CSS"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="HTML5">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
            alt="HTML"
            className="tw:w-8 tw:h-8"
          />
        </span>
        <span title="Symfony">
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original.svg"
            alt="Symfony"
            className="tw:w-8 tw:h-8 tw:invert"
          />
        </span>
      </div>
    </div>
  );
};
