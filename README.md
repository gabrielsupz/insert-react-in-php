# Integração React em Projeto PHP Legacy (Symfony)

Este é um projeto **exemplo** que demonstra como integrar componentes **React** modernos dentro de uma aplicação **PHP legada**, utilizando o framework **Symfony**. A proposta é apresentar abordagens práticas e seguras para incluir interfaces ricas com React em projetos existentes, sem a necessidade de reescrever toda a base de código.

## 🔧 Tecnologias Utilizadas

- React + TypeScript (via [Vite](https://vitejs.dev/))
- Tailwind CSS (com prefixo `tw:` para evitar conflitos de estilo)
- PHP (servidor embutido)
- Symfony (backend legado)

## 🚀 Objetivo

Mostrar como componentes React podem ser embutidos em páginas PHP legadas, com duas formas principais de integração:

1. **Via DOM:** o React é renderizado diretamente em um elemento da página PHP.
2. **Via iframe:** o componente React é isolado em um iframe, evitando conflitos de estilo.

## 🧪 Como executar

1. Instale as dependências do projeto React:

```bash
cd react
npm install
```

2. Compile o projeto para produção:

```bash
npm run build
```

3. Será gerado a pasta `react` dentro da pasta `web` da aplicação PHP diretamente:

> A esttrutura final ficará algo como: `php/web/react/index.html` (ou os arquivos gerados pelo Vite).

4. Rode o servidor PHP embutido:

```bash
php -S 127.0.0.1:5000 -t ./php/web
```

5. Acesse no navegador:  
[http://127.0.0.1:5000](http://127.0.0.1:5000)

## 📚 Funcionalidades Demonstradas

- Passagem de dados do PHP para o React usando atributos `data-*` no HTML.
- Reutilização de componentes React com dados dinâmicos.
- Integração segura e incremental de componentes modernos em páginas legadas.
- Suporte a múltiplas estratégias de integração (DOM e iframe).

## 🔄 Diferença entre DOM e iframe

- **Iframe**:  
  - Garante isolamento total dos estilos.
  - Evita conflitos com CSS legado.
  - Útil quando o componente precisa de independência visual.

- **DOM**:  
  - Insere o React diretamente na árvore DOM da aplicação.
  - Pode sofrer (ou causar) conflitos de estilo.
  - Permite uma integração mais fluida com a estrutura existente da página PHP.

## ⚠️ Cuidados Importantes

- **Prefixos no Tailwind**:  
  Use um prefixo como `tw:` nas classes do Tailwind para evitar conflitos com os estilos da aplicação PHP.

- **Tailwind CSS v3**:  
  Recomendado por sua melhor compatibilidade com navegadores antigos.

- **Estilos globais**:  
  Evite ao máximo, especialmente ao integrar via DOM.

- **Adaptação de arquivos PHP**:  
  Em alguns casos, será necessário modificar arquivos PHP existentes para criar pontos de montagem (`div` com `id`) ou para passar dados via `data-*`.

## 📁 Estrutura Sugerida

```
/php
  ├── web/
  │   ├── index.php
  │   └── react/      ← pasta onde os arquivos buildados do React serão copiados
/react
  ├── src/
  ├── index.html
  ├── package.json
  └── vite.config.ts
```

## ✅ Boas Práticas

- Evite misturar diretamente código React e PHP no mesmo arquivo.
- Centralize a lógica de montagem do React em pontos claros do HTML (ex: `div id="react-root"`).
- Quando possível, mantenha o React responsável apenas pelo componente específico, sem assumir o controle da página inteira.

---

Este projeto serve como ponto de partida para modernizar gradualmente o frontend de sistemas PHP legados, promovendo uma transição suave e controlada para tecnologias modernas.