<?php

/**
 * alderman actions.
 *
 * @package    symfony
 * @subpackage alderman
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class aldermanActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeNew(sfWebRequest $request)
    {
        $this->form = new VereadorForm();

        if ($request->isMethod('post'))
        {
            $this->form->bind($request->getParameter($this->form->getName()));
            if ($this->form->isValid())
            {
                $this->form->save();
                $this->redirect('@list_aldermans');
            }
        }
    }

    public function executeIndex(sfWebRequest $request)
    {
        $this->vereadores = Doctrine_Core::getTable('Vereador')->findAll();
    }
}
