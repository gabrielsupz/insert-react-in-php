import { createRoot } from "react-dom/client";
import {
  DomInjectionIntegrationSteps,
  IframeIntegrationSteps,
  Info,
  MyComponent,
} from "./components/exposed";

// eslint-disable-next-line @typescript-eslint/no-explicit-any
function mountReactComponent(Component: React.FC<any>, containerId: string) {
  const container = document.getElementById(containerId);
  if (container) {
    // Caso precisemos passar alguma prop entre so componentes react e php
    // O padrão seria nesse caso o data-props usado da seguinte maneira EX:
    // <div
    //   id="react-my-component"
    //   data-props='{"userName":"João"}'
    // />

    const raw = container.getAttribute("data-props");
    const props = raw ? JSON.parse(raw) : {};

    const root = createRoot(container);
    root.render(<Component {...props} />);
  }
}

export function insertAllReactComponents() {
  mountReactComponent(MyComponent, "react-my-component");
  mountReactComponent(Info, "react-info");
  mountReactComponent(IframeIntegrationSteps, "react-iframe");
  mountReactComponent(DomInjectionIntegrationSteps, "react-dom");
}
