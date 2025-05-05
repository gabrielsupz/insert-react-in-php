<?php

// lib/controller/VereadorController.class.php
class VereadorController extends sfActions
{
    public function executeNew(sfWebRequest $request)
    {
        // Criação do formulário
        $this->form = new VereadorForm();

        // Verifica se o método da requisição é POST
        if ($request->isMethod('post')) {
            // Faz o bind dos dados recebidos para o formulário
            $this->form->bind($request->getParameter($this->form->getName()));

            // Verifica se o formulário é válido
            if ($this->form->isValid()) {
                // Salva os dados do formulário
                $this->form->save();
                
                // Redireciona para a lista de vereadores após salvar
                $this->redirect('/vereador/list');
            }
        }
    }

    // Método GET para buscar todos os vereadores
    public function executeIndex(sfWebRequest $request)
    {
        // Busca todos os vereadores na tabela
        $this->vereadores = Doctrine_Core::getTable('Vereador')->findAll();
    }
}
