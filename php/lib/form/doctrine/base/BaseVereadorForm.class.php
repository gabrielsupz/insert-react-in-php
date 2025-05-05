<?php

/**
 * Vereador form base class.
 *
 * @method Vereador getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVereadorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nome'         => new sfWidgetFormTextarea(),
      'telefone'     => new sfWidgetFormTextarea(),
      'email'        => new sfWidgetFormTextarea(),
      'numero_votos' => new sfWidgetFormInputText(),
      'partido_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'), 'add_empty' => false)),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nome'         => new sfValidatorString(),
      'telefone'     => new sfValidatorString(array('required' => false)),
      'email'        => new sfValidatorString(array('required' => false)),
      'numero_votos' => new sfValidatorInteger(array('required' => false)),
      'partido_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('vereador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vereador';
  }

}
