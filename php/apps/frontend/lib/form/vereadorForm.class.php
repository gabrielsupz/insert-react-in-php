<?php

class VereadorForm extends BaseVereadorForm
{
    public function configure()
    {
        // Definindo widgets para os campos
        $this->widgetSchema['nome'] = new sfWidgetFormInputText();
        $this->validatorSchema['nome'] = new sfValidatorString(array('max_length' => 255, 'required' => true));

        $this->widgetSchema['telefone'] = new sfWidgetFormInputText();
        $this->validatorSchema['telefone'] = new sfValidatorString(array('max_length' => 15, 'required' => true));

        $this->widgetSchema['email'] = new sfWidgetFormInputText();
        $this->validatorSchema['email'] = new sfValidatorEmail(array('required' => true));

        $this->widgetSchema['numero_votos'] = new sfWidgetFormInputText();
        $this->validatorSchema['numero_votos'] = new sfValidatorInteger(array('min' => 0, 'required' => true));

        // Configurando o campo de relacionamento com a tabela Partido
        $this->widgetSchema['id_partido'] = new sfWidgetFormDoctrineChoice(array(
            'model' => 'Partido', 
            'add_empty' => true,  // permite um valor vazio (null)
            'order_by' => array('nome', 'asc')  // ordena os partidos pelo nome
        ));
        $this->validatorSchema['id_partido'] = new sfValidatorDoctrineChoice(array(
            'model' => 'Partido',
            'required' => true
        ));

        // Removendo o campo de ID, que é gerado automaticamente
        unset($this['id']);

        // Personalizando a maneira como o formulário é renderizado (opcional)
        $this->widgetSchema->setFormFormatterName('table');
    }
}
