export const Info = () => {
  return (
    <div className="tw:w-full tw:py-7 tw:rounded-3xl tw:px-5 tw:flex tw:flex-col tw:gap-4 tw:bg-white tw:shadow-sm tw:mx-2">
      <h2 className="tw:text-xl tw:font-bold">
        Como adicionar uma nova rota no Symfony 1.x (PHP)
      </h2>

      <p className="tw:text-sm tw:text-gray-700">
        A seguir estão os passos necessários para criar uma nova rota funcional
        dentro de uma aplicação Symfony 1.x.
      </p>

      <ol className="tw:list-decimal tw:ml-5 tw:space-y-2 tw:text-sm tw:text-gray-800">
        <li>
          No arquivo <code>routing.yml</code>, adicione uma nova entrada com:
          <ul className="tw:list-disc tw:ml-5 tw:mt-1 tw:space-y-1">
            <li>Nome da rota</li>
            <li>URL desejada</li>
            <li>
              Destino no formato <code>módulo/ação</code>
            </li>
          </ul>
        </li>

        <li>
          No módulo especificado, abra o arquivo <code>actions.class.php</code>{" "}
          e crie o método da ação com o nome correspondente.
          <br />
          <span className="tw-text-gray-600">
            Exemplo: <code>executeMinhaAcao()</code>
          </span>
        </li>

        <li>
          Crie o template de visualização chamado{" "}
          <code>minhaAcaoSuccess.php</code> dentro da pasta{" "}
          <code>templates/</code> do módulo.
        </li>

        <li>
          Acesse a nova rota pelo navegador usando a URL definida no primeiro
          passo.
        </li>
      </ol>
    </div>
  );
};
