<?php

/**
 * Vereador filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVereadorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefone'     => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'numero_votos' => new sfWidgetFormFilterInput(),
      'partido_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Partido'), 'add_empty' => true)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nome'         => new sfValidatorPass(array('required' => false)),
      'telefone'     => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'numero_votos' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'partido_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Partido'), 'column' => 'id')),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('vereador_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vereador';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nome'         => 'Text',
      'telefone'     => 'Text',
      'email'        => 'Text',
      'numero_votos' => 'Number',
      'partido_id'   => 'ForeignKey',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
